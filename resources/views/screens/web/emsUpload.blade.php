@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>EMS Upload / Download</p>
                </div>
                <div class="docs-wrapper">
                    <div class="search-wrap">
                        <div class="search-left">
                            <button>Upload EMS</button>
                            <button>+ Add Files</button>
                            <button>Download All</button>
                            <button>Start Upload</button>
                            <button>Delete Selected</button>
                        </div>
                        <div class="search-right">
                            <div class=" position-relative">
                                <button class="head-search-icon" type="submit"><i
                                        class="fa-solid fa-magnifying-glass "></i></button>
                                <input type="text" class="head-search-input" placeholder="Search Assignment"
                                    name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="assign-table-2-wrap">
                        <table class="assign-table assign-table-2 assign-tab table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" id="parentCheckbox"></i></th>
                                    <th scope="col">Date & Time <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Type <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">File Name <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Author <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Size <i class="fa-solid fa-arrow-down"></i></th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox" class="childCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Download</a></li>
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox" class="childCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Download</a></li>
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox" class="childCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Download</a></li>
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox" class="childCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Download</a></li>
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" ">
                                    <td scope="row" style="align-content: center;"><input type="checkbox" class="childCheckbox"></td>
                                    <td>11/23/2024 2:48 pm CDT</td>
                                    <td><img src="{{ asset('assets/web/images/Table-image.png') }}" alt="file-type"></td>
                                    <td>Lorem Ipsum Dummy text.pdf</td>
                                    <td>Lorem Ipsum Dummy</td>
                                    <td>5.80 KB</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn elipse-btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu" style="">
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Download</a></li>
                                                <li class="drp-list"><a class="dropdown-item edit-btn"
                                                        href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <x-pagination />
                </div>
            </div>
        </div>
    </section>

    <script>
        const parentCheck = document.getElementById('parentCheckbox');
        const childChecks = document.querySelectorAll('.childCheckbox');

        parentCheck.addEventListener('change', function() {
            childChecks.forEach(checkbox => {
                checkbox.checked = parentCheck.checked;
            });
        });
    </script>
@endsection
