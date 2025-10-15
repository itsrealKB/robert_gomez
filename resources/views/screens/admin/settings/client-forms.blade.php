@extends('layouts.admin.app')
@section('content')
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


    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab />
                </div>
                <div class="dashboard-content">
                    <ul class="inner-head3 justify-content-end">
                        <button class="link text-decoration-none" id="clientModalBtn">
                            <li class="inner-list inner-list-1">Add Client Forms</li>
                        </button>
                    </ul>
                    <table id="companyAdmins">
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>Label</th>
                                <th>Date</th>
                                <th>Download</th>
                                <th>Action</th>
                                {{-- <th>Address</th>
                                <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientForms as $clientForm)
                                <tr>
                                    <td>{{ $clientForm->file }}</td>
                                    <td>{{ $clientForm->label }}</td>
                                    <td>{{ str_replace('-', '/', explode(' ', $clientForm->updated_at)[0]) }}</td>
                                    <td>
                                        <a href="{{ route('client-forms.download', $clientForm->id) }}" >
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                    <td><button class="btn user-edit-btn" data-id="{{ $clientForm->id }}"><i
                                                class="fa-solid fa-pencil"></i></button>
                                        <button class="btn user-delete-btn" data-id="{{ $clientForm->id }}"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </td>

                                    {{-- <td>sdfasasdf</td>
                                <td>asdfasdf</td> --}}
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
        </section>
    </div>


    <div id="addFormModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add Form</h2>
                <span class="close-modal" data-modal="addFormModal">&times;</span>
            </div>
            <form class="modal-form" autocomplete="off" enctype="multipart/form-data" id="addClientForm">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-light">Label</label>
                        <input type="text" name="label" id="addLabel" >
                        <span class="text-danger error-msg" id="add_label-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="text-light">File</label>
                        <input type="file" accept=".docx,.pdf" name="file" id="addFile" style="opacity: 100%;color:#fff">
                        <span class="text-danger error-msg" id="add_file-error"></span>
                    </div>
                </div>
                <button type="submit" id="addBtn" class="submit-btn">Add</button>
            </form>
        </div>
    </div>

    <div id="editFormModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Client Form</h2>
                <span class="close-modal" data-modal="editFormModal">&times;</span>
            </div>
            <form class="modal-form" autocomplete="off" enctype="multipart/form-data" id="editClientForm">
                @csrf
                <input type="hidden" id="editClientFormId" name="id">
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-light">Label</label>
                        <input type="text" name="label" id="editLabel">
                        <span class="text-danger error-msg" id="edit_label-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    {{-- <a href="" download id="currentFile"></a> --}}
                </div>
                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="text-light">File</label>
                        <input type="file" accept=".docx,.pdf" name="file" id="editFile" style="opacity: 100%;color:#fff;">
                        <span class="text-danger error-msg" id="edit_file-error"></span>
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
        $(function() {
            $("#companyAdmins").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                        data: "ID",
                    },
                    {
                        data: "File Name",
                    },
                    {
                        data: "Label",
                    },
                    {
                        data: "Download"
                    },
                    {
                        data: "Action",
                    },
                ],
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Open Add Form Modal
            $('#clientModalBtn').on('click', function() {
                // Clear form fields and error messages
                $('#addClientForm')[0].reset();
                $('.error-msg').html('');
                // Show modal
                $('#addFormModal').show();
                $('#addFormModal').css("display", "flex");
            });
            $(document).on('click', '.close-modal', function() {
                const modalId = $(this).data('modal');
                // $(`#${modalId} .modal-form`)[0].reset();
                // $(`#${modalId} .error-msg`).html('');
                // $(`#${modalId} #currentFile`).text('');
                $(`#${modalId}`).hide();
            });


            // Placeholder for Form Submission (to be expanded with AJAX)
            $('#addClientForm').on('submit', function(e) {
                e.preventDefault();
                // Future AJAX POST to admin.forms.store will go here
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Form Submission with AJAX
            $('#addClientForm').on('submit', function(e) {
                e.preventDefault();

                // Show loading overlay
                $.LoadingOverlay("show");

                // Prepare form data
                let formData = new FormData(this);

                $.ajax({
                    url: '{{ route('admin.settings.client.forms.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Hide loading overlay
                        $.LoadingOverlay("hide");

                        if (response.status === 'true') {
                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message ||
                                    'Client Form Stored Successfully.',
                                showConfirmButton: true,
                                timer: 2000
                            }).then(() => {
                                // Reset form and hide modal
                                $('#addClientForm')[0].reset();
                                $('#addFormModal').hide();
                                // Optionally reload DataTable
                                window.location.reload();
                            });
                        } else {
                            // Show error message for non-validation errors
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message ||
                                    'Failed to store client form.',
                                showConfirmButton: true
                            });
                        }
                    },
                    error: function(xhr) {
                        // Hide loading overlay
                        $.LoadingOverlay("hide");

                        // Handle validation errors
                        let errors = xhr.responseJSON?.errors || {};
                        $('.error-msg').html(''); // Clear previous error messages

                        if (errors) {
                            $.each(errors, function(key, value) {
                                $(`#add_${key}-error`).html(value[0]);
                            });
                        } else {
                            // Show error message for non-validation errors
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: xhr.responseJSON?.message ||
                                    'An error occurred while submitting the form.',
                                showConfirmButton: true
                            });
                        }
                    }
                });
            });

            // Open Edit Form Modal and Fetch Data
            $(document).on('click', '.user-edit-btn', function() {
                const id = $(this).attr('data-id');
                $.LoadingOverlay("show");

                $.ajax({
                    url: '{{ route('admin.settings.client.forms.edit', ':id') }}'.replace(':id',
                        id),
                    type: 'GET',
                    success: function(response) {
                        $.LoadingOverlay("hide");
                        if (response.status === 'true' && response.clientForm) {
                            $('#editId').val(response.clientForm.id);
                            $('#editLabel').val(response.clientForm.label);
                            $('#editClientFormId').val(response.clientForm.id);
                            // $('#currentFile').text('Current file: ' + response.clientForm.file);
                            // $('#currentFile').attr("src",`{{ asset('files/client-forms/') }}${response.clientForm.file}`)
                            $('#editFormModal').show();
                            $('#editFormModal').css("display", "flex");
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message || 'Failed to load form data.',
                                showConfirmButton: true
                            });
                        }
                    },
                    error: function(xhr) {
                        $.LoadingOverlay("hide");
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: xhr.responseJSON?.message ||
                                'An error occurred while loading the form data.',
                            showConfirmButton: true
                        });
                    }
                });
            });

            $('#editClientForm').on('submit', function(e) {
                e.preventDefault();

                $.LoadingOverlay("show");

                let formData = new FormData(this);
                const id = $('#editClientFormId').val();

                $.ajax({
                    url: '{{ route('admin.settings.client.forms.update', ':id') }}'.replace(':id',
                        id),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $.LoadingOverlay("hide");
                        if (response.status === 'true') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message ||
                                    'Client Form Updated Successfully.',
                                showConfirmButton: true,
                                timer: 2000
                            }).then(() => {
                                $('#editClientForm')[0].reset();
                                $('#editFormModal').hide();
                                window.location.reload();
                                // $('#companyAdmins').DataTable().ajax.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message ||
                                    'Failed to update client form.',
                                showConfirmButton: true
                            });
                        }
                    },
                    error: function(xhr) {
                        $.LoadingOverlay("hide");
                        let errors = xhr.responseJSON?.errors || {};
                        $('.error-msg').html('');
                        if (errors) {
                            $.each(errors, function(key, value) {
                                $(`#edit_${key}-error`).html(value[0]);
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: xhr.responseJSON?.message ||
                                    'An error occurred while updating the form.',
                                showConfirmButton: true
                            });
                        }
                    }
                });
            });

            // Delete Form
            $(document).on('click', '.user-delete-btn', function() {
                const id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to Delete this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.LoadingOverlay("show");

                        $.ajax({
                            url: '{{ route('admin.settings.client.forms.destroy') }}',
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: id
                            },
                            success: function(response) {
                                $.LoadingOverlay("hide");
                                if (response.status === 'true') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: response.message ||
                                            'Client Form Deleted Successfully.',
                                        showConfirmButton: true,
                                        timer: 2000
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: response.message ||
                                            'Failed to delete client form.',
                                        showConfirmButton: true
                                    });
                                }
                            },
                            error: function(xhr) {
                                $.LoadingOverlay("hide");
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: xhr.responseJSON?.message ||
                                        'An error occurred while deleting the form.',
                                    showConfirmButton: true
                                });
                            }
                        });
                    }
                });
            }); // Edit Form Submission

        })
    </script>
@endpush
