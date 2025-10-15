@extends('layouts.web.app')
<style>
    @media (max-width: 991px) {
        .amir-panchayat-row .col-md-5 {
            width: 25%
        }
        .amir-panchayat-row .col-lg-3 {
            width: 50% !important;
        }
    }

    @media (max-width: 768px) {
        .amir-panchayat-row .col-md-5 {
            width: 100%
        }
    }
    @media (max-width: 500px) {
        .amir-panchayat-row .col-lg-3 {
            width: 100% !important;
        }
    }
</style>
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Appraiser's Report</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Date Inspected</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="" id="" class="course-select">
                                                <option value="Relevance">Date</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Towing</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$0.00 Amount">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">LKQ Available</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor" class=""
                                                        name="two-factor-auth" checked="">
                                                    <label for="factor">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor2" class=""
                                                        name="two-factor-auth">
                                                    <label for="factor2">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Total Loss</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor3" class=""
                                                        name="two-factor-auth2" checked="">
                                                    <label for="factor3">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor4" class=""
                                                        name="two-factor-auth2">
                                                    <label for="factor4">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Storage per day</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$0.00 Amount">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Aftermarket available</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor45" class=""
                                                        name="two-factor-auth3" checked="">
                                                    <label for="factor45">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor6" class=""
                                                        name="two-factor-auth3">
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
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor7" class=""
                                                        name="two-factor-auth4" checked="">
                                                    <label for="factor7">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor8" class=""
                                                        name="two-factor-auth4">
                                                    <label for="factor8">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Day Since</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Reconditioned available</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor9" class=""
                                                        name="two-factor-auth5" checked="">
                                                    <label for="factor9">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor10" class=""
                                                        name="two-factor-auth5">
                                                    <label for="factor10">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Suppliers / Vendors</p>
                        </div>
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">LKQ</label>
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
                                            <label for="name" class="custom-label text-white">0</label>
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
                                            <label for="name" class="custom-label text-white">0</label>
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
                                            <label for="name" class="custom-label">Aftermarket</label>
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
                                            <label for="name" class="custom-label text-white">0</label>
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
                                            <label for="name" class="custom-label text-white">0</label>
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
                                            <label for="name" class="custom-label">Reconditioned</label>
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
                                            <label for="name" class="custom-label text-white">0</label>
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
                                            <label for="name" class="custom-label text-white">0</label>
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
                                            <label for="name" class="custom-label">Old Damage</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    {{-- <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Suggested Betterment</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Total Old Damage</label>
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
                                            <label for="name" class="custom-label">Inspection Location</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor11" class=""
                                                        name="two-factor-auth6" checked="">
                                                    <label for="factor11">Shop</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor12" class=""
                                                        name="two-factor-auth6">
                                                    <label for="factor12">Residence</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Suggested Total</label>
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
                                            <label for="name" class="custom-label">Betterment Total</label>
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
                                            <label for="name" class="custom-label text-white">Inspection
                                                Location</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor13" class=""
                                                        name="two-factor-auth6" checked="">
                                                    <label for="factor13">Business</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor14" class=""
                                                        name="two-factor-auth6">
                                                    <label for="factor14">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Inspection Location</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label">Overall Condition (Prior to
                                                Loss)</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor15" class=""
                                                        name="two-factor-auth9" checked="">
                                                    <label for="factor15">Good</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor16" class=""
                                                        name="two-factor-auth9">
                                                    <label for="factor16">Fair</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor17" class=""
                                                        name="two-factor-auth9">
                                                    <label for="factor17">Poor</label>
                                                </div>
                                            </div>
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
                                    <div class="row row-gap-3">
                                        <div class="col-lg-4">
                                            <div class="row m-0 row-gap-3">
                                                <div class="col-md-3">
                                                    <label for="name" class="custom-label">Mileage</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="d-flex gap-4 radio-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" id="factor18" class=""
                                                                name="two-factor-auth10" checked="">
                                                            <label for="factor18">High</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" id="factor19" class=""
                                                                name="two-factor-auth10">
                                                            <label for="factor19">Low</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row row-gap-3 m-0">
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
                            <p>Repair Cost</p>
                        </div>
                        <div class="padding-class">
                            <div class="row align-items-baseline">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Estimated Repair Cost</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Total Deductions</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Vehicle Driveable</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor20" class=""
                                                        name="two-factor-auth11" checked="">
                                                    <label for="factor20">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor21" class=""
                                                        name="two-factor-auth11">
                                                    <label for="factor21">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Betterment</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Days to Repair</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Owners Choice</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor22" class=""
                                                        name="two-factor-auth12" checked="">
                                                    <label for="factor22">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor23" class=""
                                                        name="two-factor-auth12">
                                                    <label for="factor23">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Deductible</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Net Amount</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="Lorem Ipsum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row amir-panchayat-row">
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-5">
                                            <label for="shop1" class="custom-label">Shop Copy Sent</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="checkbox" id="shop1" class="custom-check">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="row row-gap-3">
                                        <div class="col-md-5">
                                            <label for="shop2" class="custom-label">Owner Copy Sent</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="checkbox" id="shop2" class="custom-check">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-5">
                                            <label for="shop3" class="custom-label">Shop Copy Retained</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="checkbox" id="shop3" class="custom-check">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-5">
                                            <label for="shop4" class="custom-label">Owner Copy Retained</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="checkbox" id="shop4" class="custom-check">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 row-gap-3">
                                <div class="col-md-2">
                                    <label for="name" class="custom-label">Comments</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="" class="custom-input form-control" style="height: 172px; resize: none;" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label for="name" class="custom-label text-white">Buttons</label>
                                </div>
                                <div class="col-md-10   ">
                                    <button class="load-btn bg-primary">Save</button>
                                    <button class="load-btn">Save & Generate</button>
                                    <button class="load-btn" style="background-color: #FCB040">Hide IAS, Save &
                                        Generate</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
