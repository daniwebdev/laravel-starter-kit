@extends('default._layouts.main', [
'pageTitle' => 'Add New Role'
])

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Write new content</h4>
    </div>
    <div class="card-body">

        <form id="mainForm" action="{{ route('article.store') }}" method="POST" class="form-valide-with-icon needs-validation row" novalidate>
            @csrf

            @include('default.article.form')

            <div class="col-12 mt-5">
                <button type="submit" class="btn me-2 btn-primary">Save</button>
                <button type="submit" class="btn me-2 btn-warning">Draft</button>
                <button type="submit" class="btn btn-secondary">Cancel</button>
            </div>
        </form>

    </div>

</div>
@endsection


@push('foot')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_id.min.js" integrity="sha512-U7DGpZbMZ92Rl7SbDJpHsfxXHi9f+Sp8HDOVcDAgktwKJ4MVtW7xzpdVxkGKYXraDsyou5CQKfTf7U7ALmpu0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $(function() {
        $("#mainForm").validate({
            ignore: "",
            errorPlacement: function(error, element) {
                element.closest('div').find('.error-message').html(error)
            }
        });

    })


</script>
@endpush
