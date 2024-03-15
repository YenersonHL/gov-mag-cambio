<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gov - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('ui/icofont/font-awesome/font-awesome-v4.7.0.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/bootstrap/bootstrap-custom.css') }}">
    <script type="text/javascript" src="{{ asset('ui/splide/splide.min.js') }}"></script>
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
    <script src="{{ asset('ui/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ui/vue/vue-v2.js') }}"></script>
    @yield('script')
    <script>
    /*document.addEventListener("DOMContentLoaded", () => {
        const sliderFooter = new Splide('#slider-footer', {
            type: 'loop',
            perPage: 4,
            gap: 10
        });
        sliderFooter.mount();
    });*/
    </script>
</body>
</html>
