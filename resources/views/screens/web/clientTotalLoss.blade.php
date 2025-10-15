@extends('layouts.web.app')
<style >
    .bid-wrapp-spec {
        flex-wrap: nowrap !important;
    }
    @media (max-width: 1024px) {
        .bid-wrapp-spec .cont-left {
            width: 15% !important;
        }
    }
    @media (max-width: 768px) {
    .bid-wrapp-spec .cont-left {
        width: 55% !important;
    }
}
</style>
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Total Loss</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="bid-wrapp bid-wrapp-spec ">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Enable NADA</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <input type="checkbox" id="shop2" class="custom-check">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Adjustments</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <input type="text" class="custom-input form-control" placeholder="$">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">UPD</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <input type="text" class="custom-input form-control" placeholder="$">
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
                            <div class="bid-wrapp bid-wrapp-spec">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Dealer Quotes</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <input type="checkbox" id="shop2" class="custom-check">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>Salvage Bids</p>
                        </div>
                        <div class="padding-class">
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">1</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Name">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Contact">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Phone">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">2</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Name">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Contact">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Phone">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">3</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Name">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Contact">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Phone">
                                    </div>
                                    <div class="cont-inp set-four">
                                        <input type="text" class="custom-input form-control" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label">Tax Rate</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <input type="text" class="custom-input form-control" placeholder="%">
                                    </div>
                                </div>
                            </div>
                            <div class="bid-wrapp">
                                <div class="cont-left">
                                    <label for="" class="custom-label text-white">-</label>
                                </div>
                                <div class="cont-right">
                                    <div class="cont-inp cont-inp-2">
                                        <div class="number-wrap">
                                            <p>Nada Book Value: 0.00</p>
                                            <p>Avg Dealer Quotes: 0.00</p>
                                            <p>Avg Nada &amp; Dealer Quotes: 0.00</p>
                                            <p>Tax Rate: 0.00</p>
                                            <p>Tax Amount: 0.00</p>
                                            <p>Adjustments: 0.00</p>
                                            <p>UPD: 0.00</p>
                                            <p>Suggested ACV: 0.00</p>
                                        </div>
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
