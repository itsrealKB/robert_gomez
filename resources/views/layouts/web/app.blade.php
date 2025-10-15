@include('includes.web.head')
@include('includes.web.header')



<div class="layout-wrap">
    @include('includes.web.sidebar')
    <div class="main-content">
        @yield('content')
    </div>
</div>

@include('includes.web.footer')
