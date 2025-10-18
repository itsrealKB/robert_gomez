@extends('layouts.admin.app')
@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <style>
        label.error{
            color: #dc3545 !important;
            margin-top: 0.5rem !important;
            font-weight: 700 !important;
            font-style: italic !important;
            font-size: 12.8px !important;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper" style="min-height: 817.5px;">
        <section class="content">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <div class="view-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="map-form">
                                    @csrf
                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="search-all" class="custom-label">Exclude Assignment Creation Date Range and Search All</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <div class="radio-wrap">
                                                <input type="radio" name="search_by_date" id="search-all" value="no" checked/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="search-by-date" class="custom-label">Search By Appointment Dates</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <div class="radio-wrap">
                                                <input type="radio" name="search_by_date" id="search-by-date" value="yes" class="custom-check">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-flex-wrapper date-range-section">
                                        <div class="labelwrapper">
                                            <label for="" class="custom-label">Date Range</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <div class="d-flex gap-5 flex-wrap">
                                                <div class="w-100">
                                                    <input type="date" name="start_date" class="custom-input form-control">
                                                </div>
                                                <div class="w-100">
                                                    <input type="date" name="end_date" class="custom-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="show-completed" class="custom-label">Show Completed</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <input type="checkbox" name="show_completed" id="show-completed" value="yes" class="custom-check"/>
                                        </div>
                                    </div>
                                    {{-- <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="" class="custom-label">Assignments</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <div class="d-flex gap-5 radio-wrap flex-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="all-assignments" name="assignments" value="all" checked/>
                                                    <label for="all-assignments">All</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="assigned-assignments" name="assignments" value="assigned"/>
                                                    <label for="assigned-assignments">Assigned</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="" class="custom-label">Include Status: Files Submitted</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <div class="d-flex gap-5 radio-wrap flex-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="submitted-files" name="submitted_files" value="yes" checked/>
                                                    <label for="submitted-files">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="not-submitted-files" name="submitted_files" value="no"/>
                                                    <label for="not-submitted-files">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Include Supplements --}}
                                    {{-- <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="" class="custom-label">Include Supplements</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <div class="d-flex gap-5 radio-wrap flex-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor6" class="" name="two-factor-auth3" checked="">
                                                    <label for="factor6">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor7" class="" name="two-factor-auth3">
                                                    <label for="factor7">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- Show Appraisers --}}
                                    {{-- <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="check4" class="custom-label">Show Appraisers</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <input type="checkbox" name="" id="check4" class="custom-check">
                                        </div>
                                    </div> --}}

                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="zip-code" class="custom-label">Zip</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <input type="number" name="zip_code" id="zip-code" class="custom-input form-control"/>
                                        </div>
                                    </div>
                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="radius" class="custom-label">Radius In Km</label>
                                        </div>
                                        <div class="fieldWrapper">
                                            <input type="number" name="radius" id="radius" class="custom-input form-control"/>
                                        </div>
                                    </div>
                                    <div class="admin-flex-wrapper">
                                        <div class="labelwrapper">
                                            <label for="multiple" class="custom-label">Appraisers</label>
                                        </div>
                                        <div class="fieldWrapper">
                                                <select id="multiple" name="appraisers[]" class="js-states form-control" multiple>
                                                @foreach ($appraisers as $appraiser )
                                                    <option value="{{ $appraiser->id }}">{{ $appraiser->full_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-5">
                                        <div class="col-4 text-center"><button class="map-filter-btn" type="submit">Submit</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <!-- Select2 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
            $("#multiple").select2({
            placeholder: "None Selected",
            allowClear: true,
        });

        </script>
        <script>
            function initMap($appraisers = []) {

                // const worldCenter = { lat: 20, lng: 0 };

                // const map = new google.maps.Map(document.getElementById("map"), {
                //     zoom: 2,
                //     center: worldCenter,
                // });

                // Calculate bounds to fit all markers
                const bounds = new google.maps.LatLngBounds();

                $appraisers.forEach(appraiser => {
                    const position = {
                        lat: Number(appraiser.latitude),
                        lng: Number(appraiser.longitude)
                    };
                    bounds.extend(position);
                });

                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 10, // Auto-zoom will adjust
                });

                // Fit map to show all markers
                map.fitBounds(bounds);

                // const locations = [
                //     {
                //     lat: 40.8094502,
                //     lng: -74.0669268,
                //     title: "1 American Dream Way, East Rutherford, NJ",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "John Doe",
                //     zipcode: "07073",
                //     pending: "3",
                //     software: "CCC1",
                //     notes: "Lorem ipsum dolor sit amet."
                //     },
                //     {
                //     lat: 40.649997,
                //     lng: -74.339167,
                //     title: "125 E. Broad Street, Westfield, NJ",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "Jane Smith",
                //     zipcode: "07090",
                //     pending: "5",
                //     software: "CCC1",
                //     notes: "Dolor sit amet, consectetur."
                //     },
                //     {
                //     lat: 40.758667,
                //     lng: -73.918933,
                //     title: "31‑75 Steinway Street, Astoria, NY",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "Mike Johnson",
                //     zipcode: "11103",
                //     pending: "2",
                //     software: "CCC1",
                //     notes: "Nisi ut aliquip ex ea commodo."
                //     },
                //     {
                //     lat: 40.742,
                //     lng: -73.992,
                //     title: "1001 Sixth Avenue (37th‑38th St), New York, NY",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "Sarah Lee",
                //     zipcode: "10018",
                //     pending: "6",
                //     software: "CCC1",
                //     notes: "Duis aute irure dolor in reprehenderit."
                //     },
                //     {
                //     lat: 40.869,
                //     lng: -73.075167,
                //     title: "1759 Middle Country Road, Centereach, NY",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "Chris Evans",
                //     zipcode: "11720",
                //     pending: "1",
                //     software: "CCC1",
                //     notes: "Excepteur sint occaecat cupidatat non proident."
                //     },
                //     {
                //     lat: 40.574627,
                //     lng: -73.96093,
                //     title: "224‑236 Brighton Beach Ave, Brooklyn, NY",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "Emily Davis",
                //     zipcode: "11235",
                //     pending: "4",
                //     software: "CCC1",
                //     notes: "Sunt in culpa qui officia deserunt mollit."
                //     },
                //     {
                //     lat: 33.155373,
                //     lng: -96.818733,
                //     title: "12025 E University Drive, Frisco, TX",
                //     icon: "https://cdn-icons-png.flaticon.com/512/2922/2922510.png",
                //     name: "Robert Gomez",
                //     zipcode: "75035",
                //     pending: "2",
                //     software: "CCC1",
                //     notes: "Anim id est laborum."
                //     }
                // ];

                $appraisers.forEach((appraiser) => {
                    const position = {
                        lat: Number(appraiser.latitude),
                        lng: Number(appraiser.longitude)
                    };

                    const marker = new google.maps.Marker({
                    position: position,
                    map:map,
                    title: appraiser.address,
                    icon: {
                        url: 'https://cdn-icons-png.flaticon.com/512/2922/2922510.png',
                        scaledSize: new google.maps.Size(40, 40)
                    }
                    });

                    const infoWindowContent = `
                        <div style="
                            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                            font-size: 13px;
                            padding: 12px;
                            border-radius: 10px;
                            border: 1px solid #e0e0e0;
                            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                            background: linear-gradient(135deg, #ffffff, #f7f9fc);
                            color: #333;
                            max-width: 250px;
                        ">
                            <div style="font-weight: 600;color: #0d47a1; margin-bottom: 0px;">Name: ${appraiser.first_name} ${appraiser.last_name}</div>
                            <div><strong>Zipcode:</strong> ${appraiser.zip_code}</div>
                            <div><strong>Pending Assignments:</strong> ${appraiser.pendingAssignments} Assignments</div>
                        </div>
                    `;

                    // <div><strong>Estimating Software Type:</strong> ${appraiser.software}</div>
                    // <div><strong>Notes:</strong> ${appraiser.notes}</div>

                    const infoWindow = new google.maps.InfoWindow({
                        content: infoWindowContent
                    });

                    marker.addListener("click", () => {
                        infoWindow.open(map, marker);
                    });
                });
            }
        </script>
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD28UEoebX1hKscL3odt2TiTRVfe5SSpwE&callback=initMap"></script>

        {{-- Showing date inputs only when search by date radio is checked --}}
        <script>
            $(document).ready(function() {
                function toggleDateRange() {
                    if ($('#search-by-date').is(':checked')) {
                        $('.date-range-section').show();
                    } else {
                        $('.date-range-section').hide();
                    }
                }

                // Bind change event to radio buttons
                $('input[name="search_by_date"]').change(toggleDateRange);

                // Initial state
                toggleDateRange();
            });
        </script>

        {{-- Validation Scripts Start --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
        <script>
            // Checking If Search By Date Radio Is Checked.
            function isChecked(){
                return $("#search-by-date").is(":checked");
            };

            // Checking If Start Date Is Less Than End Date.
            $.validator.addMethod("endDateGreaterThanStart", function(value, element) {

                if (!isChecked()) return true; // Skip validation if radio not checked

                const endDate = new Date(value);
                const startDate = new Date($("input[name='start_date']").val());

                // If either date is invalid, let required validation handle it
                if (isNaN(endDate.getTime()) || isNaN(startDate.getTime())) {
                    return true;
                }

                return endDate >= startDate;
            });

            $("#map-form").validate({
                rules: {
                    start_date: {
                        required : {
                            depends : isChecked()
                        }
                    },

                    end_date: {
                        required : {
                            depends : isChecked()
                        },
                        endDateGreaterThanStart: true
                    },

                    // zip_code : {
                    //     required : true,
                    // },

                    radius : {
                        required : {
                            depends : function(element){
                                return $("input[name='zip_code']").val().trim() !== "";
                            }
                        }
                    }
                },

                messages: {

                    start_date : {
                        required : "Start Date Is Required!",
                    },

                    end_date : {
                        required : "End Date Is Required!",
                        endDateGreaterThanStart : "End Date Must Be Greater Than Or Equal To Start Date"
                    },

                    // zip_code : {
                    //     required : "Zip Code Is Required!",
                    // },

                    radius : {
                        required : "Radius Is Required!",
                    },

                }
            });
        </script>
        {{-- Validation Scripts End --}}

        {{-- Submitting Form --}}
        <script>
            $(document).ready(function(){
                $('#map-form').on('submit', function(e){
                    if(!$(this).valid())
                    {
                        return false;
                    }
                    e.preventDefault();
                    let formData = new FormData(this);
                    $.ajax({
                        url : "{{ route('admin.assign.assignments.map.find') }}",
                        type : 'POST',
                        data : formData,
                        processData: false,
                        contentType: false,
                        beforeSend : function()
                        {
                            $.LoadingOverlay('show');
                        },
                        success : function(response)
                        {
                            $.LoadingOverlay('hide');
                            if(response.status)
                            {
                                initMap(Object.values(response.data));
                            }
                            else
                            {
                                Swal.fire({
                                    title: "There's Information For You!",
                                    text: response.message,
                                    icon: 'info',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error : function(error)
                        {
                            $.LoadingOverlay('hide');
                            Swal.fire({
                                title: 'Something Went Wrong!',
                                text: error.responseJSON.message,
                                icon: 'error',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            });
                        }
                    })
                });
            });
        </script>
        {{-- Submitting Form --}}
    @endpush
@endsection
