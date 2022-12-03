<div class="text-end">
    @can('update role')
        <a href="{{ route('role.edit', $id) }}" class="btn btn-primary">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
    @endcan

    @can('delete role')
    <button data-id="{{ $id }}" class="btn btn-danger">
        <i class="fa fa-trash" aria-hidden="true"></i>
    </button>
    @endcan
</div>
