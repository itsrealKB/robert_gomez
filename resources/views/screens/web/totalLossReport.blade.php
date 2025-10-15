@extends('layouts.web.app')
<style>
    @media (max-width: 1280px) {
        .amir-panchayat-row2 .row {
            display: block !important;
        }
        .amir-panchayat-row2 .col-md-3 {
            width: 100%;
            margin-bottom: 10px;
        }
        .amir-panchayat-row2 .col-md-9 {
            width: 100%;
        }
    }
</style>
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Total Loss Report</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="row align-items-baseline amir-panchayat-row2">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Date Inspected</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="" id="" class="course-select">
                                                <option value="Relevance">Select</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Total Loss</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor5" class=""
                                                        name="two-factor-auth2" checked="">
                                                    <label for="factor5">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor6" class=""
                                                        name="two-factor-auth2">
                                                    <label for="factor6">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Borderline</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor10" class=""
                                                        name="two-factor-auth4" checked="">
                                                    <label for="factor10">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor11" class=""
                                                        name="two-factor-auth4">
                                                    <label for="factor11">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-baseline amir-panchayat-row2">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Towing</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$0.00 Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Storage per day</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$0.00 Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Day Since</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-baseline amir-panchayat-row2">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Inspection Location</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor1" class=""
                                                        name="two-factor-auth1" checked="">
                                                    <label for="factor1">SHop</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor2" class=""
                                                        name="two-factor-auth1">
                                                    <label for="factor2">Residence</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Inspection
                                                Location</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor3" class=""
                                                        name="two-factor-auth1" checked="">
                                                    <label for="factor3">Business</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor4" class=""
                                                        name="two-factor-auth1">
                                                    <label for="factor4">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Inspection Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$0.00 Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Old Damage</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-baseline amir-panchayat-row2 justify-content-end">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Overall Condition (Prior to
                                                Loss)</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor7" class=""
                                                        name="two-factor-auth3" checked="">
                                                    <label for="factor7">Good</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor8" class=""
                                                        name="two-factor-auth3">
                                                    <label for="factor8">Fair</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor9" class=""
                                                        name="two-factor-auth3">
                                                    <label for="factor9">Poor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Total Old Damage</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Retail Book Value</p>
                        </div>
                        <div class="padding-class">
                            <div class="row align-items-baseline">
                                <div class="col-lg-12">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Retail Base</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Mileage</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor12" class=""
                                                        name="two-factor-auth5" checked="">
                                                    <label for="factor12">High</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor13" class=""
                                                        name="two-factor-auth5">
                                                    <label for="factor13">Low</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Entry 1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Entry 2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Entry 3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Entry 4</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 4</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Entry 5</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 5</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Entry 6</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Entry 6</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Official Guide</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Edition Date</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Total Loss Basis</p>
                        </div>
                        <div class="padding-class">
                            <div class="row" style="align-items: unset !important;">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="row row-gap-3">
                                            <div class="col-md-3">
                                                <label for="name" class="custom-label text-white">0</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex gap-3 radio-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor14" class=""
                                                            name="two-factor-auth6" checked="">
                                                        <label for="factor14">ADP</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor15" class=""
                                                            name="two-factor-auth6">
                                                        <label for="factor15">CCC</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="radio" id="factor16" class=""
                                                            name="two-factor-auth6">
                                                        <label for="factor16">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 row-gap-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Request Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Retail Market Value</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">License Exp.</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Less: Old Damage</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Post Tax Additions</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3 ">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Vehicle DIverable</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor17" class="" checked
                                                        name="two-factor-auth7">
                                                    <label for="factor17">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor18" class=""
                                                        name="two-factor-auth7">
                                                    <label for="factor18">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Sales Tax Rate %</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">0</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Salvage Bids</p>
                        </div>
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Salvage Yard">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Salvage Yard">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Salvage Yard">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Salvage Pool</p>
                        </div>
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Salvage Yard</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Stall Number</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label ">Permission</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-3 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor19" class="" checked
                                                        name="two-factor-auth8">
                                                    <label for="factor19">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor20" class=""
                                                        name="two-factor-auth8">
                                                    <label for="factor20">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label">Appraisers Comment</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea name="" class="custom-input form-control" style="height: 172px; resize: none;" cols="30"
                                                rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">Buttons</label>
                                        </div>
                                        <div class="col-md-10">
                                            <button class="load-btn bg-primary">Save</button>
                                            <button class="load-btn">Save & Generate</button>
                                            <button class="load-btn" style="background-color: #FCB040">Hide IAS, Save
                                                & Generate</button>
                                        </div>
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
