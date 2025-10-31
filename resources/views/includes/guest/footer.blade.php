<footer class="footer">
    <div class="container">
        <div class="row row-gap-5">
            <div class="col-lg-4 col-md-6 col-sm-12 order-2 order-md-1 " data-aos="fade-up">
                <div class="d-flex dot-box align-items-center">
                    <i class="fa-solid fa-circle fa-fade"></i>
                    <h6 class="mb-0">Company</h6>
                </div>
                <ul class="p-0 m-0 animate">
                    <li><a href="#about">About Velocity</a></li>
                    <li><a href="#package">The Pro Comparison</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 order-1 order-md-2 " data-aos="fade-up">
                <div class="f-logo-wrap">
                    <a href="">
                        <img src="{{ asset('assets/guest/images/logo.webp') }}" alt="" class="footer-logo">
                    </a>
                </div>
                <div class="social-icons-area">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/velocitypro/"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 order-3" data-aos="fade-up">
                <h4>Email Newsletter</h4>
                <h5>Get the Latest Inspiration & Insights</h5>
                <form id="newsletter-form" class="news-letter-form">
                    @csrf
                    <input type="email" name="email" placeholder="Your Email">
                    <button type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="bottom-bar">
    <div class="container">
        <div class="d-flex align-items-baseline justify-content-between">
            <p>© Copyright 2025 <a href="#">Velocity Pro</a>. All rights Reserved</p>
            <p>Design & Developed by: <a href="https://www.webdesignglory.com/" target="_blank">Web Design Glory</a></p>
        </div>
    </div>
</div>

<!-- Register Modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Register Now</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form role="form" id="register-form">
                    @csrf
                    <div class="inp-wrap">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" />
                    </div>
                    <div class="inp-wrap">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" />
                    </div>
                    <div class="inp-wrap">
                        <label for="phone" class="form-label">Phone</label>
                        <input class="form-control" name="phone" id="phone" placeholder="Your Number" type="number" />
                    </div>
                    <div class="inp-wrap">
                        <label for="company-name" class="form-label">Company Name</label>
                        <input class="form-control" name="company_name" id="company-name" placeholder="Your Company Name" type="text" />
                    </div>
                    <div class="inp-wrap">
                        <label for="company-address" class="form-label">Company Address</label>
                        <input class="form-control" name="company_address" id="company-address" placeholder="Your Company Address" type="text" />
                    </div>
                    <button class="secondary-btn" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal  -->

<script src="{{ asset('assets/guest/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/lenis@1.3.11/dist/lenis.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- Sweet Alert & Loader --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

{{-- Validation Scripts Start --}}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
@stack('scripts')
</body>
</html>
