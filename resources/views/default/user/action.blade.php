<div class="text-end">
    @can('update user')
        <a href="{{ route('user.edit', $uuid) }}" class="btn btn-primary">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
    @endcan

    @can('delete user')
    <button data-id="{{ $uuid }}" class="btn btn-danger">
        <i class="fa fa-trash" aria-hidden="true"></i>
    </button>
    @endcan
</div>
