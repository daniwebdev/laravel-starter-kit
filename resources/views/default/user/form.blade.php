<div class="mb-3 col-md-6">
    <label class="text-label form-label" for="name">Name</label>
    <div>
        <input type="text" class="form-control" name="name" id="name" placeholder="" required="" value="{{ $data->name ?? '' }}">
        <div class="invalid-feedback"></div>
    </div>
</div>

<div class="mb-3 col-md-6">
    <label class="text-label form-label" for="email">Email</label>
    <div>
        <input type="email" class="form-control" name="email" id="email" placeholder="" required="" value="{{ $data->email ?? '' }}">
        <div class="invalid-feedback"></div>
    </div>
</div>

<div class="mb-3 col-md-6">
    <label class="text-label form-label" for="dlab-password">Password *</label>
    <div class="input-group transparent-append">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        <input type="password" class="form-control" id="dlab-password" name="password" autocomplete="off" placeholder="Choose a safe one.." {{ !isset($data) ? 'required':'' }}>
        <span class="input-group-text show-pass">
            <i class="fa fa-eye-slash"></i>
            <i class="fa fa-eye"></i>
        </span>
        <div class="invalid-feedback"></div>
    </div>
</div>

<div class="mb-3 col-md-6">
    <label class="text-label form-label" for="dlab-password-confirm">Confirm Password *</label>
    <div class="input-group transparent-append">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        <input type="password" class="form-control" id="dlab-password-confirm" name="confirm_password" placeholder="Choose a safe one.." {{ !isset($data) ? 'required':'' }}>
        <span class="input-group-text show-pass">
            <i class="fa fa-eye-slash"></i>
            <i class="fa fa-eye"></i>
        </span>
        <div class="invalid-feedback"></div>
    </div>
</div>

<div class="col-md-6">

    <div class="">
        <label for="">Set Role</label>

        <select class="form-control" name="role" id="role" required>
            <option value="">- Select Role -</option>
            @foreach ($roles as $item)
            <option {{ isset($role_names) && in_array($item->name, $role_names->toArray()) ? 'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <div class="invalid-feedback"> </div>

    </div>
</div>
