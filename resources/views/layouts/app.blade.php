<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#D1312E">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="author" content="">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description'))" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords'))">
    <title> @yield('meta_title', get_setting('website_name')) {{ ' | ' . get_setting('site_motto') }} </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{uploaded_asset(get_setting('fav_icon'))}}">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ static_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/vendor/aos/aos.css') }}">
   
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/css/style.css') }}">

    <!-- Dark mode -->
    <script src="{{ static_asset('assets/js/dark_mode.js') }}"></script>

    @stack('custom_css')
    @php
        echo get_setting('header_script');
    @endphp
</head>

<body>
    @include('frontend.includes.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="{{ static_asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Vendors -->
    <script src="{{ static_asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ static_asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ static_asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <script src="{{ static_asset('assets/vendor/aos/aos.js') }}"></script>
    <!-- Template Functions -->
    
    <script src="{{ static_asset('assets/js/functions.js') }}"></script>

    @stack('script')

    @php
        echo get_setting('footer_script');
    @endphp

</body>

</html>
