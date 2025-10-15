@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Condition Summary Report</p>
                </div>
                <div class="docs-wrapper report-wrapper p-0">
                    <form action="">
                        <div class="padding-class">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Appraiser Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row row-gap-3">
                                        <div class="col-md-3">
                                            <label for="name" class="custom-label">Last 6 of VIN</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="custom-input form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>INTERIOR</p>
                        </div>
                        <div class="padding-class mb-cl">
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Seats:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor1" class="" checked="" name="two-factor-auth">
                                                    <label for="factor1">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor2" class="" name="two-factor-auth">
                                                    <label for="factor2">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor3" class="" name="two-factor-auth">
                                                    <label for="factor3">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor4" class="" name="two-factor-auth">
                                                    <label for="factor4">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Carpets:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor5" class="" checked="" name="two-factor-auth2">
                                                    <label for="factor5">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor6" class="" name="two-factor-auth2">
                                                    <label for="factor6">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor7" class="" name="two-factor-auth2">
                                                    <label for="factor7">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor8" class="" name="two-factor-auth2">
                                                    <label for="factor8">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Dashboard:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor9" class="" checked="" name="two-factor-auth3">
                                                    <label for="factor9">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor10" class="" name="two-factor-auth3">
                                                    <label for="factor10">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor11" class="" name="two-factor-auth3">
                                                    <label for="factor11">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor12" class="" name="two-factor-auth3">
                                                    <label for="factor12">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Headliner:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor13" class="" checked="" name="two-factor-auth4">
                                                    <label for="factor13">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor14" class="" name="two-factor-auth4">
                                                    <label for="factor14">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor15" class="" name="two-factor-auth4">
                                                    <label for="factor15">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor16" class="" name="two-factor-auth4">
                                                    <label for="factor16">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>EXTERIOR</p>
                        </div>
                        <div class="padding-class mb-cl">
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Sheet Metal:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor17" class="" checked="" name="two-factor-auth5">
                                                    <label for="factor17">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor18" class="" name="two-factor-auth5">
                                                    <label for="factor18">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor19" class="" name="two-factor-auth5">
                                                    <label for="factor19">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor20" class="" name="two-factor-auth5">
                                                    <label for="factor20">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Trim:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor21" class="" checked="" name="two-factor-auth6">
                                                    <label for="factor21">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor22" class="" name="two-factor-auth6">
                                                    <label for="factor22">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor23" class="" name="two-factor-auth6">
                                                    <label for="factor23">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor24" class="" name="two-factor-auth6">
                                                    <label for="factor24">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Paint:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor25" class="" checked="" name="two-factor-auth7">
                                                    <label for="factor25">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor26" class="" name="two-factor-auth7">
                                                    <label for="factor26">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor27" class="" name="two-factor-auth7">
                                                    <label for="factor27">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor28" class="" name="two-factor-auth7">
                                                    <label for="factor28">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Glass:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor29" class="" checked="" name="two-factor-auth8">
                                                    <label for="factor29">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor30" class="" name="two-factor-auth8">
                                                    <label for="factor30">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor31" class="" name="two-factor-auth8">
                                                    <label for="factor31">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor32" class="" name="two-factor-auth8">
                                                    <label for="factor32">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>MECHANICAL</p>
                        </div>
                        <div class="padding-class mb-cl">
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Engine:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor33" class="" checked="" name="two-factor-auth9">
                                                    <label for="factor33">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor34" class="" name="two-factor-auth9">
                                                    <label for="factor34">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor35" class="" name="two-factor-auth9">
                                                    <label for="factor35">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor36" class="" name="two-factor-auth9">
                                                    <label for="factor36">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Transmission:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor37" class="" checked="" name="two-factor-auth10">
                                                    <label for="factor37">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor38" class="" name="two-factor-auth10">
                                                    <label for="factor38">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor39" class="" name="two-factor-auth10">
                                                    <label for="factor39">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor40" class="" name="two-factor-auth10">
                                                    <label for="factor40">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                        </div>
                        <div class="supplier-head">
                            <p>TIRES</p>
                        </div>
                        <div class="padding-class mb-cl">
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Front Tress:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor41" class="" checked="" name="two-factor-auth11">
                                                    <label for="factor41">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor42" class="" name="two-factor-auth11">
                                                    <label for="factor42">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor43" class="" name="two-factor-auth11">
                                                    <label for="factor43">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor44" class="" name="two-factor-auth11">
                                                    <label for="factor44">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-7">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label ">Rear Tires:</label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="d-flex gap-4 radio-wrap">
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor45" class="" checked="" name="two-factor-auth12">
                                                    <label for="factor45">Major Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor46" class="" name="two-factor-auth12">
                                                    <label for="factor46">Normal Wear</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor47" class="" name="two-factor-auth12">
                                                    <label for="factor47">Dealer Ready</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="radio" id="factor48" class="" name="two-factor-auth12">
                                                    <label for="factor48">Exceptional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="custom-input form-control" placeholder="Comments">
                                </div>
                            </div>
                            <div class="row row-gap-3">
                                <div class="col-lg-12">
                                    <div class="row row-gap-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label">UNREALATED PRIOR DAMAGES</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea name="" class="custom-input form-control" style="height: 172px; resize: none;" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-2">
                                            <label for="name" class="custom-label text-white">Buttons</label>
                                        </div>
                                        <div class="col-md-10">
                                            <button class="load-btn bg-primary">Save</button>
                                            <button class="load-btn">Save &amp; Generate</button>
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
