@extends('default._layouts.main', [
    'pageTitle' => 'Content Article'
])

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline">
      <div class="card-header d-flex justify-cotent-between">
        <h4 class="card-title">Content Article</h4>

        @can('create user')
            <a href="{{route('article.create')}}" class="btn btn-primary btn-sm float-left">
                <i class="fa fa-plus"></i> Add New
            </a>
        @endcan

      </div>
      <!-- /.card-header -->
      <div class="card-body">
            <table id="table-content" class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                        <th class="bg-primary">Title</th>
                        <th class="bg-primary">Date</th>
                        <th class="bg-primary">Status</th>
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
            createdRow: function ( row, data, index ) {

            } ,
            ajax: {
                url: '/article/ajax/datatables',
            },
            "order": [[0, 'asc']],
            columns: [
                {data: 'name'},
                {data: 'date'},
                {data: 'status'},
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
                        url: `/article/${id}`,
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
