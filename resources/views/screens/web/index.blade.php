@extends('layouts.web.app')

@push('styles')
    <style>
        #modal-body{
            max-height: 678px !important;
        }
    </style>
@endpush

@section('content')
    <div class="main-page-wrapper">
        <div class="assign-header">
            <div>
                <h3>Your Assignments</h3>
                <p>View your list of active claims below or search by (id, company name or claim) to find specific claims.</p>
            </div>
            <div class="assign-header-child">
                <div class="search-bar-area position-relative">
                    <button class="head-search-icon" type="submit"><i class="fa-solid fa-magnifying-glass "></i></button>
                    <input type="text" class="head-search-input" placeholder="Search Assignment" name=""
                        id="search-input" />
                </div>
                {{-- <button class="add-assign-btn">Add Assignment</button> --}}
            </div>
        </div>
        <div class="board-area">
            @forelse ($assignments as $assignment)
                <div class="assign-card" data-url="{{ route('view', $assignment->id) }}">
                    <div class="card-id-wrapper">
                        <h3>{{ $assignment->id }}</h3>
                        <div class="toggler-btn-wrapper">
                            <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i></button>
                            <button type="button" class="toggler-btn"><i
                                    class="fa-solid fa-caret-down rotate-icon"></i></button>
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
                            </div>
                        </div>
                        <div>
                            <p class="text-end m-0" data-created-at="{{ $assignment->created_at }}"></p>
                            <div class="pending-btn-wrapper hidden-class">
                                <button class="quick-updates-btn">Quick Updates</button>
                                @if ($assignment->status == 'pending')
                                    <button style="background:#d3c501 !important;">Pending</button>
                                    {{-- <button class="btn btn-primary completeBtn"
                                        data-id="{{ $assignment->id }}">Complete</button> --}}
                                @else
                                    <button style="background:#00A84C !important;">Completed</button>
                                @endif


                                {{-- <button style="background:#00A84C !important;">Completed</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse

            {{-- <div class="assign-card" data-url="{{ route('view') }}">
                <div class="card-id-wrapper">
                    <h3>001-0525-0100</h3>
                    <div class="toggler-btn-wrapper">
                        <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                        <button type="button" class="toggler-btn"><i
                                class="fa-solid fa-caret-down rotate-icon"></i></button>
                    </div>
                </div>
                <div class="insurance-wrapper">
                    <div>
                        <p><span>Insurance:</span> ABC Claims Logistics ABC Insurance Company.</p>
                        <div class="other-desc-area hidden-class">
                            <p><span>Owner</span> LL CATTLE COMPANY LLC</p>
                            <p><span>Owner Phone:</span> 12345678910</p>
                            <p><span>Owner Email:</span> Info@gmail.com</p>
                            <p><span>Claim#:</span> 245694</p>
                            <p><span>Type of Claim:</span> ABCD12345667890</p>
                            <p><span>Loss Type:</span> Damage</p>
                            <p><span>Vehicle Location:</span> 2200 E. CHURCH ST, Aurora, MO, 65605 </p>
                            <p><span>Appointment:</span> 04/28/2025 02:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-end m-0">20 hours, 27 mins </p>
                        <div class="pending-btn-wrapper hidden-class">
                            <button>Quick Updates</button>
                            <button>Pending</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="assign-card" data-url="{{ route('view') }}">
                <div class="card-id-wrapper">
                    <h3>001-0525-0100</h3>
                    <div class="toggler-btn-wrapper">
                        <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                        <button type="button" class="toggler-btn"><i
                                class="fa-solid fa-caret-down rotate-icon"></i></button>
                    </div>
                </div>
                <div class="insurance-wrapper">
                    <div>
                        <p><span>Insurance:</span> ABC Claims Logistics ABC Insurance Company.</p>
                        <div class="other-desc-area hidden-class">
                            <p><span>Owner</span> LL CATTLE COMPANY LLC</p>
                            <p><span>Owner Phone:</span> 12345678910</p>
                            <p><span>Owner Email:</span> Info@gmail.com</p>
                            <p><span>Claim#:</span> 245694</p>
                            <p><span>Type of Claim:</span> ABCD12345667890</p>
                            <p><span>Loss Type:</span> Damage</p>
                            <p><span>Vehicle Location:</span> 2200 E. CHURCH ST, Aurora, MO, 65605 </p>
                            <p><span>Appointment:</span> 04/28/2025 02:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-end m-0">20 hours, 27 mins </p>
                        <div class="pending-btn-wrapper hidden-class">
                            <button>Quick Updates</button>
                            <button>Pending</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="assign-card" data-url="{{ route('view') }}">
                <div class="card-id-wrapper">
                    <h3>001-0525-0100</h3>
                    <div class="toggler-btn-wrapper">
                        <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                        <button type="button" class="toggler-btn"><i
                                class="fa-solid fa-caret-down rotate-icon"></i></button>
                    </div>
                </div>
                <div class="insurance-wrapper">
                    <div>
                        <p><span>Insurance:</span> ABC Claims Logistics ABC Insurance Company.</p>
                        <div class="other-desc-area hidden-class">
                            <p><span>Owner</span> LL CATTLE COMPANY LLC</p>
                            <p><span>Owner Phone:</span> 12345678910</p>
                            <p><span>Owner Email:</span> Info@gmail.com</p>
                            <p><span>Claim#:</span> 245694</p>
                            <p><span>Type of Claim:</span> ABCD12345667890</p>
                            <p><span>Loss Type:</span> Damage</p>
                            <p><span>Vehicle Location:</span> 2200 E. CHURCH ST, Aurora, MO, 65605 </p>
                            <p><span>Appointment:</span> 04/28/2025 02:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-end m-0">20 hours, 27 mins </p>
                        <div class="pending-btn-wrapper hidden-class">
                            <button>Quick Updates</button>
                            <button>Pending</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="assign-card" data-url="{{ route('view') }}">
                <div class="card-id-wrapper">
                    <h3>001-0525-0100</h3>
                    <div class="toggler-btn-wrapper">
                        <button type="button" class="eye-btn hidden-class"><i class="fa-solid fa-eye"></i> 3</button>
                        <button type="button" class="toggler-btn"><i
                                class="fa-solid fa-caret-down rotate-icon"></i></button>
                    </div>
                </div>
                <div class="insurance-wrapper">
                    <div>
                        <p><span>Insurance:</span> ABC Claims Logistics ABC Insurance Company.</p>
                        <div class="other-desc-area hidden-class">
                            <p><span>Owner</span> LL CATTLE COMPANY LLC</p>
                            <p><span>Owner Phone:</span> 12345678910</p>
                            <p><span>Owner Email:</span> Info@gmail.com</p>
                            <p><span>Claim#:</span> 245694</p>
                            <p><span>Type of Claim:</span> ABCD12345667890</p>
                            <p><span>Loss Type:</span> Damage</p>
                            <p><span>Vehicle Location:</span> 2200 E. CHURCH ST, Aurora, MO, 65605 </p>
                            <p><span>Appointment:</span> 04/28/2025 02:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-end m-0">20 hours, 27 mins </p>
                        <div class="pending-btn-wrapper hidden-class">
                            <button>Quick Updates</button>
                            <button>Pending</button>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>


    {{-- <section>
        <div class="container-fluid">
            <div class="dashboard-content">
                <div class="content-wrap">
                    <h2>Your Assignments</h2>
                    <p>View your list of active claims below or search to find specific claims.</p>
                </div>
                <div class="table-head-wrap">
                    <div class="asign-head">
                        <p>Assignments</p>
                        <div class="d-flex ems-wrapper">
                            <button class="ems-btn">Export EMS</button>
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle position-relative border-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    CCC
                                </button>
                                <ul class="dropdown-menu header-dropdown">
                                    <li>
                                        <a class="dropdown-item dropdown-link" href="#">Lorem</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item dropdown-link" href="#">Lorem</a>
                                    </li>
                                </ul>
                            </div>
                            <button class="setting-btn">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                        </div>
                    </div>
                    <div class="ems-mob px-4">
                        <button class="load-btn">Export EMS</button>
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle position-relative border-0 load-btn" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                CCC
                            </button>
                            <ul class="dropdown-menu header-dropdown">
                                <li>
                                    <a class="dropdown-item dropdown-link" href="#">Lorem</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown-link" href="#">Lorem</a>
                                </li>
                            </ul>
                        </div>
                        <button class="load-btn">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                    </div>
                    <div class="check-box-wrap px-4">
                        <div class="d-flex gap-2  ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="masterCheckbox" required="">
                                <label class="form-check-label" for="masterCheckbox">SELECT ALL</label>
                            </div>
                            <div class="form-check">
                                <button class="del-btn"><i class="fa-solid fa-trash-can"></i> DELETE</button>
                            </div>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <p class="mb-0">Order By</p>
                            <select name="" id="" class="course-select">
                                <option value="Relevance">Date Created (Newest First)</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select>
                            <select name="" id="" class="course-select">
                                <option value="Relevance">Enteries</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select>
                        </div>
                    </div>
                    <div class="assign-table-wrapper">
                        <table class="assign-table assign-table-1 table">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="slaveCheckbox" id="masterCheckbox1"> <i
                                            class="fa-solid fa-arrow-down"></i>
                                    </th>
                                    <th scope="col">Watching <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">MSG <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Type <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">File <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Priority <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Insurance <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">City <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">State <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Owner Name <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Business Name <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Claim <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Apt Date <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Date Assigned <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Time Open <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Accepted <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Phase <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Status <i class="fa-solid fa-arrow-down"></i></th>
                                </tr>
                            </thead>
                            <tbody class="table-bodys" style="cursor: pointer;">
                                <tr class="text-center table-row-first">
                                    <th scope="row" style="align-content: center;"><input type="checkbox"
                                            class="slaveCheckbox"></th>
                                    <td><img src="{{ asset('assets/web/images/eye-img.svg') }}" alt=""></td>
                                    <td>0</td>
                                    <td></td>
                                    <td>
                                        <div class="file-code">1234567</div>
                                    </td>
                                    <td>
                                        <div class="file-code priotity-code">Normal</div>
                                    </td>
                                    <td>ABC Claims Logistics ABC Insurance Company</td>
                                    <td>Springfield</td>
                                    <td>MO</td>
                                    <td></td>
                                    <td>ABC Net LLC</td>
                                    <td>ABCD12345667890</td>
                                    <td>26/06/2024 <br> 12:00 am</td>
                                    <td>30/06/2024 <br> 12:00 am</td>
                                    <td>0d 10hr</td>
                                    <td>
                                        <div class="file-code">Yes</div>
                                    </td>
                                    <td>
                                        <div class="file-code priotity-code">Hall - 1 <br> 2 day 03 hours <br> 46
                                            minutes</div>
                                    </td>
                                    <td>
                                        <div class="file-code Status">Pending</div>
                                    </td>
                                </tr>
                                <tr class="text-center table-row-second">
                                    <th style="align-content: center;"><input type="checkbox" class="slaveCheckbox"></th>
                                    <td><img src="{{ asset('assets/web/images/eye-img.svg') }}" alt=""></td>
                                    <td>0</td>
                                    <td></td>
                                    <td>
                                        <div class="file-code">1234567</div>
                                    </td>
                                    <td>
                                        <div class="file-code priotity-code">Normal</div>
                                    </td>
                                    <td>ABC Claims Logistics ABC Insurance Company</td>
                                    <td>Springfield</td>
                                    <td>MO</td>
                                    <td></td>
                                    <td>ABC Net LLC</td>
                                    <td>ABCD12345667890</td>
                                    <td>26/06/2024 <br> 12:00 am</td>
                                    <td>30/06/2024 <br> 12:00 am</td>
                                    <td>0d 10hr</td>
                                    <td>
                                        <div class="file-code">Yes</div>
                                    </td>
                                    <td>
                                        <div class="file-code priotity-code">No Phase</div>
                                    </td>
                                    <td>
                                        <div class="file-code Status" style="background: #75E6AE !important">Approved</div>
                                    </td>
                                </tr>
                                <tr class="text-center table-row-third">
                                    <th style="align-content: center;"><input type="checkbox" class="slaveCheckbox"></th>
                                    <td><img src="{{ asset('assets/web/images/eye-img.svg') }}" alt=""></td>
                                    <td>0</td>
                                    <td></td>
                                    <td>
                                        <div class="file-code">1234567</div>
                                    </td>
                                    <td>
                                        <div class="file-code priotity-code">Normal</div>
                                    </td>
                                    <td>ABC Claims Logistics ABC Insurance Company</td>
                                    <td>Springfield</td>
                                    <td>MO</td>
                                    <td></td>
                                    <td>ABC Net LLC</td>
                                    <td>ABCD12345667890</td>
                                    <td>26/06/2024 <br> 12:00 am</td>
                                    <td>30/06/2024 <br> 12:00 am</td>
                                    <td>0d 10hr</td>
                                    <td>
                                        <div class="file-code">Yes</div>
                                    </td>
                                    <td>
                                        <div class="file-code priotity-code">Hall - 1 <br> 2 day 03 hours <br> 46
                                            minutes</div>
                                    </td>
                                    <td>
                                        <div class="file-code Status" style="background: #FF0000 !important">Rejected</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <x-pagination />
            </div>
        </div>
    </section> --}}

    {{-- Modal Dialog --}}
    {{-- <div class="modal fade modal-bg-custom modal-docs-custom login-modal" id="exampleModal4" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body modal-border">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-11 text-center">
                            <div class="login-wrapper login-wrapper-2 px-5">
                                <form action="" id="form">
                                    <div class="login-fields-area">
                                        <div class="form-floating ">
                                            <div class="field-icon-area"></div>
                                            <i class="fa-solid fa-user"></i>
                                            <input type="text" name="name" id="" class="form-control" placeholder=""
                                                required>
                                            <label for="name">USER NAME</label>
                                        </div>
                                    </div>
                                    <div class="login-fields-area">
                                        <div class="form-floating">
                                            <div class="field-icon-area"></div>
                                            <i class="fa-regular fa-eye toggle-password" toggle="#password-field"></i>
                                            <input type="password" name="password" id="password-field" class="form-control"
                                                placeholder="" required>
                                            <label for="password-field">PASSWORD</label>
                                        </div>
                                    </div>
                                    <div class="login-fields-area mt-4">
                                        <div class="d-flex gap-2 align-items-center checkbox-wrap">
                                            <input class="" type="checkbox" value="" id="flexCheckChecked1">
                                            <label class="" for="flexCheckChecked1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="login-btn-area">
                                        <button type="submit" name="" id="openModalBtn">Login</button>
                                    </div>
                                </form>
                                <div class="forget-wrap">
                                    <p>Forget <a href="{{ route('forgetpassword') }}">Password</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Modal2 --}}
    {{-- <div class="modal fade modal-bg-custom " id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel2"
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
                    <button type="button" class="pay-btn text-center bg-primary" data-bs-dismiss="modal">Accepted</button>
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Rejected</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Assignment Search Result --}}

    <div class="modal fade modal-bg-custom" id="search-modal" tabindex="-1" aria-labelledby="searchModalLabel"
        aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div>
                    <p class="claim-para mb-3">Your Search Results.</p>
                </div>
                <div class="modal-body table-responsive" id="search-modal-body" style="padding:0px;border:none; max-height: 400px !important;">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Company</th>
                                <th scope="col">Claim</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-center info-desc gap-3 border-0">
                    <button type="button" class="pay-btn text-center" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script>
        $(document).ready(function () {
            // Function to calculate and update elapsed time
            function updateElapsedTime() {
                // Select all elements with the data-created-at attribute
                $('.board-area .text-end').each(function () {
                    const createdAt = $(this).data('created-at');
                    if (createdAt) {
                        // Parse the date as UTC and get its timestamp
                        const createdDate = new Date(createdAt + 'Z');
                        const now = new Date();

                        // Calculate the difference in milliseconds
                        let diffInMilliseconds = now.getTime() - createdDate.getTime();

                        // Ensure the value is not negative
                        diffInMilliseconds = Math.abs(diffInMilliseconds);

                        // Convert milliseconds to a human-readable format
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

            // Call the function initially to update all elements
            updateElapsedTime();

            // Set an interval to update the time every minute
            setInterval(updateElapsedTime, 60000);
        });
    </script>

    <script>
        $(document).ready(function () {
            // $('.completeBtn').on('click', function() {

            //     console.log($(this).attr('data-id'));

            //     var assignmnet = $(this);
            //     Swal.fire({
            //         title: "Are you sure?",
            //         text: " Once assignment will be complete it will be hidden from here!",
            //         icon: "warning",
            //         showCancelButton: true,
            //         confirmButtonColor: "#0d6efd",
            //         cancelButtonColor: "#d33",
            //         confirmButtonText: "Completed"
            //     }).then((result) => {
            //         if (result.isConfirmed) {


            //             $.ajax({
            //                 type: 'POST',
            //                 url: '{{ route('assign.status') }}',
            //                 data: {
            //                     "_token": "{{ csrf_token() }}",
            //                     "status": "completed",
            //                     "assignment": $(this).attr('data-id')
            //                 },
            //                 success: function(response) {
            //                     console.log(response);

            //                     Swal.fire({
            //                         title: "Completed",
            //                         text: response.message,
            //                         icon: "success"
            //                     });

            //                     assignmnet.closest('.assign-card').hide();
            //                     // window.location.reload()
            //                 }
            //             })
            //         }
            //     });

            //     // $.ajax({
            //     //     type: 'GET',
            //     //     url:''
            //     // })

            // })
        });
    </script>
    <script>
        $(document).ready(function () {

            $('.insurance-heading').on('click', toggleAssignmentCard);

            function toggleAssignmentCard(e) {
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

            // Search Assignment Functionality.
            $('.head-search-icon').on('click', searchAssignment);
            $('#search-input').on('keyup', function(e) {
                if(e.originalEvent.key === 'Enter' && e.originalEvent.keyCode === 13){
                    searchAssignment();
                }
            });
            function searchAssignment() {
                let value = $('#search-input').val();

                // Validating If Input Is Empty.
                if(!value){
                    Swal.fire({
                        title: 'Error!',
                        text: 'Please Enter Something To Search For.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                let assignments = [];

                $.ajax({
                    url: "{{ route('search.assignment', ':value') }}".replace(':value', value),
                    type: 'GET',
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    success: function (response) {
                        $.LoadingOverlay("hide");
                        assignments = response.assignments;
                        if (assignments.length) {

                            let tableBody = $('#search-modal-body tbody');
                            tableBody.empty();
                            let route = "{{ route('view', ':id') }}";

                            assignments.forEach((assignment) => {
                                let viewRoute = route.replace(':id', assignment?.id);
                                let row = `<tr>
                                    <th scope="row">${assignment?.id}</th>
                                    <td>${assignment?.company}</td>
                                    <td>${assignment?.claim}</td>
                                    <td>
                                        <a href="${viewRoute}" class="text-dark">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>`;

                                tableBody.append(row);
                            });

                            $('#search-modal').modal('show');
                            $('#search-input').val('');
                        }
                        else {
                            Swal.fire({
                                title: 'Sorry!',
                                text: "No Match Found.",
                                icon: 'info',
                                confirmButtonText: 'OK'
                            });

                        }
                    },
                    error: function (error) {
                        $.LoadingOverlay("hide");
                        Swal.fire({
                            title: 'Error!',
                            text: error.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }

        });
    </script>
@endpush
