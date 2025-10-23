@extends('layouts.web.app')

@push('styles')
    <style>
        .report-box:first-child {
            background-color: #e3f2fd !important;
        }

        .report-box:nth-child(2) {
            background-color: #e4f1de !important;
        }

        .report-box:nth-child(3) {
            background-color: #fffcdf !important;
        }

        .report-box:last-child {
            background-color: #fde3d7 !important;
        }

        .load-btn {
            background-color: #0366d3 !important;
        }

        label.error {
            color: red;
            font-style: italic;
            font-weight: bold;
            font-size: 13px;
            margin-top: 10px;
        }
    </style>
@endpush
@section('content')

    @php
        $headers = ['Entries', 'Label', 'Date', 'Created by'];
        $entries = [
            [
                'name' => '1_IAS_Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'created_by' => 'Lorem Ipsum Dummy',
            ],
            [
                'name' => '2_IAS_Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '05/09/2024',
                'created_by' => 'John Doe',
            ],
            [
                'name' => '3_IAS_Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '06/09/2024',
                'created_by' => 'Jane Smith',
            ],
        ];

    @endphp

    <section>
        <div class="container-fluid">
            <div class="dashboard-content">
                <div class="content-wrap">
                    <h2>Payroll</h2>
                </div>
                <form id="payroll-form">
                    @csrf
                    <div class="date-content-wrap">
                        <div class="date-wrap">
                            <p>Date Range</p>
                            <div>
                                <input type="date" name="start_date" id="start-date" />
                            </div>
                            <div>
                                <input type="date" name="end_date" id="end-date" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <button class="load-btn" id="find-payroll">Submit</button>
                            {{-- <button class="load-btn" type="button" id="download-csv">Download CSV</button> --}}
                        </div>
                    </div>
                </form>

                <div class="report-wrapper">
                    <div class="files-wrapper">
                        <h3>Reporting</h3>
                    </div>
                    <div class="report-box-wrapper">
                        <div class="report-box">
                            <h3>Total Assignments</h3>
                            <h2 id="total">$0</h2>
                            {{-- <p><i class="fa-solid fa-arrow-down"></i> 13.8%</p> --}}
                        </div>
                        {{-- <div class="report-box">
                            <h3>Accepted Assignments</h3>
                            <h2>$0</h2>
                            <p><i class="fa-solid fa-arrow-down"></i> 13.8%</p>
                        </div> --}}
                        <div class="report-box">
                            <h3>Pending Assignments</h3>
                            <h2 id="pending">$0</h2>
                            {{-- <p><i class="fa-solid fa-arrow-up" style="color: green;"></i> 13.8%</p> --}}
                        </div>
                        <div class="report-box">
                            <h3>Rejected Assignments</h3>
                            <h2 id="rejected">$0</h2>
                            {{-- <p><i class="fa-solid fa-arrow-down"></i> 13.8%</p> --}}
                        </div>
                    </div>
                    {{-- <div>
                        <div class="files-wrapper">
                            <h3>Enteries</h3>
                        </div>
                        <x-entries-table :entries="$entries" :headers="$headers" />
                        <div class="d-flex justify-content-center">
                            <button class="load-btn">Load More</button>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- Validation Scripts Start --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script>
        // Checking If Start Date Is Less Than End Date.
        $.validator.addMethod("endDateGreaterThanStart", function (value, element) {
            const endDate = new Date(value);
            const startDate = new Date($("input[name='start_date']").val());

            // If either date is invalid, let required validation handle it
            if (isNaN(endDate.getTime()) || isNaN(startDate.getTime())) {
                return true;
            }

            return endDate >= startDate;
        });

        $("#payroll-form").validate({
            rules: {
                start_date: {
                    required: true
                },

                end_date: {
                    required: true,
                    endDateGreaterThanStart: true
                },
            },

            messages: {
                start_date: {
                    required: "Start Date Is Required!",
                },

                end_date: {
                    required: "End Date Is Required!",
                    endDateGreaterThanStart: "End Date Must Be Greater Than Or Equal To Start Date"
                },
            },
        });
    </script>
    {{-- Validation Scripts End --}}

    {{-- Submitting Form --}}
    <script>
        $(document).ready(function () {
            $("#payroll-form").on('submit', function (e) {
                if (!$(this).valid()) {
                    return false;
                }

                e.preventDefault();
                const formData = new FormData(this);

                $.ajax({
                    url: "{{ route('accounting.show', auth()->id()) }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay('show');
                    },
                    success: function (response) {
                        $.LoadingOverlay('hide');
                        const { pending = 0, rejected = 0 } = response.data;
                        const amountContainers = $('.report-box h2');
                        amountContainers.each((index, element) => {

                            const amounts = {
                                'total': pending + rejected,
                                'pending': pending,
                                'rejected': rejected
                            };

                            if (amounts[element.id] !== undefined) {
                                $(element).text(formatAmount(amounts[element.id]));
                            }
                        });

                        function formatAmount(amount) {
                            if (amount >= 1000) {
                                const inK = amount / 1000;
                                // If it's a whole number, don't show decimal
                                return inK % 1 !== 0 ? '$' + inK + 'K' : '$' + inK.toFixed(1) + 'K';
                            }
                            return '$' + amount;
                        }
                    },
                    error: function (error) {
                        $.LoadingOverlay('hide');
                        Swal.fire({
                            title: "There's Information For You!",
                            text: error.responseJSON.message,
                            icon: 'info',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
    {{-- Submitting Form --}}
@endpush
