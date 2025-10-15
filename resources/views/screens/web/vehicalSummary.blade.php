@extends('layouts.web.app')
<style>
    @media (max-width: 1560px) {
        .veh-sec .col-md-2 {
            width: 100% !important;
        }
    }
    @media (max-width: 500px) {
        .spec-check {
            flex-wrap: wrap !important;
        }
    }
</style>
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Vehicles Option Summary</p>
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
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">SEATS:</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap ">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check1" class="custom-check">
                                        <label for="check1" class="custom-label">Leather Seats</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check2" class="custom-check">
                                        <label for="check2" class="custom-label">Power Drvr Seat</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check3" class="custom-check">
                                        <label for="check3" class="custom-label">Power Pass seat</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check4" class="custom-check">
                                        <label for="check4" class="custom-label">Heated Seats</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check5" class="custom-check">
                                        <label for="check5" class="custom-label">Cooled seats</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">TRANSMISSION</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check6" class="custom-check">
                                        <label for="check6" class="custom-label">Auto</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check7" class="custom-check">
                                        <label for="check7" class="custom-label">Manual</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check8" class="custom-check">
                                        <label for="check8" class="custom-label">AWD</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check9" class="custom-check">
                                        <label for="check9" class="custom-label">4WD</label>
                                    </div>
                                    <div class="check-wrp d-flex align-items-center gap-3 spec-check">
                                        <div class="d-flex align-items-center gap-3">
                                            <input type="checkbox" id="check10" class="custom-check">
                                            <label for="check10" class="custom-label">Other</label>
                                        </div>
                                        <div>
                                            <input type="text" class="custom-input form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">TOWING</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check11" class="custom-check">
                                        <label for="check11" class="custom-label">Bumper Hitch</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check12" class="custom-check">
                                        <label for="check12" class="custom-label">Receiver Hitch</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check13" class="custom-check">
                                        <label for="check13" class="custom-label">Gooseneck</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check14" class="custom-check">
                                        <label for="check14" class="custom-label">Aftmkt</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check15" class="custom-check">
                                        <label for="check15" class="custom-label">5th Wheel Hitch</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check16" class="custom-check">
                                        <label for="check16" class="custom-label">Tow Hitch Assit</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check17" class="custom-check">
                                        <label for="check17" class="custom-label">Tow Backing Assit</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check18" class="custom-check">
                                        <label for="check18" class="custom-label">Trailer Brake Control</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">TOWING</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="d-flex align-items-center gap-3 radio-wrap">
                                        <input type="radio" id="factor1" class="" checked="" name="two-factor-auth">
                                        <label for="factor1">Other 1</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="custom-input form-control"
                                    placeholder="">
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3">

                            </div>
                            <div class="row mb-4 row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">none</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="d-flex align-items-center gap-3 radio-wrap">
                                        <input type="radio" id="factor1" class="" checked="" name="two-factor-auth">
                                        <label for="factor1">Other 2</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="custom-input form-control"
                                    placeholder="">
                                </div>
                            </div>
                            <div class="row mb-5 align-items-baseline row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">CONV & EXTERIOR</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check19" class="custom-check">
                                        <label for="check19" class="custom-label">Memory Pkg</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check20" class="custom-check">
                                        <label for="check20" class="custom-label">Communication Pkg</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check21" class="custom-check">
                                        <label for="check21" class="custom-label">Navigation Pkg</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check22" class="custom-check">
                                        <label for="check22" class="custom-label">Entertainment Pkg</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check23" class="custom-check">
                                        <label for="check23" class="custom-label">Dual Climate Citr</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check24" class="custom-check">
                                        <label for="check24" class="custom-label">Rear AC</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check25" class="custom-check">
                                        <label for="check25" class="custom-label">Heated Mirrors</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check26" class="custom-check">
                                        <label for="check26" class="custom-label">Remote Start</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check27" class="custom-check">
                                        <label for="check27" class="custom-label">Adaptive Cruise</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check28" class="custom-check">
                                        <label for="check28" class="custom-label">Auto Parking Assist</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check29" class="custom-check">
                                        <label for="check29" class="custom-label">Fog Lamps</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check30" class="custom-check">
                                        <label for="check30" class="custom-label">Spoiler</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check31" class="custom-check">
                                        <label for="check31" class="custom-label">Sport Body Mogs</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check32" class="custom-check">
                                        <label for="check32" class="custom-label">Tinted Glass</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check33" class="custom-check">
                                        <label for="check33" class="custom-label">3nd Row Seating</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check34" class="custom-check">
                                        <label for="check34" class="custom-label">Three Stage Pnt</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check35" class="custom-check">
                                        <label for="check35" class="custom-label">Metallic Pnt</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check36" class="custom-check">
                                        <label for="check36" class="custom-label">Two Tone</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check37" class="custom-check">
                                        <label for="check37" class="custom-label">Privacy Tint</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check38" class="custom-check">
                                        <label for="check38" class="custom-label">Rear Wiper</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check39" class="custom-check">
                                        <label for="check39" class="custom-label">110v Power Invert</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5 align-items-baseline row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">ROOF</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check40" class="custom-check">
                                        <label for="check40" class="custom-label">Sunroof</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check41" class="custom-check">
                                        <label for="check41" class="custom-label">Dual Pwr Sunroof</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check42" class="custom-check">
                                        <label for="check42" class="custom-label">Lugage Rack</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check43" class="custom-check">
                                        <label for="check43" class="custom-label">Full Glass</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check44" class="custom-check">
                                        <label for="check44" class="custom-label">Jeep Soft Top</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check45" class="custom-check">
                                        <label for="check45" class="custom-label">Jeep Hard Top</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check46" class="custom-check">
                                        <label for="check46" class="custom-label">Soft Convertible</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check47" class="custom-check">
                                        <label for="check47" class="custom-label">Hard Convertible</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5 align-items-baseline row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">WHEELS</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check48" class="custom-check">
                                        <label for="check48" class="custom-label">Alum Alioy</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check49" class="custom-check">
                                        <label for="check49" class="custom-label">Chrome</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check50" class="custom-check">
                                        <label for="check50" class="custom-label">20" Plus</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check51" class="custom-check">
                                        <label for="check51" class="custom-label">Altermakt</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check52" class="custom-check">
                                        <label for="check52" class="custom-label">Wheel Locks</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5 align-items-baseline row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">SAFETY/BRAKES</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check53" class="custom-check">
                                        <label for="check53" class="custom-label">Trac Control</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check54" class="custom-check">
                                        <label for="check54" class="custom-label">4 Wheel Disc</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check55" class="custom-check">
                                        <label for="check55" class="custom-label">ABS</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check56" class="custom-check">
                                        <label for="check56" class="custom-label">Auto Level</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check57" class="custom-check">
                                        <label for="check57" class="custom-label">Park Sensors</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check58" class="custom-check">
                                        <label for="check58" class="custom-label">Lane Depart Wam</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check59" class="custom-check">
                                        <label for="check59" class="custom-label">Active Lane Depart</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check60" class="custom-check">
                                        <label for="check60" class="custom-label">Front Camera</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check61" class="custom-check">
                                        <label for="check61" class="custom-label">360 Camera</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check62" class="custom-check">
                                        <label for="check62" class="custom-label">HID Lamps</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check63" class="custom-check">
                                        <label for="check63" class="custom-label">Adaptive Lamps.</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check64" class="custom-check">
                                        <label for="check64" class="custom-label">Xenon Lamps</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-4 align-items-baseline    row-gap-3">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">TRUCK SUV</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check65" class="custom-check">
                                        <label for="check65" class="custom-label">Running Boards</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check66" class="custom-check">
                                        <label for="check66" class="custom-label">Active Run Boards</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check67" class="custom-check">
                                        <label for="check67" class="custom-label">Bed Cap Covers</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check68" class="custom-check">
                                        <label for="check68" class="custom-label">Grille Guard</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check69" class="custom-check">
                                        <label for="check69" class="custom-label">Headache Rack</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check70" class="custom-check">
                                        <label for="check70" class="custom-label">Red Count-Roll</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check71" class="custom-check">
                                        <label for="check71" class="custom-label">Bed Cover Folding</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check72" class="custom-check">
                                        <label for="check72" class="custom-label">Bed Cover</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check73" class="custom-check">
                                        <label for="check73" class="custom-label">Tonnue Fiberglass</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check74" class="custom-check">
                                        <label for="check74" class="custom-label">Bedliner-Sprau In</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check75" class="custom-check">
                                        <label for="check75" class="custom-label">Bedliner-Insert</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check76" class="custom-check">
                                        <label for="check76" class="custom-label">Toolbox</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check77" class="custom-check">
                                        <label for="check77" class="custom-label">Step Assist Tailgate</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check78" class="custom-check">
                                        <label for="check78" class="custom-label">Winch</label>
                                    </div>
                                    <div class="check-wrp">
                                        <input type="checkbox" id="check79" class="custom-check">
                                        <label for="check79" class="custom-label">Cabover Lamps</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3 align-items-start">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label">ADDITIONAL OPTION NOTES</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <textarea name="" class="custom-input form-control" style="resize: none; height: 170px;" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4 row-gap-3 align-items-start">
                                <div class="col-md-2">
                                    <label for="shop4" class="custom-label text-white">none</label>
                                </div>
                                <div class="col-md-10 d-flex align-items-center check-wrapper flex-wrap">
                                    <button class="load-btn bg-primary">Save</button>
                                    <button class="load-btn">Save &amp; Generate</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
