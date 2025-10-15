@extends('layouts.auth.app')

@section('content')
    <section class="login-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-11 text-center">
                    <img src="{{ asset('assets/auth/images/WoPuVP.png') }}" alt="">
                    <div class="login-wrapper">
                        <form id="modal-form" method="post" action="{{ route('admin.register') }}">
                            @csrf
                            <div class="login-fields-area">
                                <div class="form-floating ">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="">
                                    <label for="first_name">FIRST NAME</label>
                                    @error('first_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="login-fields-area">
                                <div class="form-floating ">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="">
                                    <label for="last_name">LAST NAME</label>
                                    @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="login-fields-area">
                                <div class="form-floating ">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="">
                                    <label for="email">EMAIL</label>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="login-fields-area">
                                <div class="form-floating ">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="">
                                    <label for="phone">PHONE</label>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="login-fields-area">
                                <div class="form-floating">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-regular fa-eye toggle-password" toggle="#password-field"></i>
                                    <input type="password" name="password" id="password-field" class="form-control"
                                        placeholder="" >
                                    <label for="password-field">PASSWORD</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="login-fields-area">
                                <div class="form-floating">
                                    <div class="field-icon-area"></div>
                                    <i class="fa-regular fa-eye toggle-password" toggle="#password-field"></i>
                                    <input type="address" name="address" id="address" class="form-control"
                                        placeholder="" >
                                    <label for="address-field">ADDRESS</label>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="login-fields-area mt-4">
                                <div class="d-flex gap-2 align-items-center checkbox-wrap">
                                    <input class="" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="" for="flexCheckChecked1">Remember Me</label>
                                </div>
                            </div> --}}
                            <div class="login-btn-area">
                                <button type="submit" name="" id="openModalBtn">Register</button>
                            </div>
                        </form>

                        <div class="forget-wrap">
                            <p> <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--
    <div class="modal fade modal-bg-custom " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel2"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="background: transparent; border: none;">
                <div>
                    <p class="claim-para text-black text-center mb-3" style="font-weight: 700">Rules & Regulations</p>
                </div>
                <div class="modal-header info-desc p-0">
                </div>
                <div class="modal-body" style="padding: 0px !important; border: none !important;">
                    <div>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary" data-bs-dismiss="modal">Accepted</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Rejected</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{--
    <script>
        // Open Modal
        document.getElementById('openModalBtn').addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('exampleModal3'));
            modal.show();
        });

        // Redirect to Homepage After Modal Closes
        const modalElement = document.getElementById('exampleModal3');
        modalElement.addEventListener('hidden.bs.modal', function() {
            window.location.href = "{{ route('dashboard') }}";
        });
    </script> --}}
@endsection
