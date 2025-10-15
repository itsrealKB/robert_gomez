@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Salvage Bids</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">1</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Name">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Contact">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Phone">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Amount">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Web Link">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">2</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Name">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Contact">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Phone">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Amount">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Web Link">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">3</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Name">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Contact">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Phone">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Amount">
                                    </div>
                                    <div class="cont-inp">
                                        <input type="text" class="custom-input form-control" placeholder="Web Link">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Comments</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <textarea name="" style="height: 172px; resize: none;" class="custom-input form-control" id="" cols="30" rows="10"></textarea>
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
                                        <button class="load-btn" style="background-color: #FCB040">Hide IAS, Save &amp; Generate</button>
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
