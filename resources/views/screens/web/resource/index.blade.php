@extends('layouts.web.app')
@section('content')
    @php
        $docs = [
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'doc-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'doc-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'doc-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'doc-card-img.png',
            ],
            [
                'title' => 'Knowledgebase.docx',
                'label' => 'IAS KNOWLEDGE BASE',
                'date' => '04/09/2024',
                'img' => 'doc-card-img.png',
            ],
        ];

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
                    <h2>Useful Resources</h2>
                    <p>View your list of active resources below.</p>
                </div>
                <div class="files-wrapper">
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
                </div>
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
                <div>
                    <div class="files-wrapper">
                        <h3>Enteries</h3>
                    </div>
                    <div class="entry-table-wrap">
                        <table class="table entries-table2">
                            <thead>
                                <tr>
                                    @foreach ($headers as $header)
                                        <th scope="col" style="background: #8E8E8E !important; color: white !important;">{{ $header }} <i class="fa-solid fa-arrow-down"></i></th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($entries as $entry)
                                    <tr class="{{ $loop->index % 2 === 1 ? 'bg-changed' : '' }}">
                                        @foreach ($entry as $key => $value)
                                            <td>{{ $value }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="load-btn">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
