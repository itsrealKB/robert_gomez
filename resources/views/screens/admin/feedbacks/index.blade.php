@extends('layouts.admin.app')

@push('styles')
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
@endpush

@section('content')
    <section class="content" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        <div class="dashboard-content">
                            <table id="feedbacks">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Appraiser</th>
                                        <th>Subject</th>
                                        <th>Feedback</th>
                                        <th>Created At</th>
                                        <th>View Feedback</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($feedbacks as  $feedback)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $feedback->user->full_name }}</td>
                                            <td>{{ $feedback->subject }}</td>
                                            <td>{{ Str::limit($feedback->feedback, 50, '...') }}</td>
                                            <td>{{ $feedback->created_at }}</td>
                                            <td>
                                                <button class="btn view-feedback" data-feedback="{{ $feedback->feedback }}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                            </td>
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
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {

            var table = $("#feedbacks").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [
                    {
                        data: "#",
                    },
                    {
                        data: "Appraiser",
                    },
                    {
                        data: "Subject",
                    },
                    {
                        data: "Feedback"
                    },
                    {
                        data: "Created At",
                    },
                    {
                        data: "View Feedback",
                    },
                ],
            });


            function setOriginalValues() {
                $('.status').each(function () {
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

    {{-- Feedback Full View --}}
    <script>
        $(document).ready(function () {
            $(document).on('click', '.view-feedback', function () {
                const feedback = $(this).data('feedback');
                Swal.fire({
                    title: 'Feedback Full View!',
                    icon: 'info',
                    html: feedback,
                    showConfirmButton: true,
                    confirmButtonText: 'Close',
                    width: '600px',
                });
            });
        });
    </script>
    {{-- Feedback Full View --}}
@endpush
