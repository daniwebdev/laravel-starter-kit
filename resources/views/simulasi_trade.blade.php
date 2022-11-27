<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #app {
            max-width: 600px;
            height: 100vh;
            overflow: auto;
        }
    </style>
</head>
<body>

    <div id="app" class="bg-gray-900 m-auto text-gray-500 relative">
        <div style="position: fixed; bottom: 0; width: 600px" class="flex items-center justify-between bg-gray-800 text-white text-xs">
            <span class="px-3">
                Powered by <a class="text-blue-500 italic" href="https://insideofcode.com/" target="_blank">insideofcode.com</a>
            </span>

            <span class="bg-orange-600 font-bold py-2 px-3">PREVIEW ONLY</span>
        </div>

        <div class="p-10">

            <h1 class="font-bold text-2xl m-0 p-0 text-white">
                TRADE APP
            </h1>
            <p>
                Trading Simulation
            </p>

            <div class="grid grid-cols-2 gap-3">
                <div class="mt-5 border border-gray-700 rounded  p-3">
                    <h2 class="font-bold text-white">
                        Saldo
                    </h2>
                    <h3>
                        $<span id="saldo">100.00</span>
                    </h3>

                    <h2 class="font-bold text-white mt-10">
                        Equity
                    </h2>
                    <h3>
                        $<span id="balance-equity">100.00</span>
                    </h3>

                    <h2 class="font-bold text-white mt-10">
                        Margin Equity
                    </h2>
                    <h3 id="total-margin-equity">
                        0
                    </h3>
                </div>
                <div class="mt-5 border border-gray-700 rounded p-3"">
                    <h2 class="font-bold text-white">
                        BNB/USDT
                    </h2>
                    <h3 id="markPrice">

                    </h3>
                    <input id="markPriceInput" type="text" style="display: none" placeholder="markPrice" value="50">
                </div>
            </div>

            <hr class="my-5 border-gray-600">

            <section class="mt-3 grid grid-cols-3 gap-3">
               <div>
                    <label for="" class="text-white font-bold block">Leverage</label>
                    <select name="" id="trade-leverage" class="w-full rounded bg-gray-800 p-1.5">
                        <option value="">- Set Leverage -</option>
                        <option value="25">25x</option>
                        <option value="50">50x</option>
                    </select>
               </div>
               <div>
                    <label for="" class="text-white font-bold block">Size / Vol.</label>
                    <input name="" type="number" id="trade-vol" class="w-full rounded bg-gray-800 p-1">
               </div>
               <div>
                    <label for="" class="text-white font-bold block">Total (Price)</label>
                    <input type="text"readonly id="trade-total" class="w-full rounded bg-gray-800 p-1 outline-none">
                    <small>Sisa Margin: <span id="free-margin-equity"></span></small>
               </div>
            </section>


            <section class="grid grid-cols-2 mt-3">

                <button id="buy-action" class="w-full p-3 bg-green-500 hover:bg-green-600 text-white font-bold">
                    Buy
                </button>

                <button id="sell-action" class="w-full p-3 bg-red-500 hover:bg-red-600 text-white font-bold">
                    Sell
                </button>

            </section>

            <hr class="my-5 border-gray-600">

            <div id="TRADE-ACTIVE" class="mt-10">

                <h2 class="font-bold text-white text-2xl">Trade Active</h2>

                <div class="trade-container mt-5">

                    <div hidden class="trade-active-item border border-gray-700 rounded p-3">
                        <div class="grid grid-cols-3">
                            <div class="flex flex-col justify-between gap-5">
                                <h3 class="text-white font-bold">BNB/USDT</h3>

                                <div class="flex gap-3 text-xs w-full">
                                    <h5>Vol: <span class="volume">20</span></h5>
                                    <h5>Leverage: <span class="markPrice">25</span></h5>
                                    <h5>MarkPrice: <span class="markPrice">20</span></h5>
                                </div>
                            </div>

                            <div></div>

                            <div class="text-right flex flex-col justify-center">
                                <span class="font-bold text-xl text-green-400 block">+500</span>
                                <span class="text-lg text-green-400">
                                    +5%
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous'></script>
    <script>

        var balance           = parseFloat( $('#saldo').text() );
        var saldoEquity       = 0;
        var totalMarginEquity = 0;
        var tradeActive       = [];
        var tradeHistory      = {};
        var countRequest      = 0;

        var totalMarginEquityEL = $('#total-margin-equity');
        var leverageEL          = $('#trade-leverage');
        var tradeVolEL          = $('#trade-vol');
        var buyActionBTN        = $('#buy-action');
        var sellActionBTN        = $('#sell-action');
        var markPriceEL         = $('#markPrice');
        var tradeTotalEL        = $('#trade-total')

        var tradeActiveContainer = $('#TRADE-ACTIVE .trade-container')

        // Create WebSocket connection.
       function connect() {
            const socket = new WebSocket('wss://fstream.binance.com/ws/bnbusdt@markPrice');
            // Connection opened
            socket.addEventListener('open', (event) => {
                // socket.send('Hello Server!');
            });

            // Listen for messages
            socket.addEventListener('message', (event) => {
                let data = JSON.parse(event.data);

                let markPrice = parseFloat(data.p).toFixed(2);

                document.querySelector('#markPrice').innerHTML = markPrice ?? 0;

                let markActiveTrade = [];

                let sumPNL = 0;

                for(let activeTrade of tradeActive) {

                    if(activeTrade.type == 'buy') {
                        activeTrade.change = markPrice - activeTrade.entryPrice;
                        activeTrade.changePercent = activeTrade.change / activeTrade.entryPrice
                    } else {
                        activeTrade.change = activeTrade.entryPrice - markPrice;
                        activeTrade.changePercent = activeTrade.change / activeTrade.entryPrice
                    }

                    activeTrade.pnlPercent = activeTrade.changePercent;
                    activeTrade.pnl        = activeTrade.totalEntryPrice * activeTrade.pnlPercent


                    sumPNL += activeTrade.pnl;

                    markActiveTrade.push(activeTrade);
                }

                $('#balance-equity').text((balance + sumPNL).toFixed(2))

                activeTrade = markActiveTrade;

                renderTradeActive();

                if(tradeVolEL.val() != 0) {
                    calculateMarginEquity();

                    calculateTradeTotal();
                }

                countRequest++;

                console.log(countRequest)

                if(countRequest == 199) {
                    socket.close();
                    countRequest = 0;
                    connect();
                }

            });
       }

       $(function() {
            // connect();

            $('#markPrice').text(50)

            $('#markPrice').on('click', function() {
                $('#markPriceInput').show();
                $(this).hide();
            })
            $('#markPriceInput').on('change', function() {
                $('#markPrice').show();
                $(this).hide();

                let value = $(this).val();

                if(value == '') {
                    value = $('#markPrice').text();
                }

                $('#markPrice').text();

                onMarkPriceChange(parseFloat($(this).val()))
            })
       })


        function onMarkPriceChange(markPrice) {

            document.querySelector('#markPrice').innerHTML = markPrice ?? 0;

            let markActiveTrade = [];

            let sumPNL = 0;

            for(let activeTrade of tradeActive) {

                if(activeTrade.type == 'buy') {
                    activeTrade.change = markPrice - activeTrade.entryPrice;
                    activeTrade.changePercent = activeTrade.change / activeTrade.entryPrice
                } else {
                    activeTrade.change = activeTrade.entryPrice - markPrice;
                    activeTrade.changePercent = activeTrade.change / activeTrade.entryPrice
                }

                activeTrade.pnlPercent = activeTrade.changePercent;
                activeTrade.pnl        = activeTrade.totalEntryPrice * activeTrade.pnlPercent

                sumPNL += activeTrade.pnl;

                markActiveTrade.push(activeTrade);
            }

            $('#balance-equity').text((balance + sumPNL).toFixed(2))

            activeTrade = markActiveTrade;

            renderTradeActive();

            if(tradeVolEL.val() != 0) {
                calculateMarginEquity();

                calculateTradeTotal();
            }

        }


        function calculateMarginEquity() {
            var _saldoDeposit = parseFloat($('#saldo').text());
            var _leverage     = parseInt($('#trade-leverage').val());
            var _marginEquity = _saldoDeposit * _leverage;

            totalMarginEquity = _marginEquity;

            $('#total-margin-equity').text(totalMarginEquity.toLocaleString())

            console.log(_marginEquity, totalMarginEquity);
        }

        function calculateTradeTotal() {
            var markPrice = parseFloat( markPriceEL.text() );
            var totalTrade = markPrice * parseInt(tradeVolEL.val());
            var totalMargin = parseFloat(totalMarginEquityEL.text().replace(/,/g, ''))

            if(totalTrade > totalMargin) {
                tradeVolEL.val(0).change();
                let maksimal = Math.floor(totalMargin / markPrice);

                alert('Maksimal Size : ' +  maksimal);
            } else {

                let freeMarginEquity = totalMarginEquity - totalTrade;

                $('#free-margin-equity').text(freeMarginEquity.toLocaleString())

                $('#trade-total').val(totalTrade.toFixed(2));
            }

        }

        function tradeActionBuySell(__type) {

            if(
                leverageEL.val() == ''
                || (parseFloat(tradeVolEL.text()) == NaN && parseFloat(tradeVolEL.text()) <=0)
                || parseFloat(markPriceEL.text()) == NaN
            ) {
                alert("Pastikan input sudah terisi.");

                return false;
            }

            let tradeData = {
                type: __type,
                leverage: leverageEL.val(),
                volume: tradeVolEL.val(),
                entryPrice: markPriceEL.text(),
                totalEntryPrice: parseFloat(markPriceEL.text()) * parseInt(tradeVolEL.val()),
                change: 0,
                changePercent: 0,
                pnl: 0,
                pnlPercent: 0,

                entryPriceAcc: parseFloat(markPriceEL.text()),
                entryPriceAccCount: 0,
            }

            // console.log('BEFORE', tradeHistory, tradeData);

            if(tradeHistory[__type] == undefined) {
                tradeHistory[__type] = [tradeData.entryPrice];
            } else {
                tradeHistory[__type].push(tradeData.entryPrice);
            }

            let activeFiltered = tradeActive.filter(x => x.type == __type);

            /* if unique transaction has found (type) */
            if(activeFiltered.length > 0) {

                let averageEntryPrice = tradeHistory.buy.reduce((acc, curr) => {
                    return parseFloat(acc) + parseFloat(curr)
                }, 0) / tradeHistory.buy.length

                // console.log(averageEntryPrice.toFixed(2));

                let activeFilteredTradeData = activeFiltered[0];
                // // let tradeHistoryFiltered    = tradeHistory.filter(x => x.type == __type);

                // /* calculate the average */
                // // var historyAverage = tradeHistory[__type].reduce((acc, next) => {
                // //     return acc + parseFloat(next.entryPrice)
                // // });

                // console.log('AFTER', tradeHistory[__type])

                activeFilteredTradeData.entryPrice      = averageEntryPrice.toFixed(2)
                activeFilteredTradeData.volume          = parseInt(activeFilteredTradeData.volume) + parseInt(tradeData.volume);
                activeFilteredTradeData.totalEntryPrice = activeFilteredTradeData.entryPrice * activeFilteredTradeData.volume;

                activeFilteredTradeData.leverage = leverageEL.val()

                tradeActive.forEach((item, index) => {
                    if(item.type == __type) {
                        tradeActive.splice(index, 1)
                    }
                })

                tradeActive.push(activeFilteredTradeData)

            } else {
                tradeActive.push(tradeData)
            }


            renderTradeActive();

            leverageEL.val('')
            tradeVolEL.val(0)
            tradeTotalEL.val(0)


            $('#markPriceInput').trigger('change')
        }

        leverageEL.on('change', function() {
            calculateMarginEquity();

            let leverage          = $(this).val()
            let markPrice         = parseFloat(markPriceEL.text());
            let tradeMarginEquity = parseFloat(markPrice * leverage).toFixed(2);

        });

        tradeVolEL.on('keyup', function() {
            calculateMarginEquity();

            calculateTradeTotal();
        });


        tradeVolEL.on('change', function() {
            calculateMarginEquity();
            calculateTradeTotal();
        });


        buyActionBTN.on('click', function() {
            tradeActionBuySell('buy')
        })

        sellActionBTN.on('click', function() {

            tradeActionBuySell('sell')

        })

        function renderTradeActive() {
            tradeActiveContainer.html('');

            for(let trade of tradeActive) {

                let change = trade.change;
                let changeHTML = ''
                let changePercentHTML = ''

                if(change > 0) {
                    changeHTML = `<span class="font-bold text-xl text-green-400 block">+${change.toFixed(3)}</span>`
                    changePercentHTML = `<span class="text-lg text-green-400">+${(trade.changePercent * 100).toFixed(2)}%</span>`
                } else if(change < 0) {
                    changeHTML = `<span class="font-bold text-xl text-red-400 block">${change.toFixed(3)}</span>`
                    changePercentHTML = `<span class="text-lg text-red-400">${(trade.changePercent * 100).toFixed(2)}%</span>`
                } else {
                    changeHTML = `<span class="font-bold text-xl text-gray-400 block">${change.toFixed(0)}</span>`
                    changePercentHTML = `<span class="text-lg text-gray-400">0%</span>`

                }

                let type = `<span class="rounded bg-green-500 text-base py-1 px-3">BUY</span>`;

                if(trade.type != 'buy') {
                    type = `<span class="rounded bg-red-500 text-base py-1 px-3">SELL</span>`;
                }

                tradeActiveContainer.append(`
                    <div class="trade-active-item border border-gray-700 rounded p-3 mb-2">
                        <div class="grid grid-cols-3">
                            <div class="flex flex-col justify-between gap-5 col-span-2">
                                <h3 class="text-white font-bold">BNB/USDT ${type}</h3>

                                <div class="flex gap-3 text-xs">
                                    <h5>Vol: <span class="volume block text-base">${trade.volume}</span></h5>
                                    <h5>Leverage: <span class="leverage block text-base">${trade.leverage}</span></h5>
                                    <h5>Entry Price: <span class="entryPrice block text-base">${trade.entryPrice}</span></h5>
                                    <h5>Total Entry: <span class="entryPrice block text-base">$${trade.totalEntryPrice}</span></h5>
                                    <h5>PNL: <span class="entryPrice block text-base">${ trade.pnl.toFixed(2) }</span></h5>
                                </div>
                            </div>

                            <div class="text-right flex flex-col justify-center">
                                ${changeHTML}
                                ${changePercentHTML}
                            </div>
                        </div>

                    </div>
                `)
            }
        }



    </script>
</body>
</html>
