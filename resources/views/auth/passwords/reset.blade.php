@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <span class="login100-form-title p-b-59">
                    Sign In
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input id="email"  class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required type="email" placeholder="Email addess">
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" placeholder="*************">
                    <span class="focus-input100"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
                    <span class="label-input100">Repeat Password</span>
                    <input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="*************">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-m w-full p-b-33">
                    <!--<div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            <span class="txt1">
                                I agree to the
                                <a href="#" class="txt2 hov1">
                                    Terms of User
                                </a>
                            </span>
                        </label>
                    </div>-->

                    
                </div>
                

                    
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Reset password
                        </button>
                    </div>
                    <a href="{{ route('login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Sign In
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
