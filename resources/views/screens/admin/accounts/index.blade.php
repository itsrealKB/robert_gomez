@extends('layouts.admin.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
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
            /* background-color: #fde3d7 !important; */
            background-color: #fffcdf !important;
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

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            display: inline-flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .dataTables_wrapper .dataTables_filter {
            justify-content: flex-end;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="dashboard-content">
                    @php
                        $headers = ['S.No#', 'Company', 'Owner', 'Claim', 'Payments'];
                    @endphp

                    <div class="content-wrap">
                        <h2>Accountings</h2>
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
                                <button class="load-btn" type="button" id="download-csv" data-disabled="true">Download CSV</button>
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
                                <h3>UnAssigned Assignments</h3>
                                <h2 id="unassigned">$0</h2>
                                {{-- <p><i class="fa-solid fa-arrow-up" style="color: green;"></i> 13.8%
                                </p> --}}
                            </div>
                            <div class="report-box">
                                <h3>Pending Assignments</h3>
                                <h2 id="pending">$0</h2>
                                {{-- <p><i class="fa-solid fa-arrow-down"></i> 13.8%</p> --}}
                            </div>
                        </div>
                        <div>
                            <div class="files-wrapper">
                                <h3>Assignments</h3>
                            </div>
                            <div class="entry-table-wrap">
                                <table class="table entries-table" id="assignments-table">
                                    <thead>
                                        <tr>
                                            @foreach ($headers as $heading)
                                                <th scope="col"
                                                    style="background: #8E8E8E !important; color: white !important;">
                                                    {{ $heading }}
                                                    <i class="fa-solid fa-arrow-down"></i>
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="{{ count($headers) }}" class="text-center fw-bold fs-5">No Data Of
                                                Assignments!</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="d-none justify-content-center" id="download-csv">
                                <button class="load-btn">Download CSV</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- DataTable --}}
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    {{-- DataTable --}}

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
                    url: "{{ route('admin.accounting.show') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay('show');
                    },
                    success: function (response) {
                        $.LoadingOverlay('hide');
                        const { pending = 0, unassigned = 0, assignments = [] } = response.data;
                        const amountContainers = $('.report-box h2');

                        // Showing Amount.
                        amountContainers.each((index, element) => {
                            const amounts = {
                                'total': unassigned + pending,
                                'pending': pending,
                                'unassigned': unassigned
                            };

                            if (amounts[element.id] !== undefined) {
                                $(element).text(formatAmount(amounts[element.id]));
                            }
                        });

                        // Formating Amount.
                        function formatAmount(amount) {
                            if (amount >= 1000) {
                                const inK = amount / 1000;
                                // If it's a whole number, don't show decimal
                                return inK % 1 !== 0 ? '$' + inK + 'K' : '$' + inK.toFixed(1) + 'K';
                            }
                            return '$' + amount;
                        }

                        // Showing Assignments Table.
                        const tableBody = $('#assignments-table tbody');
                        if (assignments.length) {

                            if ($.fn.DataTable.isDataTable('#assignments-table')) {
                                $('#assignments-table').DataTable().destroy();
                            }

                            tableBody.empty();

                            assignments.forEach((assignment, index) => {
                                // Getting Payment.
                                let amount = 0;
                                assignment.assignment_payments.forEach(payment => {
                                    amount += payment.price;
                                });

                                const row = `
                                        <tr>
                                            <td>${index + 1}</td>
                                            <td>${assignment.company}</td>
                                            <td>${assignment.owner}</td>
                                            <td>${assignment.claim}</td>
                                            <td>${formatAmount(amount)}</td>
                                        </tr>
                                    `;
                                tableBody.append(row);
                            });

                            var table = $("#assignments-table").DataTable({
                                processing: true,
                                language: {
                                    paginate: {
                                        previous: '<i class="fa-solid fa-angle-left"></i>',
                                        next: '<i class="fa-solid fa-angle-right"></i>',
                                    },
                                },
                            });

                            // $('#download-csv').removeClass('d-none').addClass('d-flex');
                            $('#download-csv').attr('data-disabled','false');
                        }
                        else {

                            if ($.fn.DataTable.isDataTable('#assignments-table')) {
                                $('#assignments-table').DataTable().destroy();
                            }

                            tableBody.empty();
                            const row = `
                                    <tr>
                                        <td colspan="{{ count($headers) }}" class="text-center fw-bold fs-5">No Data Of
                                            Assignments!
                                        </td>
                                    </tr>
                                `;
                            tableBody.append(row);
                            // $('#download-csv').removeClass('d-flex').addClass('d-none');
                            $('#download-csv').attr('data-disabled','true');
                        }

                    },
                    error: function (error) {
                        $.LoadingOverlay('hide');
                        $('#download-csv').attr('data-disabled','true');
                        if (error.status === 500) {
                            Swal.fire({
                                title: "Error!",
                                text: error.statusText,
                                icon: 'error',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            });
                        }
                        else {
                            Swal.fire({
                                title: "There's Information For You!",
                                text: error.responseJSON.message,
                                icon: 'info',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });
            });
        });
    </script>
    {{-- Submitting Form --}}

    {{-- CSV Download --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#download-csv', function () {
                let disabled = $(this).attr('data-disabled');
                if(disabled == 'true'){
                    Swal.fire({
                        title: "There's Information For You!",
                        text: 'No Data In The Table!',
                        icon: 'info',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                let table = $('#assignments-table')[0];

                // Clone table
                let clone = table.cloneNode(true);

                // Convert table to CSV
                let worksheet = XLSX.utils.table_to_sheet(clone);
                let csv = XLSX.utils.sheet_to_csv(worksheet);

                // Create CSV blob and trigger download
                let blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
                let link = $('<a>',
                    {
                        href : URL.createObjectURL(blob),
                        download : 'accounts.csv'
                    }
                )
                $('body').append(link);
                link[0].click();
                link.remove();
            });
        });
    </script>
    {{-- CSV Download --}}
@endpush
