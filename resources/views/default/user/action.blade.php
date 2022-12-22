<div class="text-end">
    @can('update user')
        <a href="{{ route('user.edit', $uuid) }}" class="btn btn-primary">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
    @endcan

    @if (Auth::user()->id != $id)
        @can('delete user')
        <button data-id="{{ $uuid }}" class="btn btn-danger delete">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
        @endcan
    @endif
</div>
