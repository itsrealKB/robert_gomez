@extends('layouts.auth.app')

@section('content')
    <section class="login-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-11 text-center">
                    <img src="{{ asset('assets/auth/images/WoPuVP.png') }}" alt="">
                    <div class="login-wrapper">
                        <form action="">
                            <img src="{{ asset('assets/auth/images/passUpdate.png')}}" alt="" class="update-img">
                            <h2 class="forget-text">Password Updated</h2>
                            <p class="forget-desc">Your new password has been changed successfully. <br> Use your new password to login</p>
                            <div class="login-btn-area">
                                <a href="{{ route('login')}}">Back to Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
