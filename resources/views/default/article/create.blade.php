@extends('default._layouts.main', [
'pageTitle' => 'Add New Role'
])

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Write new content</h4>
    </div>
    <div class="card-body">

        <form id="form" action="{{ route('role.store') }}" method="POST" class="form-valide-with-icon needs-validation row" novalidate>
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

