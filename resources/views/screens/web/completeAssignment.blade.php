@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head">
                    <p>Complete Assignment</p>
                </div>
                <form action="">
                    <div class="row mb-5 row-gap-3">
                        <div class="col-md-2">
                            <label for="" class="custom-label">Appraisal Report</label>
                        </div>
                        <div class="col-lg-10">
                            <div class="d-flex gap-5 radio-wrap">
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor" class="" name="two-factor-auth"
                                        checked="">
                                    <label for="factor">No</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor2" class="" name="two-factor-auth">
                                    <label for="factor2">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 row-gap-3">
                        <div class="col-md-2">
                            <label for="" class="custom-label">Total Loss Summary</label>
                        </div>
                        <div class="col-lg-10">
                            <div class="d-flex gap-5 radio-wrap">
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor3" class="" name="two-factor-auth2"
                                        checked="">
                                    <label for="factor3">No</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor4" class="" name="two-factor-auth2">
                                    <label for="factor4">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="submit-btn">Cancel</button>
                            <button class="submit-btn bg-secondary">Complete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
