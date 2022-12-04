@extends('default._layouts.main', [
    'pageTitle' => 'User Manager'
])

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card card-primary card-outline">
      <div class="card-header d-flex justify-cotent-between">
        <h4 class="card-title">User Manager</h4>

        @can('create user')
            <a href="{{route('user.create')}}" class="btn btn-primary btn-sm float-left">
                <i class="fa fa-plus"></i> Add New
            </a>
        @endcan

      </div>
      <!-- /.card-header -->
      <div class="card-body">
            <table id="table-content" class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                        <th class="bg-primary">Name</th>
                        <th class="bg-primary">Email</th>
                        <th class="bg-primary">Role</th>
                        <th class="bg-primary">Status</th>
                        <th class="bg-primary">Last In</th>
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
                url: '/user/ajax/datatables',
            },
            "order": [[0, 'asc']],
            columns: [
                {data: 'name'},
                {data: 'email'},
                {data: '_roles', render: (data) => {
                    let roles  = JSON.parse(data);
                    let badges = [];

                    roles.forEach(item => {
                        badges.push(`<span class="badge badge-sm light badge-success">${item}</span>`);
                    })

                    return badges.join('');
                }},
                {data: 'is_active', render: (data) => {
                    if(data) {
                        return `<span class="badge badge-sm light badge-success">
                                    <i class="fa fa-circle text-success me-1"></i>
                                    Active
                                </span>`

                    } else {
                        return `<span class="badge badge-sm light badge-danger">
                                    <i class="fa fa-circle text-success me-1"></i>
                                    InActive
                                </span>`
                    }
                }},
                {data: 'login_timestamp', render: (data) => {
                    if(data.login_timestamp != undefined) {
                        return moment.utc(data.login_timestamp.datetime).local().format('DD MMM YYYY HH:mm:ss ');
                    }
                    return '-';
                }},
                {data: '_action'},
            ],

            columnDefs: [
                {
                    "targets": [4],
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
                        url: `/user/${id}`,
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
