@extends('layouts.web.app')
    <style>
        .pay-info h5 {
            color: rgb(0, 0, 0);
            font-size: 20px;
            font-weight: 600;
        }
        .pay-info p {
            color: rgb(0, 0, 0);
            font-size: 12px;
            font-weight: 500;
            line-height: 16px;
        }
    </style>
@section('content')
    @php
        $headers = ['File Name', 'Label', 'Date', 'Download'];


        $headersy = ['File Name', 'Label', 'Date', 'Download'];
        $entriesy = [
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
            ['1_IAS_Knowledgebase.docx', 'IAS KNOWLEDGE BASE', '04/09/2024', 'Lorem Ipsum Dummy'],
        ];

    @endphp
    <section>
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head :assignment="$assignment->id" />
                <div class="view-wrapper">
                    <div class="row boxes-rows">
                        <div class="col-lg-4">
                            <div class="payment-info">
                                <div class="info-head">
                                    <h3>Claim Info</h3>
                                </div>
                                <div class="info-desc d-flex">
                                    <div>
                                        <ul class="head-ul">
                                            <li>Company: </li>
                                            <li>Company #:</li>
                                            <li> DL Number:</li>
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
                                <div class="info-head">
                                    <h3>Take Action</h3>
                                </div>
                                <div class="info-desc text-center">
                                    <p class="mod-btn">You must ACCEPT or REJECT the claim to proceed</p>
                                    <div class="d-flex mb-3 gap-5">
                                        <p class="claim-para" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-check"></i> Accept Claim</p>
                                        <p class="claim-para"><i class="fa-solid fa-minus"></i> <a
                                                href="{{ route('reject', $assignment->id) }}"
                                                class="text-decoration-none">Reject Claim</a>
                                        </p>
                                    </div>
                                    {{-- <div class="d-flex">
                                        <p class="claim-para"><i class="fa-solid fa-exclamation"></i> Turn On : Needs
                                            Attention</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="payment-info">
                                <div class="info-head">
                                    <h3>Payment Details</h3>
                                </div>
                                <div class="info-desc text-center">
                                    {{-- <button class="mod-btn" style="cursor: default;">Billing Change Request Pending</button> --}}
                                    <div class="table-responsive mb-2" style="max-height:150px;">
                                        <table class="table text-start">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Billing Type</th>
                                                    <th scope="col" >Miles</th>
                                                    <th scope="col" colspan="2">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($assignment->assignment_payments as $payment)
                                                <tr>
                                                    <th scope="row">{{ $payment->billing_type }}</th>
                                                    <td>{{ $payment->miles }}</td>
                                                    <td>${{ $payment->price }}</td>
                                                </tr>

                                                @empty

                                                <tr colspan="3">No Results found</tr>
                                                @endforelse
                                                {{-- <tr>
                                                    <th scope="row">Base Rate</th>
                                                    <td>+</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Base Rate</th>
                                                    <td>+</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Base Rate</th>
                                                    <td>+</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Base Rate</th>
                                                    <td>+</td>
                                                    <td>$0.00</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <h4>Billing Terms and Notes</h4> --}}
                                    <button class="pay-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">Request
                                        Pay Change</button>
                                </div>

                                <div class="pay-info px-4 mt-3">
                                    <h5>Pay Change Request Info</h5>
                                    <p>{{ $assignment->payment_info ?? 'No Request Has Been Sent Yet.' }}</p>
                                </div>
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
                                                    {{-- <a href=""
                                                        class="text-danger text-decoration-none"
                                                        style="margin-left: 12px; font-weight:700;">Change</a> --}}
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
                                                    {{ $log->is_accept == null || $log->is_accept == 1 ? 'Assigned' : '' }}
                                                    @if ($log->is_accept !== null && $log->is_accept != 1)
                                                        <button class="rejection-reason" style="background:none;border:none"
                                                            data-id="{{ $log->id }}"
                                                            data-rejection-reason="{{ $log->reason_rejection }}">Rejected <i
                                                                class="fa-solid fa-eye"></i></button>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="faqs">
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            Assignments
                                        </span>
                                        <div class="faq-btn-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </button>
                                    <div class="faq-body mb-0">
                                        <div class="view-tab-content">

                                            <div class="row" style="margin-bottom: 11px">
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <form action="" id="assignmentDetail">
                                                            @csrf
                                                            {{-- <div class="col-md-4">
                                                                <label for="" class="custom-label">Duplicated VIN
                                                                    #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control" placeholder="Select">
                                                            </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 11px">
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        {{-- <div class="col-md-4">
                                                                <label for="" class="custom-label">Duplicated Claim
                                                                    #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Insurance Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        {{-- <div class="col-md-4">
                                                                <label for="" class="custom-label">File #</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div> --}}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Company</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" value="{{ $assignment?->company }}"
                                                                name="company" id="company"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Adjuster</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="adjuster" id="adjuster"
                                                                value="{{ $assignment?->adjuster }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Deductible
                                                                Amount</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="deductible_amount"
                                                                id="deductibleAmount"
                                                                value="{{ $assignment?->deductible_amount }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Claim
                                                                For</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="claim_for" id="claimFor"
                                                                value="{{ $assignment?->claim_for }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Date First
                                                                Contacted</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="date_first_contacted"
                                                                id="DateFirstContacted"
                                                                value="{{ $assignment?->date_first_contacted }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Claim
                                                                Number</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="claim"
                                                                value="{{ $assignment?->claim }}" id="claim"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Adjuster
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="adjuster_phone"
                                                                id="adjusterPhone"
                                                                value="{{ $assignment?->adjuster_phone }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Date of
                                                                Loss</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="date_of_loss" id="dateOfLoss"
                                                                value="{{ $assignment?->date_of_loss }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Insured
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="insured_name" id="insuredName"
                                                                value="{{ $assignment?->insured_name }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Policy
                                                                Number</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="policy_number" id="policyNumber"
                                                                value="{{ $assignment?->policy_number }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Type of
                                                                Loss</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="loss_type" id="typeOfLoss"
                                                                value="{{ $assignment?->loss_type }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="assign-head">Owner Information</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Business
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="business_name" id="businessName"
                                                                value="{{ $assignment?->business_name }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Contact
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner" id="owner"
                                                                value="{{ $assignment?->owner }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">City</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_city" id="ownerCity"
                                                                value="{{ $assignment?->owner_city }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_state" id="ownerState"
                                                                value="{{ $assignment?->owner_state }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Client
                                                                Email</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_email"
                                                                value="{{ $assignment?->owner_email }}" id="ownerEmail"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Mobile
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_mobile_phone"
                                                                id=""
                                                                value="{{ $assignment?->owner_mobile_phone }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">First
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_first_name"
                                                                value="{{ $assignment?->owner_first_name }}"
                                                                id="ownerFirstName" class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Last
                                                                Name</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_last_name"
                                                                id="ownerLastName"
                                                                value="{{ $assignment?->owner_last_name }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Address</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_address" id="ownerAddress"
                                                                value="{{ $assignment?->owner_address }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_zip" id="ownerZip"
                                                                value="{{ $assignment?->owner_zip }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Home
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name=""
                                                                value="{{ $assignment?->owner_phone }}" id=""
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Work
                                                                Phone</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="owner_work_phone"
                                                                id="ownerWorkPhone"
                                                                value="{{ $assignment?->owner_work_phone }}"
                                                                class="custom-input form-control">
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
                                                            <input type="text" name="vehicle_location" id="vehiclelocation"
                                                                value="{{ $assignment?->vehicle_location }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Address</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="location_address"
                                                                id="locationAddress"
                                                                value="{{ $assignment?->location_address }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">City</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="location_city" id="locationCity"
                                                                value="{{ $assignment?->location_city }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        {{-- <div class="col-md-4">
                                                                <label for="" class="custom-label">Location
                                                                    Phone</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id="" value="{{ $assignment?->location_pho }}"
                                                                    class="custom-input form-control">
                                                            </div> --}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        {{-- <div class="col-md-4">
                                                                <label for="" class="custom-label">Location
                                                                    Name</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" value="{{ $assignment->vehicle_location }}" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div> --}}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">State</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="location_state"
                                                                id="locationState"
                                                                value="{{ $assignment?->location_state }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="location_zip" id="locationZip"
                                                                value="{{ $assignment?->location_zip }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="" class="custom-label">State</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" name="" id=""
                                                                    class="custom-input form-control">
                                                            </div>
                                                        </div> --}}
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
                                                            <input type="text" name="vehicle_year" id="vehicleYear"
                                                                value="{{ $assignment?->vehicle_year }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Make</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_make" id="vehicleMake"
                                                                value="{{ $assignment?->vehicle_make }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">VIN #</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_vin" id="vehicleVin"
                                                                value="{{ $assignment?->vehicle_vin }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">License
                                                                Plate</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_license_plate"
                                                                id=""
                                                                value="{{ $assignment?->vehicle_license_plate }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Mileage</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_mileage"
                                                                id="vehicleMileage"
                                                                value="{{ $assignment?->vehicle_mileage }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Model</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_model" id="vehicleModel"
                                                                value="{{ $assignment?->vehicle_model }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Color</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_color" id="vehicleColor"
                                                                value="{{ $assignment?->vehicle_color }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="" class="custom-label">Damage</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="vehicle_damage"
                                                                id="vehicleDamage"
                                                                value="{{ $assignment?->vehicle_damage }}"
                                                                class="custom-input form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <button class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            Guidelines

                                        </span>
                                        <div class="faq-btn-arrow">
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>
                                    </button>
                                    <div class="faq-body mb-0">
                                        <div class="view-tab-content">
                                            {!! $guideline->content !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="faq">
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            Clients Forms

                                        </span>
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
                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                File Name

                                                                <i class="fa-solid fa-arrow-down"></i>
                                                            </th>

                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                Label

                                                                <i class="fa-solid fa-arrow-down"></i>
                                                            </th>

                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                Date

                                                                <i class="fa-solid fa-arrow-down"></i>
                                                            </th>

                                                            <th scope="col"
                                                                style="background: #8e8e8e !important; color: white !important;">
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

                                                                <td>{{ str_replace('-', '/', explode(' ', $clientForm->updated_at)[0]) }}
                                                                </td>

                                                                <td>
                                                                    <a href="{{ route('client-forms.download', $clientForm->id) }}"
                                                                        download class="icon" title="Download">
                                                                        <i class="fa fa-download"></i>
                                                                    </a>
                                                                </td>

                                                            </tr>
                                                        @empty
                                                            {{-- <div>No Files Found</div> --}}
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
                                    <button type="button" class="faq-btn d-flex"><span class="flex-grow-1">
                                            General Forms

                                        </span>
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
                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                File Name

                                                                <i class="fa-solid fa-arrow-down"></i>
                                                            </th>

                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                Label

                                                                <i class="fa-solid fa-arrow-down"></i>
                                                            </th>

                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
                                                                Date

                                                                <i class="fa-solid fa-arrow-down"></i>
                                                            </th>

                                                            <th scope="col"
                                                                style="background: #8e8e8e !important;
                                        color: white !important;">
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

                                                                <td>{{ str_replace('-', '/', explode(' ', $generalForm->updated_at)[0]) }}
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('general-forms.download', $generalForm->id) }}">
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
                                            {{-- <x-entries-table2 :entriesy="$entriesy" :headersy="$headersy" />
                                            <x-pagination /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade modal-bg-custom " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <p class="claim-para">Accept the Claim</p>
                    <p class="sub-head">Based on agreed rates your compensation for this claim would be</p>
                </div>
                <div class="modal-header info-desc p-0">
                    <table class="table text-start">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Miles</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Base Fee</td>
                                <td></td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>MI Roundtrip</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Free Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Paid Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Total Appraisal Payment</td>
                                <td>00.00</td>
                                <td>$ 0.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="sub-head">Based on agreed rates your compensation for this claim would be</p>
                </div>
                <div class="modal-body">
                    <div>
                        <p class="sub-head m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary" data-bs-dismiss="modal">Accept
                        Claim</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-bg-custom " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <p class="claim-para">Request Pay Change</p>
                    <p class="sub-head">Based on agreed rates your compensation for this claim would be</p>
                </div>
                <div class="modal-header info-desc p-0">
                    <table class="table text-start">
                        <thead>
                            <tr>
                                <th>Billing Type</th>
                                <th>Miles</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($assignment->assignment_payments as $payment)
                            <tr>
                                <td>{{ $payment->billing_type }}</td>
                                <td>{{ $payment->miles }}</td>
                                <td>${{ $payment->price }}</td>
                            </tr>
                            @empty
                            <tr colspan="3">No Results Found</tr>
                            @endforelse
                            {{-- <tr>
                                <td>MI Roundtrip</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Free Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Paid Miles</td>
                                <td>0000</td>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <td>Total Appraisal Payment</td>
                                <td>00.00</td>
                                <td>$ 0.00</td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <p class="sub-head">Mileage Request Info:</p>
                </div>
                <div class="modal-body" style="padding:0px;">
                    <div>
                        <textarea name="" id="payment_info" cols="0" rows="7" style="width:100%; height:100%" required>{{ $assignment?->payment_info }}</textarea>

                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary " id="paymentRequest" data-bs-dismiss="modal">Submit
                        Request</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

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
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="sub-head">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3">
                    <button type="button" class="pay-btn text-center bg-primary"
                        data-bs-dismiss="modal">Accepted</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Rejected</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".faq-btn").click(function() {
            $(this).parents(".faq").hasClass("active") ?
                ($(this).parents(".faq").removeClass("active"), $(".faq-body").slideUp()) :
                ($(".faq-body").slideUp(),
                    $(".faq").removeClass("active"),
                    $(this).parents(".faq").addClass("active"),
                    $(this).parents(".faq").find(".faq-body").slideDown());
        });
    });
</script>
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#paymentRequest').on('click', function () {

                $('#payment_info').val()
                $.ajax({
                    type:'POST',
                    url:'{{ route('payment.info',$assignment->id) }}',
                    data:{
                        _token: '{{ csrf_token() }}',
                        paymentInfo: $('#payment_info').val()
                    },
                    success:function (response){
                        // console.log(response)
                            swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Payment request send Successfully.',
                                showConfirmButton: false,
                                timer: 1500,
                            }).then(() => {
                                window.location.reload();
                            });
                    }
                })
            })
        })
    </script>
    <script>
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

                // Function to update pagination displayp
                function updatePagination() {
                    // Hide all rows
                    $rows.hide();

                    // Calculate start and end indices
                    var start = (currentPage - 1) * rowsPerPage;
                    var end = start + rowsPerPage;

                    // Show rows for current page
                    $rows.slice(start, end).show();

                    // Update active page
                    $pagination.find('.page').removeClass('active-page');
                    $pagination.find('.page').eq(currentPage - 1).addClass('active-page');

                    // Enable/disable prev/next buttons
                    $pagination.find('.prev').prop('disabled', currentPage === 1);
                    $pagination.find('.next').prop('disabled', currentPage === totalPages);
                }

                // Generate pagination buttons dynamically
                function generatePaginationButtons() {
                    $pagination.find('.page').remove(); // Clear existing page buttons
                    for (var i = 1; i <= totalPages; i++) {
                        var $pageButton = $('<button class="page">' + i + '</button>');
                        if (i === currentPage) {
                            $pageButton.addClass('active-page');
                        }
                        $pageButton.insertBefore($pagination.find('.next'));
                    }
                }

                // Initial setup
                if (totalRows > 0) {
                    // Remove any existing no-results message
                    $table.find('.no-results').remove();
                    // Show pagination
                    $pagination.show();
                    generatePaginationButtons();
                    updatePagination();
                } else {
                    // If no rows, append no-results message and hide pagination
                    $table.find('.no-results').remove(); // Clear any existing message
                    $table.find('tbody').append(noResultsMessage);
                    $pagination.hide();
                }

                // Event handlers
                // Click on page number
                $pagination.on('click', '.page', function() {
                    currentPage = parseInt($(this).text());
                    updatePagination();
                });

                // Previous button
                $pagination.on('click', '.prev', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                    }
                });

                // Next button
                $pagination.on('click', '.next', function() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                    }
                });
            }

            // Iterate over all tables and their corresponding pagination controls
            $('.entries-table').each(function(index) {
                var $table = $(this);
                // Find the corresponding pagination (assumes pagination follows the table in DOM)
                var $pagination = $('.pagination.assign-pagination').eq(index);
                if ($table.length && $pagination.length) {
                    initPagination($table, $pagination);
                }
            });
        });

        $(document).ready(function() {
            $('#assignmentDetail').on("submit", function(e) {
                e.preventDefault()

                const formElement = document.querySelector('#assignmentDetail');
                var form = new FormData(formElement);
                // form.append('_token', "{{ csrf_token() }}");
                console.log(form)

                $.ajax({
                    type: 'POST',
                    url: "{{ route('assign.detail', $id) }}",
                    data: form,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response)

                        swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Form Updated Successfully.',
                            showConfirmButton: false,
                            timer: 1500,
                        })
                    }
                })
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            // View Rejection Reason.
            $('.rejection-reason').on('click', function() {
                var rejectionReason = $(this).attr('data-rejection-reason');
                console.log(rejectionReason)
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
    </script>
@endpush


{{-- <script>
    function toggleDropdown() {
        document.getElementById("dropdown").classList.toggle("show");
    }

    function selectTab(element) {
        document.getElementById("selectedTab").innerText = element.innerText;
        document.getElementById("dropdown").classList.remove("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-toggle')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.remove('show');
            }
        }
    }
</script> --}}
<style>
    .timeline-table,
    .timeline-table td,
    .timeline-table tr,
    .timeline-table th {
        border: none !important;
    }
</style>
