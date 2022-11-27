@extends('default._layouts.auth')

@section('body')
<div class="card">
    <div class="card-body p-0">
        <div class="row m-0">
            <div class="col-xl-6 col-md-6 sign text-center">
                <div>
                    <div class="text-center my-5">
                        <a href="index.html"><img src="/admin-panel/images/logo-full.png" alt=""></a>
                    </div>
                    <img src="/admin-panel/images/log.png" class="img-fix bitcoin-img sd-shape7"></img>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="sign-in-your py-4 px-2">
                    <h4 class="fs-20">Sign in your account</h4>
                    <span>Welcome back! Login with your data that you entered<br> during registration</span>
                    <div class="login-social">
                        <a href="javascript:void(0);" class="btn d-block btn-primary my-3"><i class="fab fa-google me-2"></i>Login with Google</a>
                        <a href="javascript:void(0);" class="btn d-block btn-secondary my-3"><i class="fab fa-facebook-f me-2"></i>Login with Facebook</a>
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="mb-1"><strong>Email</strong></label>
                            <input type="email" class="form-control" name="email" placeholder="Your email address">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password" placeholder="*********">
                        </div>
                        <div class="row d-flex justify-content-between mt-4 mb-2">
                            <div class="mb-3">
                               <div class="form-check custom-checkbox ms-1">
                                    <input type="checkbox" name="remember" id="remember" @if(old('remember')) 'checked' : '' @endif class="form-check-input" id="basic_checkbox_1">
                                    <label class="form-check-label" for="remember">Remember my preference</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <a href="page-forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
