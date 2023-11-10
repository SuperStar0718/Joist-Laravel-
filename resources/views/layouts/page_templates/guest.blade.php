@include('layouts.navbars.navs.guest')

<div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" data-image="{{ asset('assets') . '/' . ($backgroundImagePath ?? "images/home8.jpg") }}">
        @yield('content')
        @include('layouts.footer')
    </div>
</div>
