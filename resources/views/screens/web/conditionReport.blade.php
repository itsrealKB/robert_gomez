@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Condition Report</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="supplier-head mt-4">
                            <p>Repair Data</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">File Number</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Claim Number</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label custom-label-br">Client/ <br> Requeste Name</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Date of Inspection</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Name On Repair Order</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Repair Order Date</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Repair Order Number</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-lg-4">
                                    <div class="row m-0">
                                        <div class="col-md-4">
                                            <label for="shop4" class="custom-label">Driven or Towed In</label>
                                        </div>
                                        <div class="col-md-8 check-wrapper">
                                            <div class="row m-0">
                                                <div class="col-md-12">
                                                    <div class="d-flex gap-5 radio-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" id="factor500" class="" checked="" name="two-factor-auth300">
                                                            <label for="factor500">Towed</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" id="factor600" class="" name="two-factor-auth300">
                                                            <label for="factor600">Driven</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row m-0">
                                        <div class="col-md-4">
                                            <label for="shop4" class="custom-label">Is The "Check Engine" Light on</label>
                                        </div>
                                        <div class="col-md-8 check-wrapper">
                                            <div class="row m-0">
                                                <div class="col-md-12">
                                                    <div class="d-flex gap-5 radio-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" id="factor700" class="" checked="" name="two-factor-auth400">
                                                            <label for="factor700">Yes</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" id="factor800" class="" name="two-factor-auth400">
                                                            <label for="factor800">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Can We Obtain a Service History</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Vehicle Data</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Stock Number</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Vehicle Identification Number
                                        (VIN)</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Vehicle Body Style</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Vehicle</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Color</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Fuel Type</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Trim Level</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Emissions Check Expiration</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Registration Expiration</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Are Keys Available?</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <div class="d-flex gap-5 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor1" class="" checked=""
                                                        name="two-factor-auth">
                                                    <label for="factor1">Yes</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor2" class=""
                                                        name="two-factor-auth">
                                                    <label for="factor2">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Mileage Before Inspection</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Mileage After Test Drive</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Last Oil Change Sticker/Information</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Number Of Doors</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Engine Type</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Transmission Type</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="d-flex gap-5 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor3" class="" checked=""
                                                        name="two-factor-auth2">
                                                    <label for="factor3">Manual</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor4" class=""
                                                        name="two-factor-auth2">
                                                    <label for="factor4">Automatic</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Drive Type</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">OEM Tire Size</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Tires</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Right Front</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Size">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0 input-group">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Thread Depth">
                                                    <span class="input-group-text">/32</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Condition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Right Rear</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Size">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0 input-group">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Thread Depth">
                                                    <span class="input-group-text">/32</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Condition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Left Front</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Size">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0 input-group">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Thread Depth">
                                                    <span class="input-group-text">/32</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Condition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Left Rear</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Size">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0 input-group">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Thread Depth">
                                                    <span class="input-group-text">/32</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Condition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Spare</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Model">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Size">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0 input-group">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Thread Depth">
                                                    <span class="input-group-text">/32</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Condition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Comments</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <textarea name="" class="custom-input form-control" style="resize: none; height: 110px;" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Actual Tire Size And Tread</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Sign Of Abuse</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Sign Of Collision</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Exterior</p>
                        </div>
                        <div class="padding-class">
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Vehicles Identification of Door Jam</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor5" class="" checked="" name="two-factor-auth3">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor5">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor6" class="" name="two-factor-auth3">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor6">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor7" class="" name="two-factor-auth3">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor7">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Vehicles Identification Number On Dashboard</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor8" class="" checked="" name="two-factor-auth4">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor8">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor9" class="" name="two-factor-auth4">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor9">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor10" class="" name="two-factor-auth4">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor10">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Fronts Lab</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor11" class="" checked="" name="two-factor-auth5">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor11">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor12" class="" name="two-factor-auth5">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor12">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor13" class="" name="two-factor-auth5">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor13">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Rear Lamps</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor14" class="" checked="" name="two-factor-auth6">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor14">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor15" class="" name="two-factor-auth6">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor15">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor1500" class="" name="two-factor-auth6">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor1500">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Side Marker</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor16" class="" checked="" name="two-factor-auth7">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor16">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor17" class="" name="two-factor-auth7">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor17">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor18" class="" name="two-factor-auth7">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor18">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Frame/Unibody</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor19" class="" checked="" name="two-factor-auth8">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor19">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor20" class="" name="two-factor-auth8">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor20">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor21" class="" name="two-factor-auth8">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor21">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Roof Rack</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor31" class="" checked="" name="two-factor-auth12">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor31">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor32" class="" name="two-factor-auth12">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor32">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor33" class="" name="two-factor-auth12">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor33">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Door And Side Moldings</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor34" class="" checked="" name="two-factor-auth13">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor34">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor35" class="" name="two-factor-auth13">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor35">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor36" class="" name="two-factor-auth13">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor36">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Wiper Blades/Arms</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor37" class="" checked="" name="two-factor-auth14">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor37">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor38" class="" name="two-factor-auth14">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor38">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor39" class="" name="two-factor-auth14">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor39">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Rear Lamps</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor22" class="" checked="" name="two-factor-auth9">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor22">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor23" class="" name="two-factor-auth9">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor23">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor24" class="" name="two-factor-auth9">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor24">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Side Marker</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor25" class="" checked="" name="two-factor-auth10">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor25">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor26" class="" name="two-factor-auth10">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor26">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor27" class="" name="two-factor-auth10">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor27">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Frame/Unibody</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor28" class="" checked="" name="two-factor-auth11">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor28">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor29" class="" name="two-factor-auth11">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor29">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor30" class="" name="two-factor-auth11">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor30">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Check Engine Compartment For Fluid Leaks</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor40" class="" checked="" name="two-factor-auth15">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor40">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor41" class="" name="two-factor-auth15">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor41">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor42" class="" name="two-factor-auth15">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor42">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Check Transmission For Leaks</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor43" class="" checked="" name="two-factor-auth16">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor43">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor44" class="" name="two-factor-auth16">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor44">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor45" class="" name="two-factor-auth16">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor45">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Battery</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor46" class="" checked="" name="two-factor-auth17">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor46">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor47" class="" name="two-factor-auth17">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor47">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor48" class="" name="two-factor-auth17">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor48">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Fluid Level</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor49" class="" checked="" name="two-factor-auth18">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor49">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor50" class="" name="two-factor-auth18">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor50">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor51" class="" name="two-factor-auth18">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor51">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Belt Houses</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor52" class="" checked="" name="two-factor-auth19">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor52">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor53" class="" name="two-factor-auth19">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor53">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor54" class="" name="two-factor-auth19">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor54">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Frame/Unibody</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor55" class="" checked="" name="two-factor-auth20">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor55">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor56" class="" name="two-factor-auth20">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor56">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor57" class="" name="two-factor-auth20">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor57">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Exterior</p>
                        </div>
                        <div class="padding-class">
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Power Door locks</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor58" class="" checked="" name="two-factor-auth21">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor58">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor59" class="" name="two-factor-auth21">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor59">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor60" class="" name="two-factor-auth21">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor60">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Alarm</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor61" class="" checked="" name="two-factor-auth22">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor61">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor62" class="" name="two-factor-auth22">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor62">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor63" class="" name="two-factor-auth22">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor63">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Back Up Camera</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor64" class="" checked="" name="two-factor-auth23">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor64">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor65" class="" name="two-factor-auth23">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor65">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor66" class="" name="two-factor-auth23">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor66">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Navigation/ Entertainment System</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor67" class="" checked="" name="two-factor-auth24">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor67">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor68" class="" name="two-factor-auth24">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor68">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor69" class="" name="two-factor-auth24">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor69">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Owners Manual</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor70" class="" checked="" name="two-factor-auth25">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor70">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor71" class="" name="two-factor-auth25">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor71">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor72" class="" name="two-factor-auth25">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor72">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">CD/DVD</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor73" class="" checked="" name="two-factor-auth26">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor73">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor74" class="" name="two-factor-auth26">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor74">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor75" class="" name="two-factor-auth26">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor75">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Radio/Speaker</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor76" class="" checked="" name="two-factor-auth27">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor76">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor77" class="" name="two-factor-auth27">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor77">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor78" class="" name="two-factor-auth27">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor78">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Cooled/Heated Seats</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor79" class="" checked="" name="two-factor-auth28">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor79">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor80" class="" name="two-factor-auth28">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor80">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor81" class="" name="two-factor-auth28">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor81">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">AC/Heater</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor82" class="" checked="" name="two-factor-auth29">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor82">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor83" class="" name="two-factor-auth29">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor83">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor84" class="" name="two-factor-auth29">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor84">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Trunk Release</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor85" class="" checked="" name="two-factor-auth30">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor85">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor86" class="" name="two-factor-auth30">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor86">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor87" class="" name="two-factor-auth30">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor87">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Tilt Steering Column Functions</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor88" class="" checked="" name="two-factor-auth31">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor88">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor89" class="" name="two-factor-auth31">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor89">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor90" class="" name="two-factor-auth31">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor90">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Parking Brake</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor91" class="" checked="" name="two-factor-auth32">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor91">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor92" class="" name="two-factor-auth32">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor92">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor93" class="" name="two-factor-auth32">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor93">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Demo Light</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor94" class="" checked="" name="two-factor-auth33">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor94">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor95" class="" name="two-factor-auth33">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor95">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor96" class="" name="two-factor-auth33">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor96">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Knobs Button And Other Controls</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor97" class="" checked="" name="two-factor-auth34">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor97">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor98" class="" name="two-factor-auth34">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor98">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor99" class="" name="two-factor-auth34">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor99">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Horn Functions</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor100" class="" checked="" name="two-factor-auth35">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor100">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor101" class="" name="two-factor-auth35">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor101">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor102" class="" name="two-factor-auth35">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor102">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Hood Release</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor103" class="" checked="" name="two-factor-auth36">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor103">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor104" class="" name="two-factor-auth36">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor104">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor105" class="" name="two-factor-auth36">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor105">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Hazard Lights</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor106" class="" checked="" name="two-factor-auth37">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor106">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor107" class="" name="two-factor-auth37">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor107">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor108" class="" name="two-factor-auth37">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor108">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Power Mirrors</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor109" class="" checked="" name="two-factor-auth38">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor109">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor110" class="" name="two-factor-auth38">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor110">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor111" class="" name="two-factor-auth38">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor111">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Power Seats</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor112" class="" checked="" name="two-factor-auth39">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor112">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor113" class="" name="two-factor-auth39">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor113">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor114" class="" name="two-factor-auth39">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor114">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Power Sunrrof</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor115" class="" checked="" name="two-factor-auth40">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor115">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor116" class="" name="two-factor-auth40">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor116">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor117" class="" name="two-factor-auth40">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor117">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Seatsbelts</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor118" class="" checked="" name="two-factor-auth41">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor118">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor119" class="" name="two-factor-auth41">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor119">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor120" class="" name="two-factor-auth41">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor120">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Powers Window</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor121" class="" checked="" name="two-factor-auth42">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor121">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor122" class="" name="two-factor-auth42">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor122">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor123" class="" name="two-factor-auth42">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor123">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Carpet-Front</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor124" class="" checked="" name="two-factor-auth43">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor124">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor125" class="" name="two-factor-auth43">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor125">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor126" class="" name="two-factor-auth43">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor126">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Warning Lights</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor127" class="" checked="" name="two-factor-auth44">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor127">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor128" class="" name="two-factor-auth44">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor128">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor129" class="" name="two-factor-auth44">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor129">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Headliner Conditions</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor130" class="" checked="" name="two-factor-auth45">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor130">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor131" class="" name="two-factor-auth45">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor131">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor132" class="" name="two-factor-auth45">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor132">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Convertible Top Operational</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor133" class="" checked="" name="two-factor-auth46">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor133">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor134" class="" name="two-factor-auth46">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor134">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor135" class="" name="two-factor-auth46">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor135">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Interior Trims</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor136" class="" checked="" name="two-factor-auth47">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor136">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor137" class="" name="two-factor-auth47">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor137">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor138" class="" name="two-factor-auth47">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor138">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-5">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Cargo Area Carpet</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor139" class="" checked="" name="two-factor-auth48">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor139">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor140" class="" name="two-factor-auth48">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor140">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor141" class="" name="two-factor-auth48">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor141">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">First Aid Kit If Application</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor142" class="" checked="" name="two-factor-auth49">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor142">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor143" class="" name="two-factor-auth49">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor143">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor144" class="" name="two-factor-auth49">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor144">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Spare Tire</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor145" class="" checked="" name="two-factor-auth50">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor145">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor146" class="" name="two-factor-auth50">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor146">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor147" class="" name="two-factor-auth50">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor147">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="exterior-wrap mb-4">
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Tailgate Closing Assist</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor148" class="" checked="" name="two-factor-auth51">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor148">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor149" class="" name="two-factor-auth51">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor149">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor150" class="" name="two-factor-auth51">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor150">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Toolkit Complete</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor151" class="" checked="" name="two-factor-auth52">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor151">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor152" class="" name="two-factor-auth52">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor152">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor153" class="" name="two-factor-auth52">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor153">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="exterior-inner">
                                    <div class="exter-label-wrap">
                                        <label for="shop4" class="custom-label">Spare Tire</label>
                                    </div>
                                    <div class="d-flex gap-2 radio-wrap" style="flex-direction: column">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor154" class="" checked="" name="two-factor-auth53">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square1"></div>
                                                <label for="factor154">Item inspected and is ok</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor155" class="" name="two-factor-auth53">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square2"></div>
                                                <label for="factor155">Item inspected and Contain an issue</label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="radio" id="factor156" class="" name="two-factor-auth53">
                                            <div class="d-flex gap-3">
                                                <div class="radio-square radio-square3"></div>
                                                <label for="factor156">Item is not present or couldn't be inspected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <input class="chat-file-input" multiple="" type="file" name="" id="msg-file" hidden="">
                                        <label class="file-label" for="msg-file">Choose Main Photo For Report  <i class="fa-solid fa-arrow-up-from-bracket mx-4"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Vehicles Damage</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 align-items-start"> 
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Damage <button style="border: none; background: transparent;"><i class="fa-solid fa-plus"></i></button></label>
                                </div>
                                <div class="col-md-10 check-wrapper"></div>
                            </div>
                            <div class="row mb-4 align-items-start">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Damage <button style="border: none; background: transparent;"><i class="fa-solid fa-plus"></i></button></label>
                                </div>
                                <div class="col-md-10 check-wrapper"></div>
                            </div>
                            <div class="row mb-4 align-items-start">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Additional Item to be Noted</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <textarea name="" class="custom-input form-control" style="resize: none; height: 99px;" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 align-items-start">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Comments</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <textarea name="" class="custom-input form-control" style="resize: none; height: 99px;" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 align-items-start">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">Comments</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                <button class="load-btn bg-primary">Save</button>
                                                <button class="load-btn">Save &amp; Generate</button>
                                                <button class="load-btn" style="background-color: #FCB040">Hide IAS, Save &amp; Generate</button>
                                            </div>
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
