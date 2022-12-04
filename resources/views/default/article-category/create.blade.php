@extends('default._layouts.main', [
'pageTitle' => 'Add New Category'
])

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Category</h4>
    </div>
    <div class="card-body">

        <form id="form" action="{{ route('article-category.store') }}" method="POST" class="form-valide-with-icon needs-validation row" novalidate>
            @csrf

            @include('default.article-category.form')

            <div class="col-12 mt-5">
                <button type="submit" class="btn me-2 btn-primary">Submit</button>
                <button type="submit" class="btn btn-secondary">Cancel</button>
            </div>
        </form>

    </div>

</div>
@endsection
