
<div class="mb-4">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $data->name ?? '' }}">
</div>

<label for="">Permissions</label>

<div class="row">
    @foreach ($permissions as $key => $items)
        <div class="col-md-3">
            <div class="card bg-secondary text-white">

                <div class="card-header p-2 px-3">
                    <h6 class="card-title text-white">{{ $key }}</h6>
                </div>

                <div class="card-body py-3 mb-0">
                    @foreach ($items as $act)
                        <div>
                            <div class="form-check custom-checkbox check-xs">
                                <input {{ isset($role_permission) && in_array($act['name'], $role_permission) ? 'checked':'' }} name="actions[]" type="checkbox" class="form-check-input" id="action_{{ md5($act['name']) }}" value="{{ $act['name'] }}">
                                <label class="form-check-label" for="action_{{ md5($act['name']) }}">{{ ucwords($act['name']) }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
