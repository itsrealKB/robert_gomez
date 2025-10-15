    @extends('layouts.web.app')

    @section('content')
        <div class="dashboard-content">
            <div class="content-wrap">
                <h2>Your Profile</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <form action="" id="profileUpdate" class="profile-form">
                        <div class="inp-wrap row">
                            <div class="col-lg-4">
                                <label for="" class="custom-label">First Name</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="firstName" class="form-control custom-input"
                                    value="{{ $user->first_name }}" placeholder="First Name">
                                <span class="text-danger error-msg" id="first_name-error" style="font-size: 12px"></span>
                            </div>
                        </div>
                        <div class="inp-wrap row">
                            <div class="col-lg-4">
                                <label for="" class="custom-label">Last Name</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="lastName" class="form-control custom-input"
                                    value="{{ $user->last_name }}" placeholder="Last Name">
                                <span class="text-danger error-msg" id="last_name-error" style="font-size: 12px"></span>
                            </div>
                        </div>
                        <div class="inp-wrap row">
                            <div class="col-lg-4">
                                <label for="" class="custom-label">Email</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="email" class="form-control custom-input" readonly
                                    value="{{ $user->email }}" placeholder="Email">
                                <span class="text-danger error-msg" id="email-error" style="font-size: 12px"></span>
                            </div>
                        </div>
                        <div class="inp-wrap row">
                            <div class="col-lg-4">
                                <label for="" class="custom-label">Phone Number</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="phone" class="form-control custom-input"
                                    value="{{ $user->phone }}" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    placeholder="Phone Number">
                                <span class="text-danger error-msg" id="phone-error" style="font-size: 12px"></span>
                            </div>
                        </div>
                        <div class="inp-wrap row">
                            <div class="col-lg-4">
                                <label for="" class="custom-label">Address</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="address" value="{{ $user->address }}"
                                    class="form-control custom-input" placeholder="Address">
                                <span class="text-danger error-msg" id="phone-error" style="font-size: 12px"></span>
                            </div>
                        </div>
                        {{-- <div class="inp-wrap row justify-content-start mt-5">
                            <div class="col-lg-4">
                                <label for="" class="custom-label">Two Factor Authentication</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex gap-5 radio-wrap">
                                    <div class="d-flex align-items-center">
                                        <input type="radio" id="factor" class="" name="two-factor-auth" checked>
                                        <label for="factor">OFF</label>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" id="factor2" class="" name="two-factor-auth">
                                        <label for="factor2">On</label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="inp-wrap row">
                            <input type="submit" class="load-btn bg-secondary text-white" style="width: 200px;"
                                value="Save Changes">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12">

                    <div class="profile-wrap bg-secondary">
                        <form action="" enctype="multipart/form-data" id="uploadPfp">
                            @csrf
                            <img id="img-preview"
                                src="{{ auth()->user()->avatar !== null ? asset('images/pfp/' . auth()->user()->avatar) : asset('assets/web/images/no-profile-pic.jfif') }}"
                                alt="">
                            <div class="img-update-btn">
                                <input id="upload-profile" name="upload_profile" type="file" accept="image/*"
                                    style="display: none" />
                                <label for="upload-profile" class="load-btn pfp-upload-btn">UPLOAD A FILE</label>
                            </div>
                        </form>

                        <form action="" id="updatePassword">
                            <h1>Update Password</h1>
                            <div class="login-fields-area d-flex justify-content-start align-items-center">
                                {{-- <div class="field-icon-area">
                                    <img src="{{ asset('assets/web/images/padlock.png') }}" alt="">
                                </div> --}}
                                <div class="form-floating flex-grow-1">
                                    <input type="password" name="old_password" id="oldPassword" class="form-control">
                                    <label for="password">OLD PASSWORD</label>
                                    <span class="text-danger error-msg" id="old_password-error"></span>
                                </div>
                            </div>
                            <div class="login-fields-area d-flex justify-content-start align-items-center">
                                {{-- <div class="field-icon-area">
                                    <img src="{{ asset('assets/web/images/padlock.png') }}" alt="">
                                </div> --}}
                                <div class="form-floating flex-grow-1">
                                    <input type="password" name="password" id="password" class="form-control">
                                    <label for="password">PASSWORD</label>
                                    <span class="text-danger error-msg" id="password-error"></span>
                                </div>
                            </div>

                            <div class="login-fields-area d-flex justify-content-start align-items-center">
                                {{-- <div class="field-icon-area">
                                    <img src="{{ asset('assets/web/images/padlock.png') }}" alt="">
                                </div> --}}
                                <div class="form-floating flex-grow-1">
                                    <input type="password" name="password_confirmation" id="passwordConfirmation"
                                        class="form-control">
                                    <label for="password">CONFIRM PASSWORD</label>
                                    <span class="text-danger error-msg" id="password_confirmation-error"></span>
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="load-btn bg-primary" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                // console.log("asfs")
                $('#profileUpdate').on("submit", function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: "Do you want to save the changes?",
                        showCancelButton: true,
                        confirmButtonText: "Save",

                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            $.LoadingOverlay("show")
                            var firstName = $('#firstName').val();
                            var lastName = $('#lastName').val();
                            var phone = $('#phone').val();
                            var address = $('#address').val();
                            console.log(firstName);
                            console.log(lastName);
                            console.log(phone);
                            console.log(address);
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('profile.update') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    first_name: firstName,
                                    last_name: lastName,
                                    phone: phone,
                                    address: address
                                },
                                success: function(response) {
                                    console.log(response)
                                    $.LoadingOverlay("hide")
                                    Swal.fire("Saved!", "", "success");

                                },
                                error: function(xhr) {
                                    $.LoadingOverlay("hide")

                                    if (xhr.status === 422) {

                                        const errors = xhr.responseJSON.errors;
                                        $('.error-msg').html(' ');
                                        window.l
                                        $.each(errors, function(key, value) {

                                            $(`#${key}-error`).html(
                                                `${value[0]}`
                                            );
                                        });
                                    }

                                    let errorMessage = 'An error occurred.';
                                    if (xhr.responseJSON && xhr.responseJSON.message) {
                                        errorMessage = xhr.responseJSON.message;
                                    }

                                }
                            })


                        }
                    });



                })
            })
        </script>
        <script>
            $(document).ready(function() {
                $('#updatePassword').on("submit", function(e) {
                    e.preventDefault();
                    console.log("dfa")

                    Swal.fire({
                        title: "Do you want to save the changes?",
                        showCancelButton: true,
                        confirmButtonText: "Save",

                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {

                            var password = $('#password').val();
                            var oldPassword = $('#oldPassword').val();
                            console.log(oldPassword)
                            var passwordConfirmation = $('#passwordConfirmation').val();
                            $.LoadingOverlay("show")
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('profile.update.psw') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    old_password: oldPassword,
                                    password: password,
                                    password_confirmation: passwordConfirmation
                                },
                                success: function(response) {
                                    console.log(response)
                                    $('.error-msg').html(' ');
                                    $.LoadingOverlay("hide")

                                    Swal.fire("Saved!", "", "success");

                                },
                                error: function(xhr) {
                                    $.LoadingOverlay("hide")

                                    if (xhr.status === 422) {

                                        const errors = xhr.responseJSON.errors;
                                        $('.error-msg').html(' ');

                                        $.each(errors, function(key, value) {

                                            $(`#${key}-error`).html(
                                                `${value[0]}`
                                            );
                                        });
                                    }

                                    let errorMessage = 'An error occurred.';
                                    if (xhr.responseJSON && xhr.responseJSON.message) {
                                        errorMessage = xhr.responseJSON.message;
                                    }

                                }

                            });
                        }
                    });
                });
            });
        </script>
        {{-- <script>
            $(document).ready(function() {
                $('#uploadPfp').on("submit", function(e) {
                    e.preventDefault()

                    var formData = new FormData(this);

                    $.ajax({
                        type:'POST',
                        url:'{{ route('profile.update.pfp') }}',
                        data: formData,
                        processData:false,
                        contentType:false,
                        success: function (response){
                            console.log(response)
                        }
                    });
                })
            })
        </script> --}}
        <script>
            $(document).ready(function() {
                $('.pfp-upload-btn').on('click', function(e) {
                    e.preventDefault();
                    $('#upload-profile').click();
                });

                $('#upload-profile').on('change', function(e) {
                    e.preventDefault();

                    if (this.files.length > 0) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: 'Do you want to upload this image?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, upload it!',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.LoadingOverlay("show");

                                var formData = new FormData($('#uploadPfp')[0]);

                                $.ajax({
                                    type: 'POST',
                                    url: '{{ route('profile.update.pfp') }}',
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function(response) {
                                        if (response.avatar) {
                                            $('#img-preview').attr('src',
                                                '{{ asset('images/pfp/') }}/' +response.avatar);
                                            Swal.fire(
                                                'Success!',
                                                'Profile picture updated successfully!',
                                                'success'
                                            );
                                        }
                                        $.LoadingOverlay("hide");
                                    },
                                    error: function(xhr) {
                                        $.LoadingOverlay("hide");
                                        Swal.fire(
                                            'Error!',
                                            'Failed to upload profile picture.',
                                            'error'
                                        );
                                    }
                                });
                            } else {
                                // Reset the file input if user cancels
                                $('#upload-profile').val('');
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
