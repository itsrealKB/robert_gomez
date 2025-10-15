@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <section class="content" style="min-height: 100vh;">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <x-settings-tab/>
                    {{-- <div class="inner-head-wrap3">
                        <ul class="inner-head3 justify-content-start">
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Cycle Time Settings</li>
                            </a>
                            <!-- <a href="#" class="link text-decoration-none">
                                          <li class="inner-list inner-list-1">Appraiser Licenses Settings</li>
                                        </a> -->
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Appraiser Payroll</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Assignment Guidelines</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Appraiser Notes Settings</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Automated Mobile Upload</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Tax Settings</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Company Settings</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Logs</li>
                            </a>
                            <!-- <a href="#" class="link text-decoration-none">
                                  <li class="inner-list inner-list-1">County Tax Settings</li>
                                </a> -->
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Delete Files</li>
                            </a>
                            <!-- <a href="#" class="link text-decoration-none">
                                  <li class="inner-list inner-list-1">Emails</li>
                                </a> -->
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Assignment Templates</li>
                            </a>
                            <!-- <a href="#" class="link text-decoration-none">
                                  <li class="inner-list inner-list-1">Lock Assignments</li>
                                </a>
                                <a href="#" class="link text-decoration-none">
                                  <li class="inner-list inner-list-1">Multi Claim Settings</li>
                                </a> -->
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Notifications</li>
                            </a>
                            <a href="#" class="link text-decoration-none">
                                <li class="inner-list inner-list-1">Quick Messages</li>
                            </a>
                        </ul>
                    </div> --}}
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
