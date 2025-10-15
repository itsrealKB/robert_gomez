@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Appraisal Report</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="supplier-head mt-4">
                            <p>Info</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 align-items-baseline">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Date</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Contacted</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Recommedation</label>
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Inspected</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Owner Email</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Vehicle Information</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Years</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">License Plate #</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Make</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Color</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Model</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Meleage</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">VIN #</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Driveable</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Tire Information</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row column-row-parent ">
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Left Front</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Right Front</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Left Rear</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Right Rear</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Tire Size</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Vehicle Location</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Vehicle Location</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inp-wrapper retrive-wrap">
                                                <label for="" class="custom-label">Location Name</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                                    <button class="retrive-btn">Retrieve</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Address</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Zip/State/City</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Location Phone</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Location FAX</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">Labor Rate $</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row column-row-parent ">
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Body</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Refinish</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Mechanical</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Frame</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper">
                                                <label for="" class="custom-label">Paint Material</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Vehicle Repair Shop</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Repair Shop Name</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0 retrive-wrap">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                                    <button class="retrive-btn retrive-btn2">Retrieve</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Repair Shop Address</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Repair Shop Zip/State/City</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                {{-- <label for="" class="custom-label">Vehicle Location</label> --}}
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Location Phone</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">location Fax</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">TIN (shop only)</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Shop Contact Email</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Towing & Salvage</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row column-row-parent">
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Towing Charges</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Lien Fee</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Admin Fee</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Other Charges</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Storage Fee (per day)</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Storage Since</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Total Loss</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Total Loss %</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row column-row-parent ">
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Total Loss</label>
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select One</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Total Loss Valuation</label>
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select One</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Request #</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Valuation Amount</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">NADA Amount</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Estimate</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Deductible $0.00 Net Total $0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Appraisal Amount</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">UPD Amount</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Betterment Amount</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row ">
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Agreed Price</label>
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select One</option>
                                                    <option>Lorem Ipsum</option>
                                                    <option>Lorem Ipsum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Agreed By</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Days to Repair</label>
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="inp-wrapper m-0">
                                                <label for="" class="custom-label">Estimated Released</label>
                                                <select name="" id="" class="course-select">
                                                    <option value="Relevance">Select One</option>
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
                                    <label for="shop4" class="custom-label">Supplement Amount</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <div class="row column-row-parent ">
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Supplement #1">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Supplement #2">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Supplement #3">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Supplement #4">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inp-wrapper m-0">
                                                <input type="text" class="custom-input form-control" name=""
                                                    id="" placeholder="Supplement #5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Notes</p>
                        </div>
                        <div class="padding-class">
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label ">Appraiser Comments</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <textarea name="" class="custom-input form-control" style="height: 170px; resize: none;" id=""
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4 ">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">0</label>
                                </div>
                                <div class="col-md-10 check-wrapper">
                                    <button class="load-btn bg-primary">Save</button>
                                    <button class="load-btn">Save &amp; Generate</button>
                                    <button class="load-btn" style="background-color: #FCB040">Hide IAS, Save &amp;
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
