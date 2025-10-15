@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Rename Files</p>
                </div>
                <div class="docs-wrapper docs-wrapper-2">
                    <div class="file-para">
                        <p>Files names can only contain characters, please use underscores instead of spaces</p>
                    </div>
                    <div class="update-area">
                        <form action="">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <img src="{{ asset('assets/web/images/Table-image.png') }}" alt="">
                                        </div>
                                        <div>
                                            <label for="" class="custom-label">From</label>
                                        </div>
                                        <div>
                                            <select name="" id="" class="course-select">
                                                <option value="Relevance">Select</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <label for="" class="custom-label">To</label>
                                        </div>
                                        <div>
                                            <input type="text" class="custom-input form-control" placeholder="Rename">
                                        </div>
                                        <div>
                                            <button class="submit-btn">UPDATE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="update-area" style="background-color: #E4E4E4;">
                        <form action="">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <img src="{{ asset('assets/web/images/Table-image.png') }}" alt="">
                                        </div>
                                        <div>
                                            <label for="" class="custom-label">From</label>
                                        </div>
                                        <div>
                                            <select name="" id="" class="course-select">
                                                <option value="Relevance">Select</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <label for="" class="custom-label">To</label>
                                        </div>
                                        <div>
                                            <input type="text" class="custom-input form-control" placeholder="Rename">
                                        </div>
                                        <div>
                                            <button class="submit-btn">UPDATE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="update-area">
                        <form action="">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <img src="{{ asset('assets/web/images/Table-image.png') }}" alt="">
                                        </div>
                                        <div>
                                            <label for="" class="custom-label">From</label>
                                        </div>
                                        <div>
                                            <select name="" id="" class="course-select">
                                                <option value="Relevance">Select</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <label for="" class="custom-label">To</label>
                                        </div>
                                        <div>
                                            <input type="text" class="custom-input form-control" placeholder="Rename">
                                        </div>
                                        <div>
                                            <button class="submit-btn">UPDATE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
