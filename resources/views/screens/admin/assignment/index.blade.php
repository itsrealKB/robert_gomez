@extends('layouts.admin.app')
@section('content')
    <style>
        /* Modal Base */
        #importModal {
            z-index: 999 !important;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
        }

        .modal-content {
            background: #fff;
            border-radius: 6px;
            width: 600px;
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
        <section class="content">
            <div class="container-fluid">

                <x-assignment-tab />
                @if (session('csv_errors'))
                    <div class="alert alert-danger">
                        {{ session('csv_errors') }} <a href="{{ session('error_csv') }}" class="error-btn">Download error
                            file</a>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="board-area">
                    @forelse ($assignments as $assignment)
                        <div class="assign-card" data-url="{{ route('admin.assign.detail', $assignment->id) }}">
                            <div class="card-id-wrapper">
                                <h3>{{ $assignment->id }}</h3>
                                <div class="toggler-btn-wrapper">
                                    <select name="" data-id="{{ $assignment->id }}" class="selectpicker agent">
                                        <option value="" selected disabled>Select Appraiser </option>
                                        @forelse ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $assignment->user_id ? 'selected' : '' }}>
                                                {{ $user->first_name . ' ' . $user->last_name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    {{-- <option value="">Agent 2</option> <option value="">Agent 3</option> --}}
                                    <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="toggler-btn"><i class="fa-solid fa-caret-down rotate-icon"></i></button>
                                </div>
                            </div>
                            <div class="insurance-wrapper">
                                <div>
                                    <p class="insurance-heading"><span>Insurance:</span> {{ $assignment->company }}</p>
                                    <div class="other-desc-area hidden-class">
                                        <p><span>Owner: </span> {{ $assignment->owner }}</p>
                                        <p><span>Owner Phone:</span> {{ $assignment->owner_phone }}</p>
                                        <p><span>Owner Email:</span> {{ $assignment->owner_email }}</p>
                                        <p><span>Claim#:</span> {{ $assignment->claim }}</p>
                                        <p><span>Type of Claim:</span> {{ $assignment->claim_type }}</p>
                                        <p><span>Loss Type:</span> {{ $assignment->loss_type }}</p>
                                        <p><span>Vehicle Location:</span> {{ $assignment->vehicle_location }} </p>
                                        <p><span>Appointment:</span> {{ $assignment->appointment_date }}</p>
                                        {{-- <p><span>Appointment:</span> {{ $assignment->appointment_date }}</p> --}}
                                    </div>
                                </div>
                                <div>
                                    <p class="text-end m-0" data-created-at="{{ $assignment->created_at }}">20 hours, 27
                                        mins </p>
                                    <div class="pending-btn-wrapper hidden-class">
                                        <button class="quick-updates-btn">Quick Updates</button>
                                        @if ($assignment->status == 'pending')
                                            <button style="background:#d3c501 !important;">Pending</button>
                                        @else
                                            <button style="background:#00A84C !important;">Completed</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="container">No Results Found</div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>

    <!-- Add assignment modal -->
    <div id="assignmentModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Assignment</h2>
                <span class="close-modal">&times;</span>
            </div>

            <form id="assignmentForm" class="modal-form">

                <!-- NEW FIELD: Assignment Number -->
                {{-- <div class="form-row">
                    <div class="form-group full-width">
                        <label>Assignment Number</label>
                        <input type="text" name="assignmentId" required placeholder="e.g. 001-0525-0100">
                    </div>
                </div> --}}

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Insurance</label>
                        <input type="text" autocomplete="off" name="insurance" id="insurance">
                        <span class="text-danger error-msg" id="insurance-error"></span>
                    </div>

                    <div class="form-group">
                        <label class="text-white">Owner</label>
                        <input type="text" autocomplete="off" name="owner" id="owner">
                        <span class="text-danger error-msg" id="owner-error"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Owner Phone</label>
                        <input type="tel" pattern="[0-9]*" id="ownerPhone" autocomplete="off"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" name="phone">
                        <span class="text-danger error-msg" id="owner_phone-error"></span>

                    </div>
                    <div class="form-group">
                        <label class="text-white">Owner Email</label>
                        <input type="text" autocomplete="off" id="ownerEmail" name="email">
                        <span class="text-danger error-msg" id="owner_email-error"></span>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Claim#</label>
                        <input type="text" autocomplete="off" id="claim" name="claim">
                        <span class="text-danger error-msg" id="claim-error"></span>

                    </div>
                    <div class="form-group">
                        <label class="text-white">Type of Claim</label>
                        <input type="text" name="" id="claimType">
                        <span class="text-danger error-msg" id="claim_type-error"></span>
                        {{-- <select name="" id="claimType" style="background-color: #fff !important; opacity: 100%; ">
                            <option value="-assignment">Absolute Assignment</option>
                            <option value="conditional-assignment">Conditional Assignment</option>
                        </select> --}}
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="text-white">Loss Type</label>
                        <input type="text" autocomplete="off" name="lossType" id="lossType">
                        <span class="text-danger error-msg" id="loss_type-error"></span>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Vehicle Location</label>
                        <input type="text" autocomplete="off" name="location" id="vehicleLocation">
                        <span class="text-danger error-msg" id="vehicle_location-error"></span>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label class="text-white">Appointment</label>
                        <input type="datetime-local" autocomplete="off" name="appointment" id="appointment">
                        <span class="text-danger error-msg" id="appointment-error"></span>
                    </div>
                </div>

                <button type="submit" id="addBtn" class="submit-btn">Add</button>
            </form>
        </div>
    </div>


    <div id="searchModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Search Assignments</h2>
                <span class="close-search-modal">&times;</span>
            </div>

            <form id="searchForm" class="modal-form">
                <div class="form-row">
                    <div class="form-group full-width position-relative">
                        <label style="color:#fff !important">Search</label>
                        <input type="text" name="search" class="search-input" autocomplete="off"
                            placeholder="Enter Claim # or Owner Name">

                    </div>

                </div>

                <button type="submit" class="submit-btn">Search</button>
            </form>
        </div>
    </div>

    <!-- Search Modal -->

    <!-- Import Assignment Modal -->
    <div id="importModal" class="modal" style="display:none;">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Import Assignment</h2>
                <span class="close-import" style="cursor: pointer">&times;</span>
            </div>

            <form id="importForm" action="{{ route('admin.assign.upload') }}" method="post" class="modal-form">
                @csrf
                <div class="form-row">
                    <div class="form-group full-width">
                        <label for="importFile" class="text-light">Choose File</label>
                        <a class="btn btn-primary mb-3"
                            href="{{ asset('assets/excel-template/template-assignment.xlsx') }}" download>Download
                            Template</a>
                        <input type="file" class="text-light" id="importFile" name="importFile" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Import</button>
            </form>
        </div>
    </div>


    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const appointmentInput = document.getElementById('appointment');
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                const year = tomorrow.getFullYear();
                const month = String(tomorrow.getMonth() + 1).padStart(2, '0');
                const day = String(tomorrow.getDate()).padStart(2, '0');
                const minDateTime = `${year}-${month}-${day}T00:00`;
                appointmentInput.setAttribute('min', minDateTime);
            });
        </script>

        <script>
            $(document).ready(function() {

                window.addEventListener("pageshow", function(event) {
                    var historyTraversal = event.persisted ||
                        (typeof window.performance != "undefined" &&
                            window.performance.navigation.type === 2);
                    if (historyTraversal) {
                        // Handle page restore.
                        window.location.reload();
                    }
                });

                // $('.toggler-btn').on('click', function() {
                //     var parentCard = $(this).closest('.assign-card');
                //     var otherDescArea = parentCard.find('.other-desc-area');
                //     var pendingBtnWrapper = parentCard.find('.pending-btn-wrapper');
                //     var caretIcon = $(this).find('.rotate-icon');
                //     var eyeBtn = parentCard.find('.eye-btn');

                //     eyeBtn.toggleClass('hidden-class smooth-toggle');
                //     otherDescArea.toggleClass('hidden-class smooth-toggle');
                //     pendingBtnWrapper.toggleClass('hidden-class smooth-toggle');
                //     caretIcon.toggleClass('rotated');
                // });


                // Toggle Assignment Card
                $('.insurance-heading').on('click', toggleAssignmentCard);
                $('.toggler-btn').on('click', toggleAssignmentCard);
                function toggleAssignmentCard(e){
                    e.stopPropagation();
                    var parentCard = $(this).closest('.assign-card');
                    var otherDescArea = parentCard.find('.other-desc-area');
                    var pendingBtnWrapper = parentCard.find('.pending-btn-wrapper');
                    var caretIcon = $(this).find('.rotate-icon');
                    var eyeBtn = parentCard.find('.eye-btn');

                    eyeBtn.toggleClass('hidden-class smooth-toggle');
                    otherDescArea.toggleClass('hidden-class smooth-toggle');
                    pendingBtnWrapper.toggleClass('hidden-class smooth-toggle');
                    caretIcon.toggleClass('rotated');
                }


                // Event delegation for dynamically added .toggler-btn
                $(document).on('click', '.toggler-btn', function(e) {
                    e.stopPropagation(); // Prevent bubbling to .assign-card

                    var parentCard = $(this).closest('.assign-card');
                    var otherDescArea = parentCard.find('.other-desc-area');
                    var pendingBtnWrapper = parentCard.find('.pending-btn-wrapper');
                    var caretIcon = $(this).find('.rotate-icon');
                    var eyeBtn = parentCard.find('.eye-btn');

                    eyeBtn.toggleClass('hidden-class smooth-toggle');
                    otherDescArea.toggleClass('hidden-class smooth-toggle');
                    pendingBtnWrapper.toggleClass('hidden-class smooth-toggle');
                    caretIcon.toggleClass('rotated');
                });


                $(document).on('click', '.pending-btn-wrapper button', function(e) {
                    e.stopPropagation();
                });

                // $(document).on('click', '.assign-card', function() {
                //     var $card = $(this);
                //     var isExpanded = $card.find('.other-desc-area').hasClass('smooth-toggle');

                //     if (isExpanded) {
                //         var url = $card.attr('data-url');
                //         if (url) {
                //             console.log('Redirecting to:', url);
                //             window.location.href = url;
                //         } else {
                //             console.error('No data-url found for card:', $card.attr('id'));
                //         }
                //     }
                // });
            });

            $(document).ready(function() {
                $('.agent').on("change", function() {
                    const selectedAgent = $(this);
                    const agentId = selectedAgent.val();
                    const assignmentId = selectedAgent.attr('data-id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Once an agent is assigned, your assignment will be moved to the Tasks Assigned tab.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, assign it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.LoadingOverlay("show");
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('admin.assign.agent') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    agent: agentId,
                                    assignment: assignmentId,
                                },
                                success: function(response) {
                                    $.LoadingOverlay("hide");
                                    selectedAgent.closest('.assign-card').hide();

                                    Swal.fire(
                                        'Assigned!',
                                        'The assignment has been successfully moved to Task Assigned tab.',
                                        'success'
                                    );
                                },
                                error: function(xhr) {
                                    $.LoadingOverlay("hide");
                                    let errorMessage =
                                        'An error occurred. Please try again.';
                                    if (xhr.responseJSON && xhr.responseJSON.message) {
                                        errorMessage = xhr.responseJSON.message;
                                    }


                                }
                            });
                        } else {
                            selectedAgent.val('');
                        }
                    });


                });
                $(document).on("change", '.agent', function() {

                    const selectedAgent = $(this);
                    const agentId = selectedAgent.val();
                    const assignmentId = selectedAgent.attr('data-id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Once an agent is assigned, your assignment will be moved to the Tasks Assigned tab.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, assign it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.LoadingOverlay("show");
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('admin.assign.agent') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    agent: agentId,
                                    assignment: assignmentId,
                                },
                                success: function(response) {
                                    $.LoadingOverlay("hide");
                                    selectedAgent.closest('.assign-card')
                                        .hide();

                                    Swal.fire(
                                        'Assigned!',
                                        'The assignment has been successfully moved to Task Assigned tab.',
                                        'success'
                                    );
                                },
                                error: function(xhr) {
                                    $.LoadingOverlay("hide");
                                    let errorMessage =
                                        'An error occurred. Please try again.';
                                    if (xhr.responseJSON && xhr.responseJSON
                                        .message) {
                                        errorMessage = xhr.responseJSON.message;
                                    }


                                }
                            });
                        } else {

                            selectedAgent.val('');
                        }
                    });

                })
            })
        </script>

        <script>
            $(document).ready(function() {

                function updateElapsedTime() {
                    $('.board-area .text-end').each(function() {
                        const createdAt = $(this).data('created-at');
                        if (createdAt) {
                            const createdDate = new Date(createdAt + 'Z');
                            const now = new Date();

                            let diffInMilliseconds = now.getTime() - createdDate.getTime();
                            diffInMilliseconds = Math.abs(diffInMilliseconds);

                            const diffInMinutes = Math.floor(diffInMilliseconds / (1000 * 60));
                            const diffInHours = Math.floor(diffInMinutes / 60);
                            const diffInDays = Math.floor(diffInHours / 24);

                            let timeAgo = '';
                            if (diffInDays > 0) {
                                timeAgo = `${diffInDays} day${diffInDays > 1 ? 's' : ''}, `;
                            }
                            if (diffInHours > 0) {
                                const remainingHours = diffInHours % 24;
                                timeAgo += `${remainingHours} hour${remainingHours > 1 ? 's' : ''}, `;
                            }
                            const remainingMinutes = diffInMinutes % 60;
                            timeAgo += `${remainingMinutes} min${remainingMinutes > 1 ? 's' : ''}`;

                            $(this).text(timeAgo.trim().replace(/,$/, '') + ' ago');
                        }
                    });
                }


                // Call the function on page load
                updateElapsedTime();

                // Set an interval to run the function every 60 seconds
                setInterval(updateElapsedTime, 60000);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#assignmentForm').on("submit", function(event) {
                    event.preventDefault();

                    console.log($('#insurance').val());
                    console.log($('#owner').val());
                    console.log($('#ownerPhone').val());
                    console.log($('#ownerEmail').val());
                    console.log($('#claim').val());
                    console.log($('#claimType').val());
                    console.log($('#lossType').val());
                    console.log($('#vehicleLocation').val());
                    console.log($('#appointment').val());

                    $.LoadingOverlay("show")
                    $.ajax({
                        type: 'POST',
                        url: " {{ route('admin.assign.store') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            insurance: $('#insurance').val(),
                            owner: $('#owner').val(),
                            owner_phone: $('#ownerPhone').val(),
                            owner_email: $('#ownerEmail').val(),
                            claim: $('#claim').val(),
                            claim_type: $('#claimType').val(),
                            loss_type: $('#lossType').val(),
                            vehicle_location: $('#vehicleLocation').val(),
                            appointment: $('#appointment').val()
                        },
                        success: function(response) {
                            $.LoadingOverlay("hide");
                            $('#assignmentModal').css('display', 'none')
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Assignment added successfully.',
                                showConfirmButton: false,
                                timer: 1000
                            }).then(() => {
                                window.location
                                    .reload();
                            });
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
                })
            })
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const searchBtn = document.getElementById("searchAssignment");
                const searchModal = document.getElementById("searchModal");
                const closeSearch = document.querySelector(".close-search-modal");

                searchBtn.addEventListener("click", () => {
                    searchModal.style.display = "flex";
                });

                closeSearch.addEventListener("click", () => {
                    searchModal.style.display = "none";
                });

                window.addEventListener("click", (e) => {
                    if (e.target === searchModal) {
                        searchModal.style.display = "none";
                    }
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                const importBtn = document.getElementById("importAssignment");
                const importModal = document.getElementById("importModal");
                const closeImport = document.querySelector(".close-import");
                const importForm = document.getElementById("importForm");


                importBtn.addEventListener("click", () => {
                    importModal.style.display = "flex";
                });

                closeImport.addEventListener("click", () => {
                    importModal.style.display = "none";
                    importForm.reset();
                });


                importForm.addEventListener("submit", (e) => {
                    e.preventDefault();
                    const fileInput = document.getElementById("importFile");
                    const file = fileInput.files[0];

                    if (!file) {
                        Swal.fire('Error', 'Please select a file before importing.', 'error');
                        return;
                    }

                    const formData = new FormData();
                    formData.append('file', file);
                    formData.append('_token', "{{ csrf_token() }}");

                    $.LoadingOverlay("show");
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('admin.assign.upload') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $.LoadingOverlay("hide");
                            importModal.style.display = "none";
                            importForm.reset();

                            if (response.success) {
                                // Full success - green swal
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(() => {
                                    window.location.reload(
                                        true); // Force reload to show new assignments
                                });
                            } else if (response.success_count > 0 && response.error_count > 0) {
                                // Partial import - 1 row imported but 7 rows failed - show as warning
                                Swal.fire({
                                    title: 'Partial Import',
                                    text: response
                                        .message, // "Imported 1 assignments successfully, but 7 rows had errors..."
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Download Error CSV',
                                    cancelButtonText: 'Close & Reload'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        const link = document.createElement('a');
                                        link.href = response.error_csv;
                                        link.download = 'import_errors.csv';
                                        document.body.appendChild(link);
                                        link.click();
                                        document.body.removeChild(link);
                                        setTimeout(() => window.location.reload(true),
                                            1000);
                                    } else {
                                        window.location.reload(true);
                                    }
                                });
                            } else {
                                // Complete failure - red swal
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Import Failed',
                                    text: response.message ||
                                        'No rows were imported due to errors.',
                                    showCancelButton: true,
                                    cancelButtonText: 'Close',
                                    confirmButtonText: response.error_csv ?
                                        'Download Error CSV' : null,
                                    showConfirmButton: !!response
                                        .error_csv // Only show confirm if error_csv exists
                                }).then((result) => {
                                    if (result.isConfirmed && response.error_csv) {
                                        const link = document.createElement('a');
                                        link.href = response.error_csv;
                                        link.download = 'import_errors.csv';
                                        document.body.appendChild(link);
                                        link.click();
                                        document.body.removeChild(link);
                                    }
                                    // No reload for full error case (empty CSV or zero rows)
                                });
                            }
                        },
                        error: function(xhr) {
                            $.LoadingOverlay("hide");
                            let errorMessage = 'An error occurred. Please try again.';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                                errorMessage = Object.values(xhr.responseJSON.errors)[0][0];
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Import Failed',
                                text: errorMessage,
                                showCancelButton: true,
                                cancelButtonText: 'Close',
                                confirmButtonText: xhr.responseJSON?.error_csv ?
                                    'Download Error CSV' : null,
                                showConfirmButton: !!xhr.responseJSON?.error_csv
                            }).then((result) => {
                                if (result.isConfirmed && xhr.responseJSON?.error_csv) {
                                    const link = document.createElement('a');
                                    link.href = xhr.responseJSON.error_csv;
                                    link.download = 'import_errors.csv';
                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);
                                }

                            });
                        }
                    });
                });


                window.addEventListener("click", (e) => {
                    if (e.target === importModal) {
                        importModal.style.display = "none";
                        importForm.reset();
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                // Enhanced time formatting helper function
                function formatTimeAgo(createdAt) {
                    if (!createdAt) return 'Just now';

                    let createdDate;
                    try {
                        // Handle different date formats more robustly
                        if (typeof createdAt === 'number') {
                            // Unix timestamp
                            createdDate = new Date(createdAt * 1000);
                        } else {
                            // Try ISO format first
                            createdDate = new Date(createdAt);

                            // If invalid, try adding 'Z' for UTC
                            if (isNaN(createdDate.getTime())) {
                                createdDate = new Date(createdAt + 'Z');
                            }

                            // If still invalid, try MySQL format
                            if (isNaN(createdDate.getTime())) {
                                const mysqlMatch = createdAt.match(/(\d{4}-\d{2}-\d{2}) (\d{2}:\d{2}:\d{2})/);
                                if (mysqlMatch) {
                                    createdDate = new Date(`${mysqlMatch[1]}T${mysqlMatch[2]}Z`);
                                }
                            }
                        }

                        if (isNaN(createdDate.getTime())) {
                            console.warn('Invalid date format:', createdAt);
                            return 'Just now';
                        }
                    } catch (error) {
                        console.warn('Date parsing error:', error, 'for date:', createdAt);
                        return 'Just now';
                    }

                    const now = new Date();
                    let diffInMilliseconds = Math.abs(now.getTime() - createdDate.getTime());

                    if (diffInMilliseconds < 0) {
                        diffInMilliseconds = 0;
                    }

                    const diffInMinutes = Math.floor(diffInMilliseconds / (1000 * 60));
                    const diffInHours = Math.floor(diffInMinutes / 60);
                    const diffInDays = Math.floor(diffInHours / 24);
                    let timeAgo = '';

                    if (diffInDays > 0) {
                        timeAgo = `${diffInDays} day${diffInDays > 1 ? 's' : ''}`;
                    } else if (diffInHours > 0) {
                        timeAgo = `${diffInHours} hour${diffInHours > 1 ? 's' : ''}`;
                    } else {
                        timeAgo = `${diffInMinutes} min${diffInMinutes !== 1 ? 's' : ''}`;
                    }

                    return timeAgo + ' ago';
                }

                $('#searchForm').on("submit", function(e) {
                    e.preventDefault();
                    const input = $(".search-input").val();

                    console.log(input)
                    $.LoadingOverlay("show")

                    var assignment = '';

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('admin.assign.search') }}',
                        data: {
                            _token: "{{ csrf_token() }}",
                            search_query: input,
                            filter: 'task-assigned'
                        },
                        success: function(response) {
                            console.log(response)
                            $.LoadingOverlay("hide")
                            $('#searchModal').css("display", "none");

                            if (response.assignments != 'No Results Found') {

                                //     $.each(response.assignments, function(index, item) {
                                //         console.log(item);

                                //         var agentId = item.user_id;


                                //         // console.log(selected)
                                //         var status = item.status;
                                //         var statusColor = item.status == 'completed' ?
                                //             '#00A84C' : '#d3c501';


                                //         const formattedTime = formatTimeAgo(item.created_at);



                                // //         assignment +=
                                // //             `<div class="assign-card">
                        // //     <div class="card-id-wrapper">
                        // //         <h3>${item.id}</h3>
                        // //         <div class="toggler-btn-wrapper">
                        // //             <select name="agent"  data-id="${item.id}" data-user-id="${item.user_id}" class="selectpicker agent">
                        // //                 <option value="" >Select agent </option>

                        // //             </select>
                        // //             <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                        // //             <button type="button" class="toggler-btn"><i class="fa-solid fa-caret-down rotate-icon"></i></button>
                        // //         </div>
                        // //     </div>
                        // //     <div class="insurance-wrapper">
                        // //         <div>
                        // //             <p><span>Insurance:</span> ${item.company}</p>
                        // //             <div class="other-desc-area hidden-class">
                        // //                 <p><span>Owner: </span>${item.owner} </p>
                        // //                 <p><span>Owner Phone: </span> ${item.owner_phone} </p>
                        // //                 <p><span>Owner Email: </span> ${item.owner_email} </p>
                        // //                 <p><span>Claim#: </span> ${item.claim} </p>
                        // //                 <p><span>Type of Claim: </span> ${item.claim_type}</p>
                        // //                 <p><span>Loss Type:</span> ${item.loss_type}</p>
                        // //                 <p><span>Vehicle Location: </span> ${item.vehicle_location} </p>
                        // //                 <p><span>Appointment:</span> ${item.appointment_date} </p>
                        // //             </div>
                        // //         </div>
                        // //         <div>
                        // //             <!-- Time is formatted once and stored as static text -->
                        // //             <p class="text-end m-0">${formattedTime}</p>
                        // //             <div class="pending-btn-wrapper hidden-class">
                        // //                 <button>Quick Updates</button>
                        // //                 <button style="background:${statusColor} !important;">${item.status}</button>
                        // //             </div>
                        // //         </div>
                        // //     </div>
                        // // </div>`;

                                // // if(item.user_id == null){
                                // //     console.log("sdfa")
                                // //     $('.agent').val('0')
                                // // }



                                //     })
                            } else {
                                assignment = '<div class="container">No Results Found. </div>'
                            }

                            // $('.board-area').html(assignment)
                            $('.board-area').html(response.html)
                            // $('.agent').val($('.agent').attr('data-user-id'))
                            const timeAgo = t => {
                                // Fix: Multiply seconds by 1000 to get milliseconds
                                const created = parseInt(t) * 1000;
                                const now = Date.now();
                                const diff = now - created;

                                if (isNaN(diff) || diff < 0) return 'Invalid date';
                                if (diff < 6e4) return 'Just now'; // < 1 minute

                                const m = Math.floor((diff % 36e5) / 6e4);
                                const h = Math.floor(diff / 36e5);
                                const d = Math.floor(h / 24);

                                if (diff < 36e5) return `${m}min ago`; // < 1 hour
                                return d ? `${d}d ${h%24 ? h%24 + 'h' : ''} ago` : `${h}h ago`;
                            };

                            $(document).ready(function() {
                                formatTimeElements();
                                // Update every minute
                                setInterval(formatTimeElements, 60000);
                            });

                            function formatTimeElements() {
                                $('[data-created-at]').each(function() {
                                    const timestamp = $(this).attr('data-created-at');
                                    if (timestamp) {
                                        $(this).text(timeAgo(timestamp));
                                    }
                                });
                            }

                            window.formatNewTimeElements = formatTimeElements;
                            // No additional processing needed - time is already formatted and static
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            $.LoadingOverlay("hide");
                        }
                    })
                })

                // View Assignment
                $('.quick-updates-btn').on('click', function () {
                    let btn = $(this);
                    let card = btn.closest('.assign-card')
                    let isExpanded = card.find('.other-desc-area').hasClass('smooth-toggle');;

                    if (isExpanded) {
                        let url = card.attr('data-url');
                        if (url) {
                            console.log('Redirecting to:', url);
                            window.location.href = url;
                        } else {
                            console.error('No data-url found for card:', card.attr('id'));
                        }
                    }
                });

                $(document).on('click', '.assign-card', function() {
                    var $card = $(this);
                    var isExpanded = $card.find('.other-desc-area').hasClass('smooth-toggle');

                    if (isExpanded) {
                        var url = $card.attr('data-url');
                        if (url) {
                            console.log('Redirecting to:', url);
                            window.location.href = url;
                        } else {
                            console.error('No data-url found for card:', $card.attr('id'));
                        }
                    }
                });

            })
        </script>
    @endpush
@endsection
