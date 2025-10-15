@extends('layouts.auth.app')

@section('content')
    <section class="login-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-11 text-center">
                    <img src="{{ asset('assets/auth/images/WoPuVP.png') }}" alt="">
                    <div class="login-wrapper">
                        <form action="">
                            <h2 class="forget-text">Forget Your Password</h2>
                            <p class="forget-desc">Please enter the email address you’d like your <br> password resent information sent to</p>
                            <div class="login-fields-area">
                                <div class="form-floating ">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" name="name" id="" class="form-control" placeholder="" required>
                                    <label for="name">EMAIL</label>
                                </div>
                            </div>
                            <div class="login-btn-area">
                                <input type="submit" name="" id="" value="Reset Password">
                            </div>
                        </form>
                        <div class="forget-wrap">
                            <p>Back to <a href="{{ route('resetpassword')}}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
