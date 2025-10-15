<div class="side-bar ">
    <ul class="main-lists">
        <div class="menu-lists-child-1">
            <li class="menu-list menu-list-2">
                <button class="p-0 menu-link menu-btn">
                    <img src="{{ asset('assets/web/images/link-img-open.png') }}" class="img-fluid icon-img"
                        alt="" id="logo-img">
                    <span></span>
                </button>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="{{ route('dashboard') }}"><img
                        src="{{ asset('assets/web/images/link-img-1.png') }}" alt=""> Dashboard</a>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="{{ route('resources') }}"><img
                        src="{{ asset('assets/web/images/link-img-2.png') }}" alt=""> Resources</a>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="{{ route('accounting') }}"><img
                        src="{{ asset('assets/web/images/link-img-3.png') }}" alt=""> Accounting</a>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="{{ route('profile.index') }}"><img
                        src="{{ asset('assets/web/images/link-img-4.png') }}" alt=""> Profile</a>
            </li>
        </div>
        <div class="menu-lists-child-2">
            <li class="menu-list">
                <a class="menu-link" href="#"><img src="{{ asset('assets/web/images/link-img-5.png') }}"
                        alt="">
                    Export EMS </a>
            </li>
            <li class="menu-list">
                <a class="menu-link" href="#"><img src="{{ asset('assets/web/images/link-img-6.png') }}"
                        alt="">
                    Settings</a>
            </li>
        </div>
    </ul>
</div>


@push('scripts')
    <script>
        $(".menu-btn, .hamburger, .hamburger2").click(function () {
    const isActive = $(".side-bar").toggleClass("active").hasClass("active");

    // console.log("Sidebar active:", isActive);

    if (isActive) {
        $(".menu-list-2").css("justify-content", "center");
        $("#logo-img").attr("src", "{{ asset('assets/web/images/link-img-open2.png') }}");
    } else {
        $(".menu-list-2").css("justify-content", "flex-end");
        $("#logo-img").attr("src", "{{ asset('assets/web/images/link-img-open.png') }}");
    }
});
    </script>
@endpush
