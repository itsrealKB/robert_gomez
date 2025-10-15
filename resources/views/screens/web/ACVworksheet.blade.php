@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>ACV Worksheet</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="shop2" class="custom-label">Enable NADA</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="checkbox" id="shop2" class="custom-check">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Adjustments</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">UPD</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="$">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label">Comments</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea name="" class="custom-input form-control" style="height: 172px; resize: none;" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Dealer Quotes</p>
                        </div>
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Dealer Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">1</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Dealer Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">2</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Dealer Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label text-white">3</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Tax Rate</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="d-flex justify-content-between number-wrap flex-wrap gap-1">
                                        <p>Nada Book Value: 0.00</p>
                                        <p>Avg Dealer Quotes: 0.00</p>
                                        <p>Avg Nada & Dealer Quotes: 0.00</p>
                                        <p>Tax Rate: 0.00</p>
                                        <p>Tax Amount: 0.00</p>
                                        <p>Adjustments: 0.00</p>
                                        <p>UPD: 0.00</p>
                                        <p>Suggested ACV: 0.00</p>
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
