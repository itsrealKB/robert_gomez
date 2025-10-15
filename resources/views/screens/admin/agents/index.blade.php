@extends('layouts.admin.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />
<style>
    /* Modal Base */
    .modal {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background: rgba(0, 0, 0, 0.5) !important;
        display: flex;
        justify-content: center !important;
        align-items: center !important;
        z-index: 99999 !important;
    }

    .swal2-container {
        z-index: 999999 !important;
    }

    .modal-content {
        background: #fff;
        border-radius: 6px;
        width: 600px !important;
        max-height: 90vh;
        overflow-y: auto;
        animation: zoomIn 0.3s ease;
    }

    @keyframes zoomIn {
        from {
            transform: scale(0.9);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Header */
    .modal-header {
        background: #007bff;
        color: #fff;
        padding: 12px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 6px 6px 0 0;
    }

    .modal-header h2 {
        margin: 0;
        font-size: 18px;
    }

    .close-modal {
        font-size: 22px;
        cursor: pointer;
    }

    /* Form Layout */
    .modal-form {
        padding: 20px;
    }

    .form-row {
        display: flex;
        gap: 15px;
    }

    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        flex: 100%;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
    }

    .form-group input:focus {
        border-color: #007bff;
    }

    /* Button */
    .submit-btn {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0px 1000px white inset !important;
        -webkit-text-fill-color: black !important;
    }

    .submit-btn:hover {
        background: #0056b3;
    }

    .close-search-modal {
        font-size: 25px;
        cursor: pointer;
    }

    /* Validation Messages */
    .text-danger {
        color: #e74c3c;
        font-size: 12px;
        margin-top: 5px;
    }

    /* Toggle Classes */
    .hidden-class {
        display: none !important;
    }

    .smooth-toggle {
        display: block;
    }

    .rotate-icon {
        transition: transform 0.3s ease;
    }

    .rotate-icon.rotated {
        transform: rotate(180deg);
    }


    .hidden {
        display: none;
    }
</style>
@section('content')
    <section class="content" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="dashboard-content">
                            <div class="inner-head-wrap2">
                                <ul class="inner-head2 justify-content-end">
                                    <button class="link text-decoration-none" id="userModalbtn">
                                        <li class="inner-list inner-list-1">Add User</li>
                                    </button>
                                </ul>
                            </div>
                        </div>
                        <div class="dashboard-content">
                            <table id="companyAdmins">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as  $user)
                                        <tr>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            {{-- <td> <select name="status" class="status" id="status-{{ $user->id }}">
                                                    <option value="active"
                                                        {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="inactive"
                                                        {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive
                                                    </option>
                                                </select></td> --}}
                                            <td><button class="btn user-edit-btn" data-id="{{ $user->id }}"><i
                                                        class="fa-solid fa-pencil"></i></button>
                                            </td>
                                            {{-- <td>robert@gmail.com</td>
                                        <td>111111111</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td> --}}
                                        </tr>

                                    @empty
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add Agent modal -->
    <div id="userModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New User</h2>
                <span class="close-modal">&times;</span>
            </div>

            <form class="modal-form" autocomplete="off" id="user-form">
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">First Name</label>
                        <input type="text" name="first_name" id="firstName">
                        <span class="text-danger error-msg" id="first_name-error"></span>
                    </div>

                    <div class="form-group">
                        <label class="text-white">Last Name</label>
                        <input type="text" name="" id="lastName">
                        <span class="text-danger error-msg" id="last_name-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="text" id="email" name="">
                        <span class="text-danger error-msg" id="email-error"></span>

                    </div>
                    <div class="form-group">
                        <label class="text-white">Password</label>
                        <input type="password" id="password" name="password">
                        <span class="text-danger error-msg" id="password-error"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Phone</label>
                        <input type="tel" pattern="[0-9]*" id="phone"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" name="phone">
                        <span class="text-danger error-msg" id="phone-error"></span>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Address</label>
                        <input type="text" id="address" name="address">
                        <span class="text-danger error-msg" id="address-error"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Role</label>
                        {{-- <input type="text" id="address" name="address"> --}}
                        <select name="role" style="opacity: 100%" id="role">
                            <option value="agent">Agent</option>
                            <option value="admin">Admin</option>
                        </select>
                        <span class="text-danger error-msg" id="role-error"></span>
                    </div>
                </div>

                <button type="submit" id="addBtn" class="submit-btn">Add</button>
            </form>
        </div>
    </div>

    <div id="editUserModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit User</h2>
                <span class="close-modal">&times;</span>
            </div>
            <form class="modal-form" autocomplete="off" id="edit-user-form">
                <input type="hidden" id="editUserId" name="id">
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-light">First Name</label>
                        <input type="text" name="first_name" id="editFirstName">
                        <span class="text-danger error-msg" id="edit_first_name-error"></span>
                    </div>
                    <div class="form-group">
                        <label class="text-light">Last Name</label>
                        <input type="text" name="last_name" id="editLastName">
                        <span class="text-danger error-msg" id="edit_last_name-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-light">Phone</label>
                        <input type="tel" pattern="[0-9]*" id="editPhone"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" name="phone">
                        <span class="text-danger error-msg" id="edit_phone-error"></span>
                    </div>
                    <div class="form-group">
                        <label class="text-light">Address</label>
                        <input type="text" id="editAddress" name="address">
                        <span class="text-danger error-msg" id="edit_address-error"></span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-light">Password</label>
                        <input type="password" id="editPassword" name="edit_password">
                        <span class="text-danger error-msg" id="edit_password"></span>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Role</label>
                        {{-- <input type="text" id="address" name="address"> --}}
                        <select name="edit_role" style="opacity: 100%" id="editRole">
                            <option value="agent">Agent</option>
                            <option value="admin">Admin</option>
                        </select>
                        <span class="text-danger error-msg" id="role-error"></span>
                    </div>
                </div>
                <button type="submit" id="editBtn" class="submit-btn">Update</button>
            </form>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // $(function() {
        //     $("#companyAdmins").DataTable({
        //         processing: true,
        //         language: {
        //             paginate: {
        //                 previous: '<i class="fa-solid fa-angle-left"></i>',
        //                 next: '<i class="fa-solid fa-angle-right"></i>',
        //             },
        //         },
        //         columns: [{
        //                 data: "First Name",
        //             },
        //             {
        //                 data: "Last Name",
        //             },
        //             {
        //                 data: "Role",
        //             },
        //             {
        //                 data: "Email"
        //             },
        //             {
        //                 data: "Phone",
        //             },
        //             {
        //                 data: "Status",
        //             },
        //             {
        //                 data: "Address",
        //             },
        //             {
        //                 data: "Action",
        //             },
        //         ],
        //     });
        // });

        $(document).ready(function() {

            var table = $("#companyAdmins").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                        data: "First Name",
                    },
                    {
                        data: "Last Name",
                    },
                    {
                        data: "Role",
                    },
                    {
                        data: "Email"
                    },
                    {
                        data: "Phone",
                    },
                    //  {
                    //    data: "Status",
                    // },
                    {
                        data: "Address",
                    },
                    {
                        data: "Action",
                    },
                ],
            });


            function setOriginalValues() {
                $('.status').each(function() {
                    var $this = $(this);

                    if (typeof $this.data('original-value') === 'undefined') {
                        $this.data('original-value', $this.val() || 'active');
                    }
                });
            }


            setOriginalValues();


            table.on('draw.dt', setOriginalValues);



        });
    </script>
    <script>
        $(document).ready(function() {
            $("#userModalbtn").on("click", function() {
                $("#userModal").show();
                $("#userModal").css("display", "flex")
            });

            $(".close-modal").on("click", function() {
                $(".modal").hide();
            });

            $('#user-form').on("submit", function(e) {
                e.preventDefault();
                console.log($('#firstName').val());
                console.log($('#lastName').val());
                console.log($('#email').val());
                console.log($('#password').val())
                console.log($('#phone').val());
                console.log($('#address').val());
                console.log($('#role').find(":selected").val());


                $.LoadingOverlay("show")
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.users.store') }}',
                    data: {
                        _token: "{{ csrf_token() }}",
                        first_name: $('#firstName').val(),
                        last_name: $('#lastName').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        phone: $('#phone').val(),
                        address: $('#address').val(),
                        role: $('#role').find(":selected").val()
                    },
                    success: function(response) {
                        console.log(response)
                        $.LoadingOverlay("hide")
                        $(".modal").hide();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'User Added Successfully.',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(xhr) {
                        $.LoadingOverlay("hide")

                        if (xhr.status == 422) {

                            const errors = xhr.responseJSON.errors;
                            $('.error-msg').html(' ');

                            $.each(errors, function(key, value) {
                                $(`#${key}-error`).html(`${value[0]}`);
                            });
                        }

                        let errorMessage = 'An error occurred.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }

                    }

                })

            })
        });
    </script>
    <script>
        $(document).ready(function() {

            // Edit User Button Click
            $(document).on('click', '.user-edit-btn', function() {
                var userId = $(this).data('id');
                $.LoadingOverlay("show");
                $.ajax({
                    type: 'GET',
                    url: '{{ route('admin.users.edit', ':id') }}'.replace(':id', userId),
                    success: function(response) {
                        $.LoadingOverlay("hide");
                        if (response.status === 'true') {
                            var user = response.publicuser;

                            console.log('Fetched role:', user.role);
                            $('#editUserId').val(user.id);
                            $('#editFirstName').val(user.first_name);
                            $('#editLastName').val(user.last_name);
                            $('#editPhone').val(user.phone);
                            $('#editAddress').val(user.address);
                            $('#editRole').val(user.role).change();
                            $('#editUserModal').show();
                            $('#editUserModal').css("display", "flex");
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message || 'Failed to fetch user data.',
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                    error: function(xhr) {
                        $.LoadingOverlay("hide");
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to fetch user data.',
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                });
            });


            $(document).on("submit", '#edit-user-form', function(e) {
                e.preventDefault();
                $.LoadingOverlay("show");

                const password = $('#editPassword').val().trim();


                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.users.update', ':id') }}'.replace(':id', $('#editUserId')
                        .val()),
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: $('#editUserId').val(),
                        first_name: $('#editFirstName').val(),
                        last_name: $('#editLastName').val(),
                        phone: $('#editPhone').val(),
                        address: $('#editAddress').val(),
                        role: $('#editRole').find(":selected").val(),
                        ...(password !== '' && {
                            password: password
                        })
                    },
                    success: function(response) {
                        $.LoadingOverlay("hide");
                        $(".modal").hide();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'User Updated Successfully.',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(xhr) {
                        $.LoadingOverlay("hide");
                        if (xhr.status == 422) {
                            const errors = xhr.responseJSON.errors;
                            $('.error-msg').html(''); // Clear previous errors
                            $.each(errors, function(key, value) {
                                $(`#edit_${key}-error`).html(
                                    `${value[0]}`); // e.g., #edit_role-error for 'role'
                            });
                        } else {
                            let errorMessage = 'An error occurred.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: errorMessage,
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {


            $(document).on('change', '.status', function() {
                var $dropdown = $(this);
                var originalValue = $dropdown.data('original-value') ||
                    'active'; // Fallback to 'active' if undefined
                var userId = $dropdown.attr("id").split("-")[1];
                var statusMessage = $dropdown.find(":selected").text() === 'active' ?
                    'Are you sure you want to activate this user? They will regain access to the system.' :
                    'Are you sure you want to deactivate this user? They will lose access to the system.';

                Swal.fire({
                    title: 'Confirm Status Change',
                    text: statusMessage,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $dropdown.data('original-value', $dropdown.val());

                        $.ajax({
                            type: 'POST',
                            url: '{{ route('admin.users.update.status') }}',
                            data: {
                                _token: "{{ csrf_token() }}",
                                status: $dropdown.val(),
                                id: userId
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Status Updated Successfully.',
                                    showConfirmButton: false,
                                    timer: 1500,
                                });
                            },
                            error: function(xhr) {

                                $dropdown.val(originalValue);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Failed to update status.',
                                    showConfirmButton: false,
                                    timer: 1500,
                                });
                            }
                        });
                    } else {

                        $dropdown.val(originalValue);
                    }
                });
            });
        });
    </script>
@endpush
