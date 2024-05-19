<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gov - @yield('title')</title>
    <base href="http://127.0.0.1:8080/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('ui/icofont/font-awesome/font-awesome-v4.7.0.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/bootstrap/bootstrap-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/splide/splide.min.css') }}">
    @yield('style')
</head>
<body>
    <div id="app">
        {{-- <x-bar-gov /> --}}
        <x-navegation-top />
        <x-modal-navegation />
        @yield('body')
        {{-- <x-section-home-patrocinio /> --}}
        <x-footer-main />
    </div>
    <script type="text/javascript" src="{{ asset('ui/add/rxjs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ui/splide/splide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ui/vue/vue-v2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ui/bootstrap/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>
</html>
