@extends('layouts.web.app')
@section('content')
    <style>
        .bid-wrapp .cont-left {
            width: 175px;
        }

        .bid-wrapp .cont-right {
            width: 430px;
        }
        .bid-wrapp-n .cont-left {
            width: 9%;
        }
        .bid-wrapp-n .cont-right {
            width: 91%;
        }
        .bidds-wrap {
            gap: 140px;
        }

        @media (max-width: 1540px) {
            .bidds-wrap {
                gap: 50px;
            }
        }
        @media (max-width: 1440px) {
            .bidds-wrap {
                flex-wrap: wrap !important;
                gap: 0;
            }
        }

        @media (max-width: 991px) {
            .bidds-wrap {
                flex-wrap: wrap
            }
        }

        @media (max-width: 1024px) {
            .bid-wrapp .cont-left, .bid-wrapp .cont-right {
                width: 100%;
            }
        }
    </style>
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Photos Only</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="row align-items-start">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Vehicle Year</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Mileage</label>
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
                                            <label for="name" class="custom-label">Vehicle Make</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">License</label>
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
                                            <label for="name" class="custom-label">Vehicle Model</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">VIN</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex  bidds-wrap">
                                <div>
                                    <div class="bid-wrapp">
                                        <div class="cont-left">
                                            <label for="" class="custom-label">Absorbers Collapsed</label>
                                        </div>
                                        <div class="cont-right">
                                            <div class="cont-inp cont-inp-2">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor1" class="" checked=""
                                                            name="two-factor-auth">
                                                        <label for="factor1">None</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor2" class=""
                                                            name="two-factor-auth">
                                                        <label for="factor2">Right</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor3" class=""
                                                            name="two-factor-auth">
                                                        <label for="factor3">Left</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor4" class=""
                                                            name="two-factor-auth">
                                                        <label for="factor4">Both Sides</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bid-wrapp">
                                        <div class="cont-left">
                                            <label for="" class="custom-label">Air Bags Deployed</label>
                                        </div>
                                        <div class="cont-right">
                                            <div class="cont-inp cont-inp-2">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor5" class=""
                                                            checked="" name="two-factor-auth1">
                                                        <label for="factor5">None</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor6" class=""
                                                            name="two-factor-auth1">
                                                        <label for="factor6">Right</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor7" class=""
                                                            name="two-factor-auth1">
                                                        <label for="factor7">Left</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor8" class=""
                                                            name="two-factor-auth1">
                                                        <label for="factor8">Both Sides</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bid-wrapp">
                                        <div class="cont-left">
                                            <label for="" class="custom-label">Abnormal Panel Gaps</label>
                                        </div>
                                        <div class="cont-right">
                                            <div class="cont-inp cont-inp-2">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor9" class=""
                                                            checked="" name="two-factor-auth2">
                                                        <label for="factor9">None</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor10" class=""
                                                            name="two-factor-auth2">
                                                        <label for="factor10">Right</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor11" class=""
                                                            name="two-factor-auth2">
                                                        <label for="factor11">Left</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor12" class=""
                                                            name="two-factor-auth2">
                                                        <label for="factor12">Both Sides</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                                <div>
                                    <div class="bid-wrapp">
                                        <div class="cont-left">
                                            <label for="" class="custom-label">Absorbers Compressed</label>
                                        </div>
                                        <div class="cont-right">
                                            <div class="cont-inp cont-inp-2">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor13" class=""
                                                            checked="" name="two-factor-auth3">
                                                        <label for="factor13">None</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor14" class=""
                                                            name="two-factor-auth3">
                                                        <label for="factor14">Right</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor15" class=""
                                                            name="two-factor-auth3">
                                                        <label for="factor15">Left</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor16" class=""
                                                            name="two-factor-auth3">
                                                        <label for="factor16">Both Sides</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bid-wrapp">
                                        <div class="cont-left">
                                            <label for="" class="custom-label">Compression Buckles</label>
                                        </div>
                                        <div class="cont-right">
                                            <div class="cont-inp cont-inp-2">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor17" class=""
                                                            checked="" name="two-factor-auth4">
                                                        <label for="factor17">None</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor18" class=""
                                                            name="two-factor-auth4">
                                                        <label for="factor18">Right</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor19" class=""
                                                            name="two-factor-auth4">
                                                        <label for="factor19">Left</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor20" class=""
                                                            name="two-factor-auth4">
                                                        <label for="factor20">Both Sides</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bid-wrapp">
                                        <div class="cont-left">
                                            <label for="" class="custom-label">Damages Attached</label>
                                        </div>
                                        <div class="cont-right">
                                            <div class="cont-inp cont-inp-2">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor21" class=""
                                                            checked="" name="two-factor-auth5">
                                                        <label for="factor21">Yes</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor22" class=""
                                                            name="two-factor-auth5">
                                                        <label for="factor22">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Point of Impact</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="" id="" class="course-select">
                                                <option value="Relevance">Select One</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp bid-wrapp-n">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Remarks</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <textarea name="" style="height: 172px; resize: none;" class="custom-input form-control" id=""
                                            cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp bid-wrapp-n">
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
