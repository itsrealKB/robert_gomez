@extends('layouts.auth.app')

@section('content')
    <section class="login-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-11 text-center">
                    <img src="{{ asset('assets/auth/images/WoPuVP.png') }}" alt="">
                    <div class="login-wrapper">
                        <form action="">
                            <h2 class="forget-text">Reset Password</h2>
                            <p class="forget-desc">Enter Your new password below</p>
                            <div class="login-fields-area">
                                <div class="form-floating">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-regular fa-eye toggle-password" toggle="#new-password"></i>
                                    <input type="password" name="new-password" id="new-password" class="form-control" placeholder="" required>
                                    <label for="new-password">NEW PASSWORD</label>
                                </div>
                            </div>
                            <div class="login-fields-area">
                                <div class="form-floating">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-regular fa-eye toggle-password" toggle="#confirm-password"></i>
                                    <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="" required>
                                    <label for="confirm-password">CONFIRM PASSWORD</label>
                                </div>
                            </div>
                            <div class="login-btn-area">
                                <input type="submit" name="" id="" value="Reset Password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
