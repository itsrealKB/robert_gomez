@extends('layouts.web.app')

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
                <div class="date-content-wrap">
                    <div class="date-wrap">
                        <p>Date Range</p>
                        <input type="date" name="" id="">
                        <input type="date" name="" id="">
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <button class="load-btn bg-primary">Run</button>
                        <button class="load-btn">Download CSV</button>
                    </div>
                </div>
                <div class="report-wrapper">
                    <div class="files-wrapper">
                        <h3>Reporting</h3>
                    </div>
                    <div class="report-box-wrapper">
                        <div class="report-box">
                            <h3>Total Assignments</h3>
                            <h2>246K</h2>
                            <p><i class="fa-solid fa-arrow-down"></i> 13.8%</p>
                        </div>
                        <div class="report-box">
                            <h3>Pending Assignments</h3>
                            <h2>2453</h2>
                            <p><i class="fa-solid fa-arrow-up" style="color: green;"></i> 13.8%</p>
                        </div>
                        <div class="report-box">
                            <h3>Rejected Pending</h3>
                            <h2>$39K</h2>
                            <p><i class="fa-solid fa-arrow-down"></i> 13.8%</p>
                        </div>
                    </div>
                    <div>
                        <div class="files-wrapper">
                            <h3>Enteries</h3>
                        </div>
                        <x-entries-table :entries="$entries" :headers="$headers" />
                        <div class="d-flex justify-content-center">
                            <button class="load-btn">Load More</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
