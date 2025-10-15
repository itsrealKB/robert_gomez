@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head">
                    <p>Re-Open Assignment</p>
                </div>
                <form action="">
                    <div class="row mb-5 row-gap-3">
                        <div class="col-md-2">
                            <label for="" class="custom-label">Email Notification</label>
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
                    <div class="row mb-5 align-items-center row-gap-3">
                        <div class="col-md-2">
                            <label for="" class="custom-label">Action</label>
                        </div>
                        <div class="col-md-5">
                            <select name="" id="" class="course-select">
                                <option value="Relevance">Select</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h1 class="d-none">jj</h1>
                        </div>
                        <div class="col-md-10">
                            <button class="submit-btn">Cancel</button>
                            <button class="submit-btn bg-secondary">Re-Open</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
