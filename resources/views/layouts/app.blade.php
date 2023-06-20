<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <div id="app">
        @include('sweetalert::alert')

        @guest
            @yield('content')
        @else
            <main>
                <div class="preloader">
                    <div class="lds-ripple">
                        <div class="lds-pos"></div>
                        <div class="lds-pos"></div>
                    </div>
                </div>

                <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
                    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
                    @include('layouts.partials.header')
                    @include('layouts.partials.sidebar')

                    <div class="page-wrapper">
                        @yield('content')

                        @include('layouts.partials.footer')
                    </div>
                </div>
            </main>
        @endguest
    </div>

    @include('layouts.partials.script')
    @stack('script')
</body>

</html>
