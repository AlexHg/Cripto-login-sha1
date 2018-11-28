@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-59">
                    Sign In
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input id="email"  class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required type="email" placeholder="Email addess">
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input id="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" placeholder="*************">
                    <span class="focus-input100"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="flex-m w-full p-b-33">

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Sign In
                        </button>
                    </div>

                    <a href="{{ route('register') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Sign Up
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
