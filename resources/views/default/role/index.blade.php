@extends('default._layouts.main', [
    'pageTitle' => 'User Manager'
])

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline">
      <div class="card-header d-flex justify-cotent-between">
        <h4 class="card-title">Role Manager</h4>

        @can('create user')
            <a href="{{route('role.create')}}" class="btn btn-primary btn-sm float-left">
                <i class="fa fa-plus"></i> Add New
            </a>
        @endcan

      </div>
      <!-- /.card-header -->
      <div class="card-body">

                <table id="table-content" class="table table-striped table-responsive" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="bg-primary">Name</th>
                            <th class="bg-primary">Permissions</th>
                            <th class="bg-primary"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">

      </div>
      <!-- /.card-footer -->
    </div>
  </div>
</div>

@endsection

@push('head')
<link href="/admin-panel/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@push('foot')
<script src="/admin-panel/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script>
    var table;

    $(function() {
        table = $('#table-content').DataTable({
            orderable: false,
            responsive: true,
            createdRow: function ( row, data, index ) {

            } ,
            ajax: {
                url: '/role/ajax/datatables',
            },
            "order": [[0, 'asc']],
            columns: [
                {data: 'name'},
                {data: '_permissions', render: (data) => {
                    var labels = {};
                    var output = '';

                    for(let permission of data) {
                        let module = permission.name.split(' ')[1];
                        let action = permission.name.split(' ')[0];

                        if(labels[module] == undefined) {
                            labels[module] = [];
                        }

                        labels[module].push({
                            action: action,
                            name: permission.name
                        });

                        // labels.push(`<span class="badge badge-lg light badge-secondary me-2" >${permission.name}</span>`)
                    }

                    // return labels.join('');

                    for(let mod in labels) {
                        let act_items = '';
                        for(let i of labels[mod]) {
                            act_items += `<span class="badge badge-lg light d-auto badge-secondary me-2 mb-2" >${i.action}</span>`;
                        }

                        output += `
                            <div class="border rounded p-2 mb-1 border-primary" style="max-width: auto">
                                <span class="d-block">${mod}</span>
                                <div class="d-block" style="white-space: normal">${act_items}</div>
                            </div>
                        `;

                    }

                    return `${output}`;
                }},
                {data: '_action'},
            ],

            columnDefs: [
                {
                    "targets": [2],
                    "searchable": false,
                    "orderable": false,
                    "visible": true
                },
            ],
            language: {
                paginate: {
                    next: '<i class="fa-solid fa-angle-right"></i>',
                    previous: '<i class="fa-solid fa-angle-left"></i>'
                }
            }
        });


        // delete
        $(document).on('click', '.delete', function() {
            let id = $(this).data('id');

            swal.fire({
                title: "Are you sure ?",
                text: "Delete data permanently",
                type: 'question',
                showCancelButton: true,
            }).then((act) => {

                if(act.value) {
                    $.ajax({
                        method: "DELETE",
                        url: `/role/${id}`,
                        success: (res) => {

                            table.ajax.reload();
                        }
                    });
                }

            })
        })
    })

</script>
@endpush
