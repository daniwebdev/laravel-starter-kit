@extends('default._layouts.main', [
'pageTitle' => 'Add New User'
])

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New User</h4>
    </div>
    <div class="card-body">
        <form id="form" action="{{ route('user.store') }}" method="POST" class="form-valide-with-icon needs-validation row" novalidate>
            @csrf


            @include('default.user.form')


            <div class="col-12 mt-5">

                <button type="submit" class="btn me-2 btn-primary">Submit</button>
                <button type="submit" class="btn btn-secondary">Cancel</button>
            </div>
        </form>


    </div>
</div>
@endsection

@push('foot')
<script src="/admin-panel/vendor/jquery-validation/jquery.validate.min.js"></script>
<script>

    $('#form').validate({
        invalidHandler: (event, validator) => {
            console.log(event, validator);
            $(validator.currentForm).addClass('was-validated')
        },
        ignore: "",
        errorPlacement: (e, input) => {
            console.log(e)
            input.closest('div').find('.invalid-feedback').html($(e).text())
        }
    });

</script>
@endpush
