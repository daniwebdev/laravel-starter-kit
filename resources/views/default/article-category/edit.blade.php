@extends('default._layouts.main', [
'pageTitle' => 'Update Category'
])

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Update Category</h4>
    </div>
    <div class="card-body">

        <form id="form" action="{{ route('article-category.update', $data->id) }}" method="POST" class="form-valide-with-icon needs-validation row" novalidate>
            @csrf
            @method('PUT')

            @include('default.article-category.form')

            <div class="col-12 mt-5">
                <button type="submit" class="btn me-2 btn-primary">Submit</button>
                <button type="submit" class="btn btn-secondary">Cancel</button>
            </div>
        </form>

    </div>

</div>
@endsection
