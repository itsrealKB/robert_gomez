@extends('layouts.admin.app')
@section('content')
    {{-- <style>
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0px 1000px white inset !important;
            -webkit-text-fill-color: black !important;
        }
    </style> --}}
    <style>
        .docs-wrapper {
            background-color: var(--white);
            padding: 0 15px;
            border-radius: 0px 0px 32px 32px;
        }

        .docs-wrapper .assign-table th {
            background-color: #8e8e8e;
            opacity: 1;
            color: var(--white);
            position: relative;
        }

        .docs-wrapper .assign-table th i {
            position: absolute;
            right: 14px;
            top: 12px;
        }

        .docs-wrapper .assign-pagination {
            padding-bottom: 40px;
        }

        .docs-wrapper .search-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            padding-top: 30px;
            flex-wrap: wrap;
            gap: 25px;
        }

        .docs-wrapper .search-wrap .search-left {
            display: flex;
            gap: 25px;
        }

        .docs-wrapper .search-wrap .search-left button {
            width: 170px;
            height: 50px;
            color: var(--white);
            border: none;
            border-radius: 26px;
            font-size: 17px;
        }

        .docs-wrapper .search-wrap .search-left button:nth-child(1) {
            background-color: #319ab6;
        }

        .docs-wrapper .search-wrap .search-left button:nth-child(2) {
            /* background-color: #0157c5; */
            background-color: #c53c36;
        }

        .search-right .head-search-icon {
            color: #cecece;
            transform: translateY(-40%);
        }

        .head-search-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-40%);
            right: 18px;
            font-size: 19px;
            color: #575757;
            background: transparent;
            border: none;
        }

        .head-search-input {
            padding: 13px 21px;
            font-size: 18px;
            border-radius: 5px;
            outline: none;
            color: #575757;
            background-color: transparent;
            width: 360px;
            font-weight: 500;
            font-family: "Popins", sans-serif;
            border: 2px solid #00000033;
        }
        .head-search-input::placeholder {
            color: #575757;
            font-size: 18px;
        }

        .search-right .head-search-input {
            border-color: #cecece;
            background-color: #f1f2f2;
            color: #000;
        }

        .table-row-2 td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        /* .table-row-2 td .dropdown-menu.show {
            color: #000 !important;
            background-color:rgba(0, 0, 0, 0.05) !important;
        } */

    </style>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <div class="view-wrapper mt-0">
                        <div class="inner-head-wrap2 mb-5">
                            <ul class="inner-head3">
                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">View</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Print</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Edit</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Cancel</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Dispatch</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Messages</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Billing</li>
                                </a>

                                <a href="{{ route('admin.assign.files', $assignment->id) }}" class="link text-decoration-none">
                                    <li class="inner-list inner-list-1">Files</li>
                                </a>

                                <a href="#" class="link text-decoration-none">
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
                                </button>
                            </ul>
                        </div>

                        {{-- <div class="row boxes-rows">
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

                                    <div class="info-head">
                                        <h3>Take Action</h3>
                                    </div>

                                    <div class="info-desc text-center">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="payment-info">
                                    <div class="info-head">
                                        <h3>Payment Details</h3>
                                    </div>

                                    <div class="info-desc text-center">
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
                                                        <td colspan="4">No Results Found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default" id="modal-xl-btn" data-toggle="modal"
                                            data-target="#modal-xl">
                                            Add Payment Details
                                        </button>
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
                                                            <button class="rejection-reason"
                                                                style="background:none;border:none"
                                                                data-id="{{ $log->id }}"
                                                                data-rejection-reason="{{ $log->reason_rejection }}">Rejected
                                                                <i class="fa-solid fa-eye"></i></button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        </table>
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
                        </div> --}}
                        <div class="docs-wrapper mb-5">
                            <div class="search-wrap">
                                <div class="search-left">
                                    {{-- <button>Upload EMS</button> --}}
                                    {{-- <button data-bs-toggle="modal" data-bs-target="#exampleModal3">+ Add Files</button> --}}
                                    <button id="downloadAll" >Download All</button>
                                    <button id="deleteSelected">Delete Selected</button>
                                </div>
                                <div class="search-right">
                                    <div class=" position-relative">
                                        <button class="head-search-icon" type="submit"><i class="fa-solid fa-magnifying-glass "></i></button>
                                        <input type="text" class="head-search-input" placeholder="Search Files" name="" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="assign-table-2-wrap">
                                <table class="assign-table assign-table-2 assign-tab table table-striped table-sec">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" id="masterCheckbox"></i></th>
                                            <th scope="col">Date & Time <i class="fa-solid fa-arrow-down"></i></th>
                                            <th scope="col">Type <i class="fa-solid fa-arrow-down"></i></th>
                                            <th scope="col">File Name <i class="fa-solid fa-arrow-down"></i></th>
                                            {{-- <th scope="col">Author <i class="fa-solid fa-arrow-down"></i></th> --}}
                                            <th scope="col">Size <i class="fa-solid fa-arrow-down"></i></th>
                                            <th scope="col">Status </th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-row-2">
                                        @forelse ($assignment->docs()->get() as $document)
                                            <tr class="">
                                                @php
                                                    $filePath = public_path('assignment-docs/' . $document->file);
                                                    $fileSizeInBytes = file_exists($filePath) ? filesize($filePath) : 0;

                                                    $kb_size = $fileSizeInBytes / 1024;

                                                    if ($kb_size >= 1024) {
                                                        $formattedSize = round($kb_size / 1024, 2) . ' MB';
                                                    } else {
                                                        $formattedSize = round($kb_size, 2) . ' KB';
                                                    }
                                                @endphp

                                                <td scope="row" style="align-content: center;"><input type="checkbox"
                                                        class="slaveCheckbox" data-id="{{ $document->id }}"></td>
                                                <td>{{ $document->created_at->setTimezone('America/Chicago')->format('m/d/Y h:i a T') }}
                                                </td>
                                                <td><img class="file-icon" src="" data-type="{{ $document->file_type }}"
                                                        data-file="{{ $document->file }}" alt="file-type"></td>
                                                <td>{{ $document->file }}</td>
                                                {{-- <td>Lorem Ipsum Dummyddasfsd</td> --}}
                                                <td>{{-- 5.80 KB --}} {{ $formattedSize }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" style="">
                                                            <li class="drp-list"><button
                                                                    class="dropdown-item  download-file"
                                                                    file-name="Table-image.png"><a
                                                                        href="{{ asset('assignment-docs/' . $document->file) }}"
                                                                        download class="drp-list"
                                                                        style="text-decoration: none; color:#000;width:100%">
                                                                        Download </a></button>
                                                                        <li><button class="dropdown-item edit-btn" data-id="{{ $document->id }}">Edit</button></li>
                                                            </li>
                                                            <li class="drp-list"><button class="dropdown-item  delete-btn"
                                                                    data-id="{{ $document->id }}">Delete</button></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse

                                    </tbody>
                                </table>

                                {{-- Modal Dialog --}}
                                <div class="modal fade modal-bg-custom modal-docs-custom" id="exampleModal3" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header info-desc p-0"></div>
                                            <div class="modal-body modal-border">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="drop-zone" id="drop-zone">
                                                            <p>Drag & drop Image here or click to upload</p>
                                                            <div class="preview-multiple"
                                                                style="display: flex; justify-content: center;"></div>
                                                            <input type="file" hidden id="file-inp"
                                                                class="custom-input form-control file-input" />
                                                        </div>
                                                        <div class="text-center mt-3">
                                                            <button id="cropMainBtn" class="btn btn-primary me-2">Crop</button>
                                                            <button id="addTextMainBtn" class="btn btn-success me-2">Add
                                                                Text</button>
                                                            <button id="drawMainBtn" class="btn btn-info">Draw</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center info-desc gap-3">
                                                <button type="button" class="pay-btn text-center bg-primary save-upload">Save &
                                                    Add</button>
                                                <button type="button" class="pay-btn text-center dismiss-modal"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-pagination />
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
                                                                        value="{{ $assignment->company }}" id=""
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Adjuster</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name=""
                                                                        value="{{ $assignmentDetail?->adjuster }}"
                                                                        id="" class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Deductible Amount</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->deductible_amount }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Claim For</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->claim_for }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Date First Contacted</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->date_first_contacted }}"
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
                                                                        value="{{ $assignment->claim }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Adjuster Phone</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->adjuster_phone }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Date of Loss</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->date_of_loss }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Insured Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->insured_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Policy Number</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->policy_number }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Type of Loss</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment->loss_type }}"
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
                                                                        value="{{ $assignmentDetail?->business_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Contact Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignment->owner }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">City</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->owner_city }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">State</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->owner_state }}"
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
                                                                        value="{{ $assignmentDetail?->owner_mobile_phone }}"
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
                                                                        value="{{ $assignmentDetail?->owner_first_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Last Name</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->owner_last_name }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Address</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->owner_address }}"
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
                                                                        value="{{ $assignment->owner_phone }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Work Phone</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->owner_work_phone }}"
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
                                                                        value="{{ $assignmentDetail?->location_address }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">City</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->location_city }}"
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
                                                                        value="{{ $assignmentDetail?->location_state }}"
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
                                                                        value="{{ $assignmentDetail?->vehicle_year }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Make</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->vehicle_make }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">VIN #</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->vehicle_vin }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">License Plate</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->vehicle_license_plate }}"
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
                                                                        value="{{ $assignmentDetail?->vehicle_mileage }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Model</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->vehicle_model }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Color</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->vehicle_color }}"
                                                                        class="custom-input form-control"></input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="" class="custom-label">Damage</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <input type="text" name="" id=""
                                                                        value="{{ $assignmentDetail?->vehicle_damage }}"
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

    {{-- <style>
        .timeline-table,
        .timeline-table td,
        .timeline-table tr,
        .timeline-table th {
            border: none !important;
        }
    </style> --}}

    <!-- Add Payment Modal -->
    {{-- <div class="modal fade" id="modal-xl" style="display: none; padding-right: 15px;" aria-modal="true" role="dialog">
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
    </div> --}}

    <!-- Edit Payment Modal -->
    {{-- <div class="modal fade" id="edit-payment-modal" style="display: none; padding-right: 15px;" aria-modal="true" role="dialog">
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
    </div> --}}

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     $('.add-group-btn').on('click', function() {
        //         var $originalGroup = $('.payment-form-group').first();
        //         var $clonedGroup = $originalGroup.clone(true, true);
        //         $clonedGroup.find('input').val('');
        //         $clonedGroup.find('.remove-group-btn').show();
        //         $(this).before($clonedGroup);
        //     });

        //     $('.modal-body').on('click', '.remove-group-btn', function() {
        //         var $groupToRemove = $(this).closest('.payment-form-group');
        //         if ($('.payment-form-group').length > 1) {
        //             $groupToRemove.remove();
        //         } else {
        //             console.log("Cannot remove the last form group.");
        //         }
        //     });

        //     function clearValidationErrors() {
        //         $('.text-danger').remove();
        //         $('.form-control').removeClass('is-invalid');
        //     }

        //     function displayValidationErrors(errors) {
        //         $.each(errors, function(key, messages) {
        //             const parts = key.split('.');
        //             const field = parts[0];
        //             const index = parts[1];

        //             if (index !== undefined && !isNaN(parseInt(index))) {
        //                 const $formGroup = $('.payment-form-group').eq(index);
        //                 const $inputElement = $formGroup.find(`input[name="${field}[]"]`);
        //                 if ($inputElement.length) {
        //                     $inputElement.addClass('is-invalid');
        //                     $inputElement.after(`<p class="text-danger">${messages[0]}</p>`);
        //                 }
        //             } else {
        //                 console.warn(`Error for static field '${key}' was not handled automatically.`);
        //             }
        //         });
        //     }

        //     $('#paymentForm').on("submit", function(e) {
        //         e.preventDefault();
        //         clearValidationErrors();
        //         var formElement = document.querySelector('#paymentForm');
        //         var form = new FormData(formElement);
        //         form.append('assignment_id', {{ $assignment->id }});

        //         $.ajax({
        //             type: 'POST',
        //             url: '{{ route('admin.assign.payment.store') }}',
        //             data: form,
        //             processData: false,
        //             contentType: false,
        //             success: function(response) {
        //                 console.log(response);
        //                 swal.fire({
        //                     icon: 'success',
        //                     title: 'Success',
        //                     text: 'Payment Details updated Successfully.',
        //                     showConfirmButton: false,
        //                     timer: 1500,
        //                 }).then(() => {
        //                     window.location.reload();
        //                 });
        //             },
        //             error: function(xhr, status, error) {
        //                 if (xhr.status === 422) {
        //                     displayValidationErrors(xhr.responseJSON.errors);
        //                 } else {
        //                     console.error("AJAX Error:", status, error);
        //                 }
        //             }
        //         });
        //     });

        //     $('.edit-payment').on("click", function() {
        //         var paymentId = $(this).attr('data-id');
        //         $.ajax({
        //             type: 'GET',
        //             url: '{{ route('admin.assign.payment.edit', ':id') }}'.replace(':id', paymentId),
        //             success: function(response) {
        //                 console.log(response);
        //                 $('#edit-payment-modal').modal('show');
        //                 $('#editPaymentId').val(response.assignment.id);
        //                 $('#editBillingType').val(response.assignment.billing_type);
        //                 $('#editMiles').val(response.assignment.miles);
        //                 $('#editPrice').val(response.assignment.price);
        //             },
        //             error: function(xhr, status, error) {
        //                 console.error("AJAX Error:", status, error);
        //                 Swal.fire({
        //                     icon: 'error',
        //                     title: 'Error',
        //                     text: 'Failed to load payment details. Please try again.',
        //                     confirmButtonText: 'OK'
        //                 });
        //             }
        //         });
        //     });

        //       $('#editPaymentForm').on("submit", function(e) {
        //         e.preventDefault();
        //         clearValidationErrors();
        //         var formElement = document.querySelector('#editPaymentForm');
        //         var form = new FormData(formElement);
        //         form.append('assignment_id', {{ $assignment->id }});

        //         var editPaymentId = $('#editPaymentId').val()

        //         $.ajax({
        //             type: 'POST',
        //             url: '{{ route('admin.assign.payment.update', ':id') }}'.replace(':id', editPaymentId),
        //             data: form,
        //             processData: false,
        //             contentType: false,
        //             success: function(response) {
        //                 console.log(response);
        //                 swal.fire({
        //                     icon: 'success',
        //                     title: 'Success',
        //                     text: 'Payment Details updated Successfully.',
        //                     showConfirmButton: false,
        //                     timer: 1500,
        //                 }).then(() => {
        //                     window.location.reload();
        //                 });
        //             },
        //             error: function(xhr, status, error) {
        //                 if (xhr.status === 422) {
        //                     $.each(xhr.responseJSON.errors, function(key, messages) {
        //                         const $inputElement = $(`#editPaymentForm input[name="${key}"]`);
        //                         if ($inputElement.length) {
        //                             $inputElement.addClass('is-invalid');
        //                             $inputElement.after(`<p class="text-danger">${messages[0]}</p>`);
        //                         }
        //                     });
        //                 } else {
        //                     console.error("AJAX Error:", status, error);
        //                     Swal.fire({
        //                         icon: 'error',
        //                         title: 'Error',
        //                         text: 'Failed to update payment details. Please try again.',
        //                         confirmButtonText: 'OK'
        //                     });
        //                 }
        //             }
        //         });
        //     });



        //     $('.edit-close').on("click",function (){
        //         $('#edit-payment-modal').modal('hide');
        //     })


        //     $(document).on("click", "#modal-xl-btn", function() {
        //         $("#modal-xl").addClass("show");
        //         $("#modal-xl").prop("display", "block");
        //     });


        //     $('.delete-payment').on('click', function() {
        //         var paymentId = $(this).data('id');

        //         Swal.fire({
        //             title: 'Are you sure?',
        //             text: "You want to delete this payment?",
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonColor: '#3085d6',
        //             cancelButtonColor: '#d33',
        //             confirmButtonText: 'Yes, delete it!'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 $.ajax({
        //                     type: 'POST',
        //                     url: '{{ route('admin.assign.payment.destroy',) }}',
        //                     data: {
        //                         _token: '{{ csrf_token() }}',
        //                         id:paymentId
        //                     },
        //                     success: function(response) {
        //                         Swal.fire({
        //                             icon: 'success',
        //                             title: 'Deleted!',
        //                             text: 'Payment has been deleted.',
        //                             showConfirmButton: false,
        //                             timer: 1500
        //                         }).then(() => {
        //                             window.location.reload();
        //                         });
        //                     },
        //                     error: function(xhr, status, error) {
        //                         console.error("AJAX Error:", status, error);
        //                         Swal.fire({
        //                             icon: 'error',
        //                             title: 'Error',
        //                             text: 'Failed to delete payment. Please try again.',
        //                             confirmButtonText: 'OK'
        //                         });
        //                     }
        //                 });
        //             }
        //         });
        //     });
        // });



        // $(document).ready(function() {
        //     $('.rejection-reason').on('click', function() {
        //         var rejectionReason = $(this).attr('data-rejection-reason');
        //         console.log(rejectionReason);
        //         Swal.fire({
        //             title: 'Rejection Reason',
        //             text: rejectionReason,
        //             icon: 'info',
        //             confirmButtonText: 'OK'
        //         });
        //     });
        // });

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.0/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.0/fabric.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.file-icon').each(function() {
                    var fileType = $(this).data('type').toLowerCase();
                    var iconSrc = '';

                    if (fileType.includes('word') || fileType === 'doc' || fileType === 'docx') {
                        iconSrc = '{{ asset('assets/web/images/word-2.webp') }}';
                    } else if (fileType === 'pdf') {
                        iconSrc = '{{ asset('assets/web/images/pdf-img.jpg') }}';
                    } else if (fileType === 'jpg' || fileType === 'jpeg' || fileType === 'png' || fileType ===
                        'gif' || fileType === 'jfif') {
                        iconSrc = '{{ asset('assignment-docs') }}' + "/" + $(this).data('file');
                    } else {
                        iconSrc = '{{ asset('assets/web/images/no_image.png') }}';
                    }
                    $(this).attr('src', iconSrc);
                });

                $('.delete-btn').on("click", function() {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You want to delete file",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var id = $(this).attr("data-id");

                            $.LoadingOverlay("show");
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('docs.destroy') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    id: id,
                                },
                                success: function(response) {
                                    console.log(response);

                                    $.LoadingOverlay("hide");

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: 'File Deleted Successfully',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                },
                                error: function(xhr, status, error) {
                                    $.LoadingOverlay("hide");

                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'An error occurred, please try again.',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            })
                        }
                    })
                })
            });
        </script>

        <script>
            $(document).ready(function() {
                function initTableFeatures($table, $pagination) {
                    var rowsPerPage = 10;
                    var $rows = $table.find('tbody tr');
                    var totalRows = $rows.length;
                    var totalPages = Math.ceil(totalRows / rowsPerPage);
                    var currentPage = 1;
                    var $searchInput = $('.head-search-input');
                    var noResultsMessage =
                        '<tr class="no-results"><td colspan="7" style="text-align: center;">No results found</td></tr>';

                    function updateTable() {
                        var searchValue = $searchInput.val().toLowerCase().trim();
                        $rows.hide();
                        $table.find('.no-results').remove();

                        var filteredRows = $rows.filter(function() {
                            var $row = $(this);
                            for (var i = 0; i < $row.find('td').length; i++) {
                                var cellText = $row.find('td').eq(i).text().toLowerCase();
                                if (cellText.includes(searchValue)) {
                                    return true;
                                }
                            }
                            return false;
                        });

                        totalRows = filteredRows.length;
                        totalPages = Math.ceil(totalRows / rowsPerPage);

                        if (totalRows > 0) {
                            $pagination.show();
                            var start = (currentPage - 1) * rowsPerPage;
                            var end = start + rowsPerPage;
                            filteredRows.slice(start, end).show();
                        } else {
                            $table.find('tbody').append(noResultsMessage);
                            $pagination.hide();
                        }

                        updatePagination();
                    }

                    function updatePagination() {
                        $pagination.find('.page').remove();
                        for (var i = 1; i <= totalPages; i++) {
                            var $pageButton = $('<button class="page">' + i + '</button>');
                            if (i === currentPage) {
                                $pageButton.addClass('active-page');
                            }
                            $pageButton.insertBefore($pagination.find('.next'));
                        }

                        $pagination.find('.prev').prop('disabled', currentPage === 1);
                        $pagination.find('.next').prop('disabled', currentPage === totalPages);
                    }

                    if (totalRows > 0) {
                        $pagination.show();
                        updateTable();
                    } else {
                        $table.find('tbody').append(noResultsMessage);
                        $pagination.hide();
                    }

                    $pagination.on('click', '.page', function() {
                        currentPage = parseInt($(this).text());
                        updateTable();
                    });

                    $pagination.on('click', '.prev', function() {
                        if (currentPage > 1) {
                            currentPage--;
                            updateTable();
                        }
                    });

                    $pagination.on('click', '.next', function() {
                        if (currentPage < totalPages) {
                            currentPage++;
                            updateTable();
                        }
                    });

                    $searchInput.on('input', function() {
                        currentPage = 1;
                        updateTable();
                    });
                }

                var $table = $('.assign-table-2');
                var $pagination = $('.pagination');
                if ($table.length && $pagination.length) {
                    initTableFeatures($table, $pagination);
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#masterCheckbox').on('change', function() {
                    $('.slaveCheckbox').prop('checked', this.checked);
                });

                $(document).on('change', '.slaveCheckbox', function() {
                    var totalCheckboxes = $('.slaveCheckbox').length;
                    var checkedCheckboxes = $('.slaveCheckbox:checked').length;
                    $('#masterCheckbox').prop('checked', totalCheckboxes === checkedCheckboxes &&
                        totalCheckboxes > 0);
                });

                $('#deleteSelected').on('click', function() {
                    var selectedIds = [];
                    $('.slaveCheckbox:checked').each(function() {
                        selectedIds.push($(this).data('id'));
                    });

                    if (selectedIds.length === 0) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'No Selection',
                            text: 'Please select at least one file to delete.',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }
                    console.log(selectedIds)
                    Swal.fire({
                        title: 'Are you sure?',
                        text: `You want to delete ${selectedIds.length} selected file(s)?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete them!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.LoadingOverlay("show");
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('docs.destroy') }}',
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    ids: selectedIds
                                },
                                success: function(response) {
                                    console.log(response);
                                    $.LoadingOverlay("hide");
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: 'Selected files deleted successfully!',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                },
                                error: function(xhr, status, error) {
                                    $.LoadingOverlay("hide");
                                    Swal.fire({
                                        title: 'Error!',
                                        text: xhr.responseJSON?.message ||
                                            'An error occurred while deleting files. Please try again.',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            });
                        }
                    });
                });
            });

            $(document).ready(function() {
                const downloadRoute = "{{ route('download.all.zip', $assignment->id) }}";

                $('#downloadAll').on('click', function() {
                    // Check if there are any documents in the table
                    if ($('.table-row-2 tr').length === 0 || $('.table-row-2').find('.no-results').length > 0) {
                        Swal.fire({
                            icon: 'error',
                            title: 'No Documents Available',
                            text: 'There are no documents available to download.',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    Swal.fire({
                        title: 'Download Confirmation',
                        text: "Are you sure you want to download all assignment documents as a zip file?",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, Download!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If the user clicks "Yes, Download!", redirect to the Laravel route
                            window.location.href = downloadRoute;

                            // Optional: Show a "download started" message immediately
                            Swal.fire({
                                title: 'Download Started!',
                                text: 'Your zip file is being prepared and will start downloading shortly.',
                                icon: 'success',
                                timer: 3000,
                                showConfirmButton: false
                            });
                        }
                    });
                });
            });

        $(document).ready(function() {
            const btnSave = document.querySelector(".save-upload");
            const tableBody = document.querySelector(".table-row-2");
            const dismissBtn = document.querySelector(".dismiss-modal");
            const fileInput = document.querySelector(".file-input");
            const dropZone = document.getElementById("drop-zone");
            const previewContainer = document.querySelector(".preview-multiple");
            const cropMainBtn = document.getElementById("cropMainBtn");
            const addTextMainBtn = document.getElementById("addTextMainBtn");
            const drawMainBtn = document.getElementById("drawMainBtn");

            let selectedFile = null;
            let currentImageSrc = null;
            let editingRow = null;
            let editingDocumentId = null;

            const exampleModal = document.getElementById("exampleModal3");
            exampleModal.addEventListener("show.bs.modal", () => {
                fileInput.value = "";
                selectedFile = null;
                currentImageSrc = null;
                editingRow = null;
                editingDocumentId = null;
                previewContainer.innerHTML = "";
            });

            dropZone.addEventListener("click", () => fileInput.click());
            dropZone.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZone.classList.add("dragover");
            });
            dropZone.addEventListener("dragleave", () => dropZone.classList.remove("dragover"));
            dropZone.addEventListener("drop", (e) => {
                e.preventDefault();
                dropZone.classList.remove("dragover");
                handleFile(e.dataTransfer.files[0]);
            });
            fileInput.addEventListener("change", (e) => handleFile(e.target.files[0]));

            function handleFile(file) {
                if (!file) return;
                const ext = file.name.split(".").pop().toLowerCase();
                if (!["jpg", "jpeg", "png", "webp", "gif"].includes(ext)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid File Type',
                        text: 'Only image files are allowed!',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                const reader = new FileReader();
                reader.onload = (e) => {
                    currentImageSrc = e.target.result;
                    selectedFile = file;
                    renderPreview();
                };
                reader.readAsDataURL(file);
            }

            function renderPreview() {
                previewContainer.innerHTML = `
                    <div class="preview-item text-center">
                        <img src="${currentImageSrc}" style="width:120px;border-radius:5px;display:block;margin:auto;">
                    </div>
                `;
            }

            // Function to convert server URL to data URL
            async function convertToDataURL(url) {
                try {
                    const response = await fetch(url, { method: 'GET', mode: 'cors' });
                    if (!response.ok) throw new Error('Failed to fetch image');
                    const blob = await response.blob();
                    return new Promise((resolve, reject) => {
                        const reader = new FileReader();
                        reader.onload = () => resolve(reader.result);
                        reader.onerror = () => reject(new Error('Failed to convert to data URL'));
                        reader.readAsDataURL(blob);
                    });
                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to load image for editing. Please try again.',
                        confirmButtonText: 'OK'
                    });
                    return null;
                }
            }

            cropMainBtn.addEventListener("click", () => openCropModal());

            function openCropModal() {
                if (!currentImageSrc) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Image',
                        text: 'Please upload or select an image first!',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                const modal = document.createElement("div");
                modal.classList.add("crop-modal");
                modal.innerHTML = `
                    <div class="crop-wrapper" style="position:fixed;top:0;left:0;width:100%;height:100%;
                    background:rgba(0,0,0,0.8);display:flex;align-items:center;justify-content:center;z-index:9999;">
                        <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;">
                            <img id="crop-image" src="${currentImageSrc}" style="max-width:400px;max-height:400px;">
                            <br>
                            <button id="cropSave" class="btn btn-primary mt-2">Save</button>
                            <button id="cropCancel" class="btn btn-secondary mt-2">Cancel</button>
                        </div>
                    </div>
                `;
                document.body.appendChild(modal);

                const image = modal.querySelector("#crop-image");
                const cropper = new Cropper(image, { aspectRatio: NaN });

                modal.querySelector("#cropSave").addEventListener("click", () => {
                    const canvas = cropper.getCroppedCanvas();
                    currentImageSrc = canvas.toDataURL("image/png");
                    document.body.removeChild(modal);
                    if (editingRow) openEditModal();
                    else {
                        renderPreview();
                        exampleModal.style.display = "block";
                    }
                });

                modal.querySelector("#cropCancel").addEventListener("click", () => {
                    document.body.removeChild(modal);
                    if (editingRow) openEditModal();
                    else exampleModal.style.display = "block";
                });
            }

            addTextMainBtn.addEventListener("click", () => openTextModal());

            function openTextModal() {
                if (!currentImageSrc) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Image',
                        text: 'Please upload or select an image first!',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                const mainModal = document.getElementById("exampleModal3");
                if (!editingRow) mainModal.style.display = "none";

                const modal = document.createElement("div");
                modal.classList.add("text-modal");
                modal.innerHTML = `
                    <div style="position:fixed;top:0;left:0;width:100%;height:100%;
                    background:rgba(0,0,0,0.8);display:flex;align-items:center;
                    justify-content:center;z-index:9999;">
                        <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;max-width:500px;">
                            <canvas id="textCanvas" width="400" height="400" style="border:1px solid #ccc;cursor:move;"></canvas><br>
                            <input type="text" id="textInput" placeholder="Enter text" class="form-control mt-2">
                            <div class="d-flex gap-2 mt-2">
                                <input type="color" id="textColor" value="#000000" class="form-control" style="height: 38px;">
                                <input type="number" id="textSize" value="24" min="10" max="100" class="form-control">
                            </div>
                            <button id="textAdd" class="btn btn-primary mt-3">Add Text</button>
                            <button id="textSave" class="btn btn-success mt-3">Save</button>
                            <button id="textCancel" class="btn btn-secondary mt-3">Cancel</button>
                        </div>
                    </div>
                `;
                document.body.appendChild(modal);

                const canvas = modal.querySelector("#textCanvas");
                const ctx = canvas.getContext("2d");
                const img = new Image();
                img.src = currentImageSrc;
                img.onload = () => ctx.drawImage(img, 0, 0, 400, 400);

                let text = "";
                let color = "#000";
                let size = 24;
                let posX = 50;
                let posY = 50;
                let dragging = false;
                let offsetX = 0;
                let offsetY = 0;

                function redraw() {
                    ctx.clearRect(0, 0, 400, 400);
                    ctx.drawImage(img, 0, 0, 400, 400);
                    if (text) {
                        ctx.font = `${size}px Arial`;
                        ctx.fillStyle = color;
                        ctx.fillText(text, posX, posY);
                    }
                }

                modal.querySelector("#textAdd").addEventListener("click", () => {
                    text = modal.querySelector("#textInput").value;
                    color = modal.querySelector("#textColor").value;
                    size = parseInt(modal.querySelector("#textSize").value);
                    if (!text) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'No Text',
                            text: 'Enter text!',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }
                    redraw();
                });

                canvas.addEventListener("mousedown", (e) => {
                    if (!text) return;
                    const rect = canvas.getBoundingClientRect();
                    const mouseX = e.clientX - rect.left;
                    const mouseY = e.clientY - rect.top;
                    const textWidth = ctx.measureText(text).width;
                    const textHeight = size;
                    if (
                        mouseX >= posX &&
                        mouseX <= posX + textWidth &&
                        mouseY <= posY &&
                        mouseY >= posY - textHeight
                    ) {
                        dragging = true;
                        offsetX = mouseX - posX;
                        offsetY = mouseY - posY;
                    }
                });

                canvas.addEventListener("mousemove", (e) => {
                    if (!dragging) return;
                    const rect = canvas.getBoundingClientRect();
                    posX = e.clientX - rect.left - offsetX;
                    posY = e.clientY - rect.top - offsetY;
                    redraw();
                });

                canvas.addEventListener("mouseup", () => (dragging = false));
                canvas.addEventListener("mouseleave", () => (dragging = false));

                modal.querySelector("#textSave").addEventListener("click", () => {
                    currentImageSrc = canvas.toDataURL("image/png");
                    document.body.removeChild(modal);
                    if (editingRow) openEditModal();
                    else {
                        renderPreview();
                        mainModal.style.display = "block";
                    }
                });

                modal.querySelector("#textCancel").addEventListener("click", () => {
                    document.body.removeChild(modal);
                    if (editingRow) openEditModal();
                    else mainModal.style.display = "block";
                });
            }

            drawMainBtn.addEventListener("click", () => openDrawModal());

            function openDrawModal() {
                if (!currentImageSrc) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Image',
                        text: 'Please upload or select an image first!',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                const modal = document.createElement("div");
                modal.classList.add("draw-modal");
                modal.innerHTML = `
                    <div style="position:fixed;top:0;left:0;width:100%;height:100%;
                    background:rgba(0,0,0,0.8);display:flex;align-items:center;
                    justify-content:center;z-index:9999;">
                        <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;">
                            <canvas id="drawCanvas" width="400" height="400" style="border:1px solid #ccc;cursor:crosshair;"></canvas><br>
                            <input type="color" id="drawColor" value="#000000" class="form-control mb-2" style="height: 38px;">
                            <button id="drawSave" class="btn btn-success mt-2">Save</button>
                            <button id="drawCancel" class="btn btn-secondary mt-2">Cancel</button>
                        </div>
                    </div>
                `;
                document.body.appendChild(modal);

                const canvas = modal.querySelector("#drawCanvas");
                const ctx = canvas.getContext("2d");
                const img = new Image();
                img.src = currentImageSrc;
                img.onload = () => ctx.drawImage(img, 0, 0, 400, 400);

                let drawing = false;
                canvas.addEventListener("mousedown", () => (drawing = true));
                canvas.addEventListener("mouseup", () => {
                    drawing = false;
                    ctx.beginPath();
                });
                canvas.addEventListener("mousemove", (e) => {
                    if (!drawing) return;
                    const rect = canvas.getBoundingClientRect();
                    ctx.strokeStyle = modal.querySelector("#drawColor").value;
                    ctx.lineWidth = 3;
                    ctx.lineCap = "round";
                    ctx.lineTo(e.clientX - rect.left, e.clientY - rect.top);
                    ctx.stroke();
                    ctx.beginPath();
                    ctx.moveTo(e.clientX - rect.left, e.clientY - rect.top);
                });

                modal.querySelector("#drawSave").addEventListener("click", () => {
                    currentImageSrc = canvas.toDataURL("image/png");
                    document.body.removeChild(modal);
                    if (editingRow) openEditModal();
                    else {
                        renderPreview();
                        exampleModal.style.display = "block";
                    }
                });

                modal.querySelector("#drawCancel").addEventListener("click", () => {
                    document.body.removeChild(modal);
                    if (editingRow) openEditModal();
                    else exampleModal.style.display = "block";
                });
            }

            function updateEditedImage() {
                if (editingRow) {
                    const imgTag = editingRow.querySelector("img");
                    imgTag.src = currentImageSrc;
                    // Temporary update for preview; actual update occurs after server save
                }
            }

            function openEditModal() {
                // Ensure editingDocumentId is available
                if (!editingDocumentId) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No document ID available for editing.',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                // Convert server URL to data URL if necessary
                const loadImage = async () => {
                    if (currentImageSrc && !currentImageSrc.startsWith('data:image/')) {
                        const dataUrl = await convertToDataURL(currentImageSrc);
                        if (dataUrl) currentImageSrc = dataUrl;
                        else return; // Error handled in convertToDataURL
                    }

                    const editModal = document.createElement("div");
                    editModal.classList.add("edit-main-modal");
                    editModal.innerHTML = `
                        <div style="position:fixed;top:0;left:0;width:100%;height:100%;
                        background:rgba(0,0,0,0.8);display:flex;align-items:center;
                        justify-content:center;z-index:10000;">
                            <div style="background:#fff;padding:20px;border-radius:10px;text-align:center;max-width:500px;">
                                <h5>Edit Image</h5>
                                <img src="${currentImageSrc}" id="editPreviewImg" style="max-width:300px;border-radius:10px;display:block;margin:10px auto;">
                                <div class="d-flex justify-content-center gap-2 mt-3">
                                    <button class="btn btn-primary" id="editCrop">Crop</button>
                                    <button class="btn btn-warning" id="editText">Add Text</button>
                                    <button class="btn btn-danger   " id="editDraw">Draw</button>
                                    <button class="btn btn-success" id="editSave">Save</button>
                                </div>
                                <button class="btn btn-secondary mt-3" id="editClose">Close</button>
                            </div>
                        </div>
                    `;
                    document.body.appendChild(editModal);

                    editModal.querySelector("#editCrop").addEventListener("click", () => {
                        document.body.removeChild(editModal);
                        openCropModal();
                    });

                    editModal.querySelector("#editText").addEventListener("click", () => {
                        document.body.removeChild(editModal);
                        openTextModal();
                    });

                    editModal.querySelector("#editDraw").addEventListener("click", () => {
                        document.body.removeChild(editModal);
                        openDrawModal();
                    });

                    editModal.querySelector("#editSave").addEventListener("click", () => {
                        if (!currentImageSrc || !currentImageSrc.startsWith('data:image/')) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Invalid image data. Please try again.',
                                confirmButtonText: 'OK'
                            });
                            return;
                        }

                        $.LoadingOverlay('show');

                        // Convert data URL to Blob
                        try {
                            const byteString = atob(currentImageSrc.split(',')[1]);
                            const mimeString = currentImageSrc.split(',')[0].split(':')[1].split(';')[0];
                            const ab = new ArrayBuffer(byteString.length);
                            const ia = new Uint8Array(ab);
                            for (let i = 0; i < byteString.length; i++) {
                                ia[i] = byteString.charCodeAt(i);
                            }
                            const blob = new Blob([ab], { type: mimeString });
                            const fileName = editingRow ? editingRow.querySelector("td:nth-child(4)").textContent : `edited_image_${Date.now()}.png`;
                            const editedFile = new File([blob], fileName, { type: mimeString });

                            const formData = new FormData();
                            formData.append('file', editedFile);
                            formData.append('_token', "{{ csrf_token() }}");
                            formData.append('document_id', editingDocumentId);

                            $.ajax({
                                type: 'POST',
                                url: '{{ route('update.docs', ':id') }}'.replace(':id', editingDocumentId),
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    $.LoadingOverlay("hide");
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: response.message || 'Image updated successfully!',
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            document.body.removeChild(editModal);
                                            editingRow = null;
                                            editingDocumentId = null;
                                            $('#exampleModal3').modal('hide');
                                            setTimeout(() => {
                                                location.reload();
                                            }, 1500); // Delay page reload by 1.5 seconds
                                        }
                                    });
                                },
                                error: function(xhr) {
                                    $.LoadingOverlay('hide');
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: xhr.responseJSON?.message || 'Failed to upload file. Please try again.',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            });
                        } catch (error) {
                            $.LoadingOverlay('hide');
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to process image data. Please try again.',
                                confirmButtonText: 'OK'
                            });
                        }
                    });

                    editModal.querySelector("#editClose").addEventListener("click", () => {
                        document.body.removeChild(editModal);
                        editingRow = null;
                        editingDocumentId = null;
                    });
                };

                loadImage();
            }

            btnSave.addEventListener("click", () => {
                if (!currentImageSrc) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Image Selected',
                        text: 'Please upload or select an image first!',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                $.LoadingOverlay('show');

                // Convert data URL to Blob
                try {
                    const byteString = atob(currentImageSrc.split(',')[1]);
                    const mimeString = currentImageSrc.split(',')[0].split(':')[1].split(';')[0];
                    const ab = new ArrayBuffer(byteString.length);
                    const ia = new Uint8Array(ab);
                    for (let i = 0; i < byteString.length; i++) {
                        ia[i] = byteString.charCodeAt(i);
                    }
                    const blob = new Blob([ab], { type: mimeString });
                    const fileName = selectedFile ? selectedFile.name : `edited_image_${Date.now()}.png`;
                    const editedFile = new File([blob], fileName, { type: mimeString });

                    const formData = new FormData();
                    formData.append('file', editedFile);
                    formData.append('_token', "{{ csrf_token() }}");

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('upload.docs', $assignment->id) }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $.LoadingOverlay("hide");
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message || 'Image uploaded successfully!',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#exampleModal3').modal('hide');
                                    setTimeout(() => {
                                        location.reload();
                                    }, 1500); // Delay page reload by 1.5 seconds
                                }
                            });
                        },
                        error: function(xhr) {
                            $.LoadingOverlay('hide');
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: xhr.responseJSON?.message || 'Failed to upload file. Please try again.',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                } catch (error) {
                    $.LoadingOverlay('hide');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to process image data. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            });

            function deleteRow() {
                document.querySelectorAll(".delete-btn").forEach((btn) =>
                    btn.addEventListener("click", () => {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You want to delete this file?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.LoadingOverlay("show");
                                $.ajax({
                                    type: 'POST',
                                    url: '{{ route('docs.destroy') }}',
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        id: btn.getAttribute("data-id")
                                    },
                                    success: function(response) {
                                        $.LoadingOverlay("hide");
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: 'File deleted successfully!',
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                btn.closest("tr").remove();
                                            }
                                        });
                                    },
                                    error: function(xhr) {
                                        $.LoadingOverlay("hide");
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: xhr.responseJSON?.message || 'An error occurred while deleting file.',
                                            confirmButtonText: 'OK'
                                        });
                                    }
                                });
                            }
                        });
                    })
                );
            }

            function downloadSingle() {
                document.querySelectorAll(".download-file a").forEach((link) =>
                    link.addEventListener("click", (e) => {
                        // Default download behavior is handled by the href attribute
                    })
                );
            }

            function editRow() {
                document.querySelectorAll(".edit-btn").forEach((btn) => {
                    btn.addEventListener("click", async () => {
                        editingRow = btn.closest("tr");
                        const fileName = editingRow.querySelector("td:nth-child(4)").textContent;
                        editingDocumentId = btn.getAttribute("data-id"); // Store data-id
                        currentImageSrc = '{{ asset('assignment-docs') }}/' + fileName;

                        // Convert server URL to data URL
                        const dataUrl = await convertToDataURL(currentImageSrc);
                        if (dataUrl) {
                            currentImageSrc = dataUrl;
                            openEditModal();
                        }
                        // Error handling is done in convertToDataURL
                    });
                });
            }

            // Initialize event listeners
            deleteRow();
            downloadSingle();
            editRow();
        });
        </script>
@endpush
