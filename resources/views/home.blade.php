@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div style="display:flex; justify-content:center;">
                <img src="images/profile.jpg" alt="" style="max-width:120px;max-height:120px;border-radius:100%;">
            </div>
            <br><br>

            Welcome {{ Auth::user()->name }}
            <br><br>
            
            <a class="dropdown-item" href="#"> > Profile </a>
            <a class="dropdown-item" href="#"> > Configuration </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                > {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
