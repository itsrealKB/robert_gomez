@extends('layouts.web.app')
@push('styles')
    <style>
        a.icon {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        a.icon i {
            font-size: 14px;
        }

        .page, .prev, .next {
            background-color: #0366d3 !important;
            color: var(--white) !important;
        }
    </style>
@endpush
@section('content')
    @php
        // $docs = [
        //     [
        //         'title' => 'Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '04/09/2024',
        //         'img' => 'doc-card-img.png',
        //     ],
        //     [
        //         'title' => 'Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '04/09/2024',
        //         'img' => 'doc-card-img.png',
        //     ],
        //     [
        //         'title' => 'Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '04/09/2024',
        //         'img' => 'doc-card-img.png',
        //     ],
        //     [
        //         'title' => 'Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '04/09/2024',
        //         'img' => 'doc-card-img.png',
        //     ],
        //     [
        //         'title' => 'Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '04/09/2024',
        //         'img' => 'doc-card-img.png',
        //     ],
        // ];

        $videos = [
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'video-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'video-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'video-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'video-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'video-card-img.png',
            ],
        ];

        // $headers = ['Entries', 'Label', 'Date', 'Created by'];
        // $entries = [
        //     [
        //         'name' => '1_IAS_Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '04/09/2024',
        //         'created_by' => 'Lorem Ipsum Dummy',
        //     ],
        //     [
        //         'name' => '2_IAS_Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '05/09/2024',
        //         'created_by' => 'John Doe',
        //     ],
        //     [
        //         'name' => '3_IAS_Knowledgebase.docx',
        //         'label' => 'IAS KNOWLEDGE BASE',
        //         'date' => '06/09/2024',
        //         'created_by' => 'Jane Smith',
        //     ],
        // ];
    @endphp
    <section>
        <div class="container-fluid">
            <div class="dashboard-content">
                <div class="content-wrap">
                    <h2>Useful Resources</h2>
                    <p>View your list of active resources below.</p>
                </div>
                {{-- <div class="files-wrapper">
                    <h3>Documents</h3>
                    <div>
                        <button class="doc-prev-btn"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="doc-next-btn"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="doc-card-slider">
                    @foreach ($docs as $doc)
                    <x-document-card :doc="$doc" />
                    @endforeach
                </div> --}}
                <div class="bg-primary video-card-wrap">
                    <div class="files-wrapper">
                        <h3 class="text-white">Videos</h3>
                        <div>
                            <button class="video-prev-btn"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="video-next-btn"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                    <div class="video-card-slider">
                        @foreach ($videos as $video)
                            <x-video-card :video="$video" />
                        @endforeach
                    </div>
                </div>

                {{-- Client Forms --}}
                <div>
                    <div class="files-wrapper">
                        <h3>Client Forms</h3>
                    </div>
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
                                    <tr>
                                        <td>{{ $clientForm->file }}</td>
                                        <td>{{ $clientForm->label }}</td>
                                        <td>{{ str_replace('-', '/', explode(' ', $clientForm->updated_at)[0]) }}</td>
                                        <td>
                                            <a href="{{ route('client-forms.download', $clientForm->id) }}" download
                                                class="icon" title="Download">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Not Found!</td>
                                    </tr>
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

                {{-- General Forms --}}
                <div>
                    <div class="files-wrapper">
                        <h3>General Forms</h3>
                    </div>
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
                                            <a href="{{ route('general-forms.download', $generalForm->id) }}" class="icon">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Not Found!</td>
                                    </tr>
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
    </section>
@endsection

@push('scripts')
    {{-- Client & General Forms Pagination --}}
    <script>
        $(document).ready(function () {
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
                $pagination.on('click', '.page', function () {
                    currentPage = parseInt($(this).text());
                    updatePagination();
                });

                // Previous button
                $pagination.on('click', '.prev', function () {
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                    }
                });

                // Next button
                $pagination.on('click', '.next', function () {
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                    }
                });
            }

            // Iterate over all tables and their corresponding pagination controls
            $('.entries-table').each(function (index) {
                var $table = $(this);
                // Find the corresponding pagination (assumes pagination follows the table in DOM)
                var $pagination = $('.pagination.assign-pagination').eq(index);
                if ($table.length && $pagination.length) {
                    initPagination($table, $pagination);
                }
            });
        });
    </script>
@endpush
