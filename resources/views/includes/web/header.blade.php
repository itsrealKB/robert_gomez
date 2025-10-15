<header class="header">
    <div class="container-fluid">
        <div class="header-inner">
            <div class="logo-wrap">
                <a href="{{ route('dashboard') }}" class="header-logo">
                    <img src="{{ asset('assets/web/images/WoPuVP.png') }}" alt="Logo">
                </a>
                <div class="hamburger hamburger2" id="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="time-container text-center">
                <div class="time" id="time"></div>
                <div class="date" id="date"></div>
            </div>
            <div class="notify-area">
                <div class="dropdown">
                    <button class="btn  dropdown-toggle position-relative" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-comment"></i>
                        <span class="badge">2</span>
                    </button>
                    <ul class="dropdown-menu header-dropdown header-dropdown2 header-dropdown1">
                        <li class="d-flex justify-content-between">
                            <p>3 Unread messages</p>
                            <a class="" href="#">Clear All</a>
                        </li>
                        <li class="notify-li">
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <img src="{{ asset('assets/web/images/avatar.png')}}" alt="">
                                </div>
                                <a href="">
                                    <h6>2min ago</h6>
                                    <p>Donec dapibus mauris id odio ornare <br> tempus amet.</p>
                                </a>
                            </div>
                        </li>
                        <li class="notify-li">
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <img src="{{ asset('assets/web/images/avatar.png')}}" alt="">
                                </div>
                                <a href="">
                                    <h6>2min ago</h6>
                                    <p>Donec dapibus mauris id odio ornare <br> tempus amet.</p>
                                </a>
                            </div>
                        </li>
                        <li class="notify-li">
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <img src="{{ asset('assets/web/images/avatar.png')}}" alt="">
                                </div>
                                <a href="">
                                    <h6>2min ago</h6>
                                    <p>Donec dapibus mauris id odio ornare <br> tempus amet.</p>
                                </a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center">
                            <a href="{{ route('messagePg')}}" class="load-btn">View More</a>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn  dropdown-toggle position-relative border-0" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-bell"></i>
                        <span class="badge">2</span>
                    </button>
                    <ul class="dropdown-menu header-dropdown header-dropdown2">
                        <li class="d-flex justify-content-between">
                            <p>5 New notifications</p>
                            <a class="" href="#">Clear All</a>
                        </li>
                        <li class="notify-li">
                            <div>
                                <a href="">
                                    <h6>2min ago</h6>
                                    <p>Donec dapibus mauris id odio ornare <br> tempus amet.</p>
                                </a>
                            </div>
                        </li>
                        <li class="notify-li">
                            <div>
                                <a href="">
                                    <h6>2min ago</h6>
                                    <p>Donec dapibus mauris id odio ornare <br> tempus amet.</p>
                                </a>
                            </div>
                        </li>
                        <li class="notify-li">
                            <div>
                                <a href="">
                                    <h6>2min ago</h6>
                                    <p>Donec dapibus mauris id odio ornare <br> tempus amet.</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn bg-transparent  dropdown-toggle border-0" style="overflow: hidden" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ auth()->user()->avatar !== null ? asset('images/pfp/'.auth()->user()->avatar) : asset('assets/web/images/no-profile-pic.jfif') }}" style="border-radius:50%; height:60px; !important" alt="">
                    </button>
                    <ul class="dropdown-menu header-dropdown">
                        <li>
                            <a class="dropdown-item dropdown-link" href="{{ route('profile.index')}}">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item dropdown-link" href="{{ route('admin.logout') }}">Sign Out</a>
                        </li>
                    </ul>
                </div>
                <div class="hamburger" id="menu-btn2">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="main">
        <div class="container-fluid" id="exTab1">
            <div class="nav-wrapper">
                <nav>
                    <ul class="" id="header-offcanva">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('resources') }}">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('accounting') }}">Accounting</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile') }}">Profile</a>
                        </li>
                    </ul>
                </nav>
                <div class="search-bar-area position-relative">
                    <button class="head-search-icon" type="submit"><i
                            class="fa-solid fa-magnifying-glass "></i></button>
                    <input type="text" class="head-search-input" placeholder="Search Assignment" name=""
                        id="">
                </div>
            </div>
        </div>
    </section> --}}
</header>
