@extends('layouts.guest.app')

@push('styles')
    <style>
        label.error{
            color: crimson;
            margin-top: 5px;
        }
    </style>
@endpush

@section('section')
        <img src="{{ asset('assets/guest/images/banner-laptop.webp') }}" alt="" class="laptop-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-area">
                        <h1 class="banner-hd" data-aos="fade-up">Streamlining Claims and Appraisals <br> Smarter, Faster,
                            and More Secure</h1>
                        <p class="sec-para" data-aos="fade-up">Velocity revolutionizes how insurance claims and appraisals
                            are managed. <br> Our intelligent SaaS platform simplifies document handling, accelerates claims
                            <br> processing, and ensures complete transparency for insurers, adjusters, <br> and
                            policyholders — all in one powerful digital workspace.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="secondary-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Get
                                Started Today</a>
                            <a href="#" class="secondary-btn">Request a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-sec" id="about">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <h2 class="sec-hd" data-aos="fade-up">Empowering the Future of Claims and Appraisal Management</h2>
                    <p class="sec-para" data-aos="fade-up">Velocity is an innovative, cloud-based Claims & Appraisals
                        Management System designed to automate and digitize the insurance claims process from start to
                        finish. Our goal is simple — to redefine the claims process by minimizing paperwork, improving
                        turnaround times, and ensuring every stakeholder stays informed through a unified, cloud-secured
                        environment.
                    </p>
                    <ul>
                        <li>
                            <p class="sec-para">SaaS-based platform accessible anywhere, anytime</p>
                        </li>
                        <li>
                            <p class="sec-para">Automated document processing and report generation</p>
                        </li>
                        <li>
                            <p class="sec-para">Real-time dashboards with analytics and APIs</p>
                        </li>
                        <li>
                            <p class="sec-para">Compliance with HIPAA and GDPR standards</p>
                        </li>
                        <li>
                            <p class="sec-para">Scalable architecture supporting thousands of users</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/guest/images/about-sec-img.webp') }}" alt="" class="about-img" data-aos="fade-up">
    </section>
    <section class="package-sec" id="package">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-5">
                    <h1 class="sec-hd" data-aos="fade-up">The Pro Comparison</h1>
                    <div class="feature-wrapper">
                        <div class="accordion-heading">Velocity Features </div>
                        <div class="feature-box box" data-box-group="1">User Management & Access Control</div>
                        <div class="feature-box box" data-box-group="2">Claims Management</div>
                        <div class="feature-box box" data-box-group="3">Document Management</div>
                        <div class="feature-box box" data-box-group="4">Report Generation</div>
                        <div class="feature-box box" data-box-group="5">Communication Tools</div>
                        <div class="feature-box box" data-box-group="6">Velocity AI (Exclusive)</div>
                        <div class="feature-box box" data-box-group="7">Compliance & Security</div>
                        <div class="feature-box box" data-box-group="8">Integration Capabilities</div>
                        <div class="feature-box box" data-box-group="9">Dashboard & Analytics</div>
                        <div class="feature-box box" data-box-group="10">Performance & Scalability</div>
                        <div class="feature-box box" data-box-group="11">Administrative Tools</div>
                        <div class="feature-box box" data-box-group="12">Support & Training</div>
                        <div class="feature-box box" data-box-group="13">Future Enhancements</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-7">
                    <div class="swiper">
                        <div class="package-slider-wrapper swiper-wrapper">
                            <div class="slide-wrapper swiper-slide">
                                <div>
                                    <img src="{{ asset('assets/guest/images/pro.png') }}" alt="" data-aos="fade-up">
                                    <div class="accordion-heading accordion-heading-2">.</div>
                                    <div class="service-box box" data-box-group="1">
                                        <ul>
                                            <li>Multi-role Access (Admin, Adjuster, Policyholder, Agent)</li>
                                            <li>Two-Factor Authentication (2FA)</li>
                                            <li>Custom Permissions & Audit Trails</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="2">
                                        <ul>
                                            <li>Complete Claim Lifecycle Tracking</li>
                                            <li>Automated Claim Assignment</li>
                                            <li>Real-time Status Updates & SLAs</li>
                                            <li>Claim History & Analytics</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="3">
                                        <ul>
                                            <li>Unlimited File Uploads (PDF, DOCX, JPG, etc.)</li>
                                            <li>OCR Data Extraction</li>
                                            <li>Versioning & Revision History</li>
                                            <li>Secure Sharing Between Users</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="4">
                                        <ul>
                                            <li>Customizable Report Templates</li>
                                            <li>Export in PDF, Excel, and Word</li>
                                            <li>KPI Dashboard with Analytics</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="5">
                                        <ul>
                                            <li>In-app Messaging System</li>
                                            <li>Real-time Notifications & Alerts</li>
                                            <li>Email & SMS Updates</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="6">
                                        <ul>
                                            <li>AI-powered Claim Validation</li>
                                            <li>Fraud Detection Algorithms</li>
                                            <li>Predictive Analytics for Claim Outcomes</li>
                                            <li>Smart Workflow Automation</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="7">
                                        <ul>
                                            <li>HIPAA & GDPR Compliant</li>
                                            <li>AES-256 Encryption & SSL/TLS</li>
                                            <li>Full Audit Logs</li>
                                            <li>Data Backups & Monitoring</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="8">
                                        <ul>
                                            <li>EMS, CRM, ERP, and Third-party APIs</li>
                                            <li>Cloud Sync with AWS, Azure, Google Cloud</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="9">
                                        <ul>
                                            <li>Customizable Widgets & Graphs</li>
                                            <li>Real-time KPI Tracking</li>
                                            <li>Activity Overview</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="10">
                                        <ul>
                                            <li>Optimized for 10,000+ Users</li>
                                            <li>Load Balancing & Caching</li>
                                            <li>5-Second Document Upload Speed</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="11">
                                        <ul>
                                            <li>Full Control Panel for Roles, Users, and System Settings</li>
                                            <li>Monthly Audit Report Automation</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="12">
                                        <ul>
                                            <li>24/7 Priority Support</li>
                                            <li>40 Hours Free Onboarding & Training</li>
                                            <li>Knowledge Base Access</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="13">
                                        <ul>
                                            <li>AI Claim Forecasting</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-wrapper pro-slide swiper-slide">
                                <div>
                                    <img src="{{ asset('assets/guest/images/lite.png') }}" alt="" data-aos="fade-up">
                                    <div class="accordion-heading accordion-heading-2 bg-gray">.</div>
                                    <div class="service-box box" data-box-group="1">
                                        <ul>
                                            <li>Basic User Login</li>
                                            <li>Single-role Access</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="2">
                                        <ul>
                                            <li>Manual Claim Assignment</li>
                                            <li>Limited Claim Tracking</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="3">
                                        <ul>
                                            <li>Basic File Uploads</li>
                                            <li>No OCR Integration</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="4">
                                        <ul>
                                            <li>Standard Summary Reports Only</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="5">
                                        <ul>
                                            <li>Basic Email Notifications</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="6">
                                        <ul>
                                            <li>Not Available</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="7">
                                        <ul>
                                            <li>Standard Encryption Only</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="8">
                                        <ul>
                                            <li>Limited Integration Support</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="9">
                                        <ul>
                                            <li>Basic Dashboard Overview</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="10">
                                        <ul>
                                            <li>Limited to 500 Users</li>
                                            <li>Standard Performance</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="11">
                                        <ul>
                                            <li>Manual Administration</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="12">
                                        <ul>
                                            <li>Email Support Only</li>
                                        </ul>
                                    </div>
                                    <div class="service-box box" data-box-group="13">
                                        <ul>
                                            <li>Web Dashboard Only</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-sec" id="contact">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-6">
                    <video src="{{ asset('assets/guest/images/contact-video.webm') }}" autoplay="true" muted="true" loop="true" class="video2"
                        data-aos="fade-up">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-lg-6">
                    <h2 class="sec-hd" data-aos="fade-up">Contact Us</h2>
                    <form id="contact-form" data-aos="fade-up">
                        @csrf
                        <div class="field-wrapper">
                            <input type="text" placeholder="NAME" name="name" />
                        </div>
                        <div class="field-wrapper">
                            <input type="number" placeholder="PHONE" name="number" />
                        </div>
                        <div class="field-wrapper">
                            <input type="email" placeholder="EMAIL" name="email" />
                        </div>
                        <div class="field-wrapper mb-0">
                            <textarea name="message" placeholder="MESSAGE" ></textarea>
                        </div>
                        <button type="submit">SUBMIT NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        let swiper;

        function initSwiper() {
            if (window.innerWidth > 768 && !swiper) {
            swiper = new Swiper(".swiper", {
                direction: "horizontal",
                loop: true,
                slidesPerView: 2,
                autoplay: false,
            });
            } else if (window.innerWidth <= 768 && swiper) {
            swiper.destroy(true, true);
            swiper = null;
            }
        }

        initSwiper();
        window.addEventListener("resize", initSwiper);
    </script>
    <script>
        const lenis = new Lenis({
            autoRaf: true,
            duration: 2.6,
        });

        lenis.on('scroll', (e) => {
            // console.log(e);
        });
    </script>
    <script>
        AOS.init();
    </script>

    {{-- Register Form --}}
    <script>

        /* Validation */
        $("#register-form").validate({
            rules: {

                name : {
                    required : true,
                },

                email : {
                    required : true,
                    email : true,
                },

                phone : {
                    required : true,
                    number : true,
                },

                company_name : {
                    required : true,
                },

                company_name : {
                    required : true,
                },

                company_address : {
                    required : true,
                },

            },

            messages: {

                name : {
                    required : "Please Enter Your Name.",
                },

                email : {
                    required : "Please Enter Your Email.",
                    email : "Please Enter A Valid Email.",
                },

                phone : {
                    required : "Please Enter Your Phone Number.",
                    number : "Your Phone Number Should Be In Digits.",
                },

                company_name : {
                    required : "Please Enter Your Company Name.",
                },

                company_address : {
                    required : "Please Enter Your Company Address.",
                },
            }
        });

        /* Form Submittion */
        $("#register-form").on('submit', function(e){

            if(!$(this).valid())
            {
                return false;
            }

            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url : "{{ route('landing.page.register') }}",
                type : 'POST',
                data : formData,
                contentType : false,
                processData : false,

                beforeSend : function()
                {
                    $.LoadingOverlay('show');
                },

                success : function(response)
                {
                    $.LoadingOverlay('hide');
                    if(response.status)
                    {
                        Swal.fire({
                            title: "There's Information For You!",
                            text: response.message,
                            icon: 'info',
                            confirmButtonColor: '#0063C9',
                            confirmButtonText: 'OK'
                        }).then(e => {
                            window.location.reload();
                        })
                    }

                },

                error : function(error)
                {
                    $.LoadingOverlay('hide');
                    let message = error.responseJSON?.message ? error.responseJSON?.message : error.statusText;
                    Swal.fire({
                        title: "Something Went Wrong!",
                        text: message,
                        icon: 'error',
                        confirmButtonColor: '#0063C9',
                        confirmButtonText: 'OK'
                    });
                }

            });
        });

    </script>

    {{-- Contact Form --}}
    <script>

        /* Validation */
        $("#contact-form").validate({
            rules: {

                name : {
                    required : true,
                },

                number : {
                    required : true,
                    number : true,
                },

                email : {
                    required : true,
                    email : true,
                },

                message : {
                    required : true,
                },

            },

            messages: {

                name : {
                    required : "Please Enter Your Name.",
                },

                number : {
                    required : "Please Enter Your Phone Number.",
                    number : "Your Phone Number Should Be In Digits.",
                },

                email : {
                    required : "Please Enter Your Email.",
                    email : "Please Enter A Valid Email.",
                },

                message : {
                    required : "Please Enter Your Message.",
                },
            }
        });

        /* Form Submittion */
        $("#contact-form").on('submit', function(e){

            if(!$(this).valid())
            {
                return false;
            }

            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url : "{{ route('landing.page.contact') }}",
                type : 'POST',
                data : formData,
                contentType : false,
                processData : false,

                beforeSend : function()
                {
                    $.LoadingOverlay('show');
                },

                success : function(response)
                {
                    $.LoadingOverlay('hide');
                    if(response.status)
                    {
                        Swal.fire({
                            title: "There's Information For You!",
                            text: response.message,
                            icon: 'info',
                            confirmButtonColor: '#0063C9',
                            confirmButtonText: 'OK'
                        }).then(e => {
                            window.location.reload();
                        })
                    }

                },

                error : function(error)
                {
                    $.LoadingOverlay('hide');
                    let message = error.responseJSON?.message ? error.responseJSON?.message : error.statusText;
                    Swal.fire({
                        title: "Something Went Wrong!",
                        text: message,
                        icon: 'error',
                        confirmButtonColor: '#0063C9',
                        confirmButtonText: 'OK'
                    });
                }

            });
        });

    </script>

    {{-- News-Letter Form --}}
    <script>

        /* Validation */
        $("#newsletter-form").validate({
            rules: {

                email : {
                    required : true,
                    email : true,
                },
            },

            messages: {

                email : {
                    required : "Please Enter Your Email.",
                    email : "Please Enter A Valid Email.",
                },
            },

            errorPlacement : function(error, element) {
                if (element.attr("name") == "email") {
                    $("#newsletter-form").next("label.error").remove();
                    error.insertAfter("#newsletter-form");
                }
            },

            success: function (label, element) {
                $(label).remove();
            },

        });

        /* Form Submittion */
        $("#newsletter-form").on('submit', function(e){

            if(!$(this).valid())
            {
                return false;
            }

            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url : "{{ route('landing.page.news.letter') }}",
                type : 'POST',
                data : formData,
                contentType : false,
                processData : false,

                beforeSend : function()
                {
                    $.LoadingOverlay('show');
                },

                success : function(response)
                {
                    $.LoadingOverlay('hide');
                    if(response.status)
                    {
                        Swal.fire({
                            title: "There's Information For You!",
                            text: response.message,
                            icon: 'info',
                            confirmButtonColor: '#0063C9',
                            confirmButtonText: 'OK'
                        }).then(e => {
                            window.location.reload();
                        })
                    }

                },

                error : function(error)
                {
                    $.LoadingOverlay('hide');
                    let message = error.responseJSON?.message ? error.responseJSON?.message : error.statusText;
                    Swal.fire({
                        title: "Something Went Wrong!",
                        text: message,
                        icon: 'error',
                        confirmButtonColor: '#0063C9',
                        confirmButtonText: 'OK'
                    });
                }

            });
        });

    </script>
@endpush
