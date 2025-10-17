@extends('layouts.admin.app')

@section('content')
    <style>
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0px 1000px white inset !important;
            -webkit-text-fill-color: black !important;
        }
    </style>
    {{-- @dd($assignment) --}}
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <div class="view-wrapper mt-0">
                        <div class="inner-head-wrap2 mb-5">
                            <ul class="inner-head3">
                                {{-- <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">View</li>
                                </a> --}}

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Print</li>
                                </a>

                                {{-- <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Edit</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Cancel</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Dispatch</li>
                                </a> --}}

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Messages</li>
                                </a>

                                {{-- <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Billing</li>
                                </a> --}}

                                <a href="{{ route('admin.assign.files', $assignment->id) }}" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Files</li>
                                </a>

                                {{-- <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Actions</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Reports</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Notepad</li>
                                </a>

                                <button class="link text-decoration-none open-modal-btn" type="button"
                                    onclick="openModal()">
                                    <li class="inner-list inner-list-1">Schedule Appointments</li>
                                </button> --}}
                            </ul>
                        </div>

                        <div class="row boxes-rows">
                            <div class="col-lg-4">
                                <div class="payment-info">
                                    <div class="info-head">
                                        <h3>Claim Info</h3>
                                    </div>

                                    <div class="info-desc d-flex">
                                        <div>
                                            <ul class="head-ul">
                                                <li>Company:</li>
                                                <li>Company #:</li>
                                                <li>DL Number:</li>
                                                <li>Claim Number:</li>
                                                <li>Status:</li>
                                            </ul>
                                        </div>

                                        <div>
                                            <ul class="desc-ul">
                                                <li>Lorem Ipsum</li>
                                                <li>ABCD1234567890</li>
                                                <li>1234566</li>
                                                <li>1234566</li>
                                                <li>Active</li>
                                            </ul>
                                        </div>
                                    </div>

                                    {{-- <div class="info-head">
                                        <h3>Take Action</h3>
                                    </div> --}}

                                    {{-- <div class="info-desc text-center">
                                        <button class="mod-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            You must ACCEPT or REJECT the claim to proceed
                                        </button>

                                        <div class="d-flex mb-3 gap-5">
                                            <p class="claim-para">
                                                <i class="fa-solid fa-check"></i>
                                                Accept Claim
                                            </p>

                                            <p class="claim-para">
                                                <i class="fa-solid fa-minus"></i>
                                                <a href="#" class="text-decoration-none">Reject Claim</a>
                                            </p>
                                        </div>

                                        <div class="d-flex">
                                            <p class="claim-para">
                                                <i class="fa-solid fa-exclamation"></i>
                                                Turn On : Needs Attention
                                            </p>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="payment-info">
                                    <div class="info-head">
                                        <h3>Payment Details</h3>
                                    </div>

                                    <div class="info-desc text-center">
                                        <div class="table-responsive mb-5" style="max-height:150px;">
                                            <table class="table text-start">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Billing Type</th>
                                                        <th scope="col">Miles</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($assignment->assignment_payments as $payment)
                                                        <tr>
                                                            <th scope="row">{{ $payment->billing_type }}</th>
                                                            <td>{{ $payment->miles }}</td>
                                                            <td>${{ $payment->price }}</td>
                                                            <td><button class="edit-payment" data-id="{{ $payment->id }}"
                                                                    style="background: transparent; border:none; outline:none;"><i
                                                                        class="fa-solid fa-pencil"></i></button>  <button class="delete-payment" data-id="{{ $payment->id }}"
                                                                    style="background: transparent; border:none; outline:none;"><i
                                                                        class="fa-solid fa-trash"></i></button>

                                                                    </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">No Results Found</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>

                                        <button type="button" class="btn btn-default" id="modal-xl-btn" data-toggle="modal"
                                            data-target="#modal-xl">
                                            Add Payment Details
                                        </button>
                                    </div>

                                    @isset($assignment->payment_info)
                                        <div class="pay-info px-4 mt-3">
                                            <h5>Change Request Info</h5>
                                            <p>{{ $assignment->payment_info }}</p>
                                        </div>
                                    @endisset
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="payment-info" style="height: auto !important;">
                                    <div class="info-head">
                                        <h3>Timeline</h3>
                                    </div>
                                    <div class="info-desc d-flex flex-wrap" style="gap:10px">
                                        <div class="d-flex justify-content-center gap-3 align-items-center">
                                            <div>
                                                <ul class="head-ul">
                                                    <li class="mb-4">Appointment Date:</li>
                                                    <li class="mb-2">Time Open</li>
                                                    <li>Date Created</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="desc-ul">
                                                    <li class="mb-4">
                                                        {{ \Carbon\Carbon::parse($assignment->appointment_date)->format('m/d/Y g:i a') }}
                                                    </li>
                                                    <li class="mb-2">
                                                        {{ \Carbon\Carbon::parse($assignment->created_at)->diffForHumans(now(), ['parts' => 3, 'short' => false, 'syntax' => \Carbon\Carbon::DIFF_ABSOLUTE]) }}
                                                        ago</li>
                                                    <li>{{ \Carbon\Carbon::parse($assignment->created_at)->setTimezone('America/Chicago')->format('m/d/Y g:i a \C\D\T') }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <table class="table text-center timeline-table">
                                            @forelse ($assignment->assignment_logs as $log)
                                                <tr>
                                                    <th scope="row">{{ $log->user->first_name }}</th>
                                                    <td>{{ $log->created_at }}</td>
                                                    <td>
                                                        @if ($log->is_accept == 1)
                                                            <button class="rejection-reason"
                                                                style="background:none;border:none"
                                                                data-id="{{ $log->id }}"
                                                                data-rejection-reason="{{ $log->reason_rejection }}">Accepted
                                                                <i class="fa-solid fa-eye"></i></button>
                                                        @elseif($log->is_accept !== null && $log->is_accept == 0)
                                                            <button class="rejection-reason"
                                                                style="background:none;border:none"
                                                                data-id="{{ $log->id }}"
                                                                data-rejection-reason="{{ $log->reason_rejection }}">Rejected
                                                                <i class="fa-solid fa-eye"></i></button>
                                                        @elseif($log->is_accept == null)
                                                            {{ 'Assigned' }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        </table>
                                        @isset($assignment->payment_info)
                                            <div class="pay-info d-flex justify-content-between w-100">
                                                <p>Pay Change Request</p>
                                                <button class="view-payment-info"
                                                    style="background:none;border:none;font-size:11px;"
                                                    data-id="{{ $assignment->id }}" data-payment-info="{{ $assignment->payment_info}}">
                                                    View
                                                    <i class="fa-solid fa-eye ms-1"></i>
                                                </button>
                                            </div>
                                        @endisset
                                    </div>
                                </div>

                                <div class="pay-instruction">
                                    <h5>Instructions</h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and
                                        more recently with desktop publishing software like
                                        Aldus PageMaker including versions of Lorem Ipsum
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="faqs">
                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">Assignments</span>
                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0" style="display: none">
                                            <div class="view-tab-content">
                                                <form action="">
                                                    <h5 class="assign-head">Insurance Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Company</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name=""
                                                                        value="{{ $assignment?->company }}" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Adjuster</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name=""
                                                                        value="{{ $assignment?->adjuster }}"
                                                                        id="" class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Deductible Amount</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->deductible_amount }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Claim For</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->claim_for }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Date First Contacted</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->date_first_contacted }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Claim Number</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->claim }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Adjuster Phone</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->adjuster_phone }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Date of Loss</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->date_of_loss }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Insured Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->insured_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Policy Number</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->policy_number }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Type of Loss</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->loss_type }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Owner Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Business Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->business_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Contact Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">City</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_city }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">State</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_state }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Client Email</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_email }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Mobile Phone</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_mobile_phone }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">First Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_first_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Last Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_last_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Address</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_address }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Zip</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_zip }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Home Phone</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_phone }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Work Phone</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->owner_work_phone }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Location Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Location</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_location }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Address</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->location_address }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">City</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->location_city }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">State</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->location_state }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Zip</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->location_zip }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5 class="assign-head">Vehicle Information</h5>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Year</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_year }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Make</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_make }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">VIN #</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_vin }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">License Plate</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_license_plate }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Mileage</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_mileage }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Model</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_model }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Color</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_color }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Damage</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment?->vehicle_damage }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">Guidelines</span>
                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0" style="display: none">
                                            <div class="view-tab-content guideline-content">
                                                {!! $guideline?->content !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">Clients Forms</span>
                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0" style="display: none">
                                            <div class="view-tab-content">
                                                <div class="entry-table-wrap">
                                                    <table class="table entries-table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    File Name
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    Label
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    Date
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    Download
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($clientForms as $clientForm)
                                                                <tr class="">
                                                                    <td>{{ $clientForm->file }}</td>
                                                                    <td>{{ $clientForm->label }}</td>
                                                                    <td>{{ str_replace('-', '/', explode(' ', $clientForm->updated_at)[0]) }}</td>
                                                                    <td>
                                                                        <a href="{{ asset('files/client-forms/' . $clientForm->file) }}"
                                                                            download class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <div>No Files Found</div>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="pagination assign-pagination">
                                                    <button class="prev">
                                                        <i class="fa-solid fa-angle-left"></i>
                                                    </button>
                                                    <button class="page active-page">1</button>
                                                    <button class="page">2</button>
                                                    <button class="page">3</button>
                                                    <button class="page">4</button>
                                                    <button class="next">
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="faq">
                                        <button type="button" class="faq-btn d-flex">
                                            <span class="flex-grow-1">General Forms</span>
                                            <div class="faq-btn-arrow">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </button>

                                        <div class="faq-body mb-0">
                                            <div class="view-tab-content">
                                                <div class="entry-table-wrap">
                                                    <table class="table entries-table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    File Name
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    Label
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    Date
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                                <th scope="col" style="background: #8e8e8e !important; color: white !important;">
                                                                    Download
                                                                    <i class="fa-solid fa-arrow-down"></i>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($generalForms as $generalForm)
                                                                <tr>
                                                                    <td>{{ $generalForm->file }}</td>
                                                                    <td>{{ $generalForm->label }}</td>
                                                                    <td>{{ str_replace('-', '/', explode(' ', $generalForm->updated_at)[0]) }}</td>
                                                                    <td>
                                                                        <a href="{{ asset('files/general-forms/' . $generalForm->file) }}"
                                                                            download class="icon" title="Download">
                                                                            <i class="fa fa-download"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="pagination assign-pagination">
                                                    <button class="prev">
                                                        <i class="fa-solid fa-angle-left"></i>
                                                    </button>
                                                    <button class="page active-page">1</button>
                                                    <button class="page">2</button>
                                                    <button class="page">3</button>
                                                    <button class="page">4</button>
                                                    <button class="next">
                                                        <i class="fa-solid fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .timeline-table,
        .timeline-table td,
        .timeline-table tr,
        .timeline-table th {
            border: none !important;
        }
    </style>

    <!-- Add Payment Modal -->
    <div class="modal fade" id="modal-xl" style="display: none; padding-right: 15px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Payment Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="paymentForm" action="">
                    @csrf
                    <div class="modal-body" style="background-color:#212529 !important">
                        <div class="form-group payment-form-group">
                            <label for="billingType" style="color:#fff">Billing Type</label>
                            <input type="text" value="" style="background:#fff; color:#000"
                                class="form-control" id="billingType" name="billing_type[]"
                                placeholder="Enter billing type">

                            <label for="miles" style="color:#fff">Miles</label>
                            <input type="number" value="" style="background:#fff; color:#000"
                                class="form-control" id="miles" placeholder="Enter miles" name="miles[]">

                            <label for="price" style="color:#fff">Price</label>
                            <input type="number" style="background:#fff; color:#000" class="form-control"
                                id="price" name="price[]" value="" placeholder="Enter price">

                            <button class="btn btn-danger btn-sm remove-group-btn mt-2" type="button"
                                style="display:none;">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>

                        <button class="btn btn-success mt-2 add-group-btn" type="button">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Payment Modal -->
    <div class="modal fade" id="edit-payment-modal" style="display: none; padding-right: 15px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Payment Details</h4>
                    <button type="button" class="close edit-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="editPaymentForm" action="">
                    @csrf
                    <div class="modal-body" style="background-color:#212529 !important">
                        <div class="form-group payment-form-group">
                            <input type="hidden" name="payment_id" id="editPaymentId">
                            <label for="editBillingType" style="color:#fff">Billing Type</label>
                            <input type="text" style="background:#fff; color:#000"
                                class="form-control" id="editBillingType" name="billing_type"
                                placeholder="Enter billing type">

                            <label for="editMiles" style="color:#fff">Miles</label>
                            <input type="number" style="background:#fff; color:#000"
                                class="form-control" id="editMiles" placeholder="Enter miles" name="miles">

                            <label for="editPrice" style="color:#fff">Price</label>
                            <input type="number" style="background:#fff; color:#000" class="form-control"
                                id="editPrice" name="price" placeholder="Enter price">
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.add-group-btn').on('click', function() {
                var $originalGroup = $('.payment-form-group').first();
                var $clonedGroup = $originalGroup.clone(true, true);
                $clonedGroup.find('input').val('');
                $clonedGroup.find('.remove-group-btn').show();
                $(this).before($clonedGroup);
            });

            $('.modal-body').on('click', '.remove-group-btn', function() {
                var $groupToRemove = $(this).closest('.payment-form-group');
                if ($('.payment-form-group').length > 1) {
                    $groupToRemove.remove();
                } else {
                    console.log("Cannot remove the last form group.");
                }
            });

            function clearValidationErrors() {
                $('.text-danger').remove();
                $('.form-control').removeClass('is-invalid');
            }

            function displayValidationErrors(errors) {
                $.each(errors, function(key, messages) {
                    const parts = key.split('.');
                    const field = parts[0];
                    const index = parts[1];

                    if (index !== undefined && !isNaN(parseInt(index))) {
                        const $formGroup = $('.payment-form-group').eq(index);
                        const $inputElement = $formGroup.find(`input[name="${field}[]"]`);
                        if ($inputElement.length) {
                            $inputElement.addClass('is-invalid');
                            $inputElement.after(`<p class="text-danger">${messages[0]}</p>`);
                        }
                    } else {
                        console.warn(`Error for static field '${key}' was not handled automatically.`);
                    }
                });
            }

            $('#paymentForm').on("submit", function(e) {
                e.preventDefault();
                clearValidationErrors();
                var formElement = document.querySelector('#paymentForm');
                var form = new FormData(formElement);
                form.append('assignment_id', {{ $assignment->id }});

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.assign.payment.store') }}',
                    data: form,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Payment Details updated Successfully.',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            displayValidationErrors(xhr.responseJSON.errors);
                        } else {
                            console.error("AJAX Error:", status, error);
                        }
                    }
                });
            });

            $('.edit-payment').on("click", function() {
                var paymentId = $(this).attr('data-id');
                $.ajax({
                    type: 'GET',
                    url: '{{ route('admin.assign.payment.edit', ':id') }}'.replace(':id', paymentId),
                    success: function(response) {
                        console.log(response);
                        $('#edit-payment-modal').modal('show');
                        $('#editPaymentId').val(response.assignment.id);
                        $('#editBillingType').val(response.assignment.billing_type);
                        $('#editMiles').val(response.assignment.miles);
                        $('#editPrice').val(response.assignment.price);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to load payment details. Please try again.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

              $('#editPaymentForm').on("submit", function(e) {
                e.preventDefault();
                clearValidationErrors();
                var formElement = document.querySelector('#editPaymentForm');
                var form = new FormData(formElement);
                form.append('assignment_id', {{ $assignment->id }});

                var editPaymentId = $('#editPaymentId').val()

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.assign.payment.update', ':id') }}'.replace(':id', editPaymentId),
                    data: form,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Payment Details updated Successfully.',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            $.each(xhr.responseJSON.errors, function(key, messages) {
                                const $inputElement = $(`#editPaymentForm input[name="${key}"]`);
                                if ($inputElement.length) {
                                    $inputElement.addClass('is-invalid');
                                    $inputElement.after(`<p class="text-danger">${messages[0]}</p>`);
                                }
                            });
                        } else {
                            console.error("AJAX Error:", status, error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to update payment details. Please try again.',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });
            });



            $('.edit-close').on("click",function (){
                $('#edit-payment-modal').modal('hide');
            })


            $(document).on("click", "#modal-xl-btn", function() {
                $("#modal-xl").addClass("show");
                $("#modal-xl").prop("display", "block");
            });


            $('.delete-payment').on('click', function() {
    var paymentId = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this payment?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.assign.payment.destroy',) }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    id:paymentId
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: 'Payment has been deleted.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to delete payment. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }
    });
});
        });



        $(document).ready(function() {
            // View Rejection Reason.
            $('.rejection-reason').on('click', function() {
                var rejectionReason = $(this).attr('data-rejection-reason');
                console.log(rejectionReason);
                Swal.fire({
                    title: 'Rejection Reason',
                    text: rejectionReason,
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            });

            // View Payment Info.
            $('.view-payment-info').on('click', function() {
                let paymentInfo = $(this).attr('data-payment-info');
                Swal.fire({
                    title: 'Payment Change Request Info',
                    text: paymentInfo,
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            });
        });

        $(document).ready(function() {
            $('.guideline-content p,.guideline-content span').addClass('guide-para');
        });

        $(document).ready(function() {
            function initPagination($table, $pagination) {
                var rowsPerPage = 5;
                var $rows = $table.find('tbody tr');
                var totalRows = $rows.length;
                var totalPages = Math.ceil(totalRows / rowsPerPage);
                var currentPage = 1;
                var noResultsMessage =
                    '<tr class="no-results"><td colspan="4" style="text-align: center;">No results found</td></tr>';

                function updatePagination() {
                    $rows.hide();
                    var start = (currentPage - 1) * rowsPerPage;
                    var end = start + rowsPerPage;
                    $rows.slice(start, end).show();
                    $pagination.find('.page').removeClass('active-page');
                    $pagination.find('.page').eq(currentPage - 1).addClass('active-page');
                    $pagination.find('.prev').prop('disabled', currentPage === 1);
                    $pagination.find('.next').prop('disabled', currentPage === totalPages);
                }

                function generatePaginationButtons() {
                    $pagination.find('.page').remove();
                    for (var i = 1; i <= totalPages; i++) {
                        var $pageButton = $('<button class="page">' + i + '</button>');
                        if (i === currentPage) {
                            $pageButton.addClass('active-page');
                        }
                        $pageButton.insertBefore($pagination.find('.next'));
                    }
                }

                if (totalRows > 0) {
                    $table.find('.no-results').remove();
                    $pagination.show();
                    generatePaginationButtons();
                    updatePagination();
                } else {
                    $table.find('.no-results').remove();
                    $table.find('tbody').append(noResultsMessage);
                    $pagination.hide();
                }

                $pagination.on('click', '.page', function() {
                    currentPage = parseInt($(this).text());
                    updatePagination();
                });

                $pagination.on('click', '.prev', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                    }
                });

                $pagination.on('click', '.next', function() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                    }
                });
            }

            $('.entries-table').each(function(index) {
                var $table = $(this);
                var $pagination = $('.pagination.assign-pagination').eq(index);
                if ($table.length && $pagination.length) {
                    initPagination($table, $pagination);
                }
            });
        });
    </script>
@endpush
