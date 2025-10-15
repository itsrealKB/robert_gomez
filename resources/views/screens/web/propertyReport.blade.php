@extends('layouts.web.app')
@section('content')
    <style>
        .bid-wrapp .cont-left {
            width: 9%;
        }

        .bid-wrapp .cont-right {
            width: 91%;
        }
    </style>
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Property Report</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="row align-items-start">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Replacement Cost</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Actual Cash Value</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Less: Depreciation</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Location of Property Damage</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Less: Deductible</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Comments</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <textarea name="" style="height: 172px; resize: none;" class="custom-input form-control" id=""
                                            cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label text-white">Comments</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp  w-100">
                                        <button class="load-btn bg-primary">Save</button>
                                        <button class="load-btn">Save &amp; Generate</button>
                                        <button class="load-btn" style="background-color: #FCB040">Hide IAS, Save &amp;
                                            Generate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
