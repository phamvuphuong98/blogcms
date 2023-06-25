<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.min.js') }}">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href=" {{ asset('assets/css/custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/special-classes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
<!-- Header  -->
<div class="sub-banner">
    <figure class="sub-bannerleftlayer mb-0">
        <img src="{{ asset('assets/images/sub-bannerleftlayer.png') }}" alt="" class="img-fluid">
    </figure>
    @include('layouts.header')
{{ $slot }}
<!-- Footer -->
@include('layouts.footer')
<!-- Latest compiled JavaScript -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"> </script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"> </script>
<script src="{{ asset('assets/js/video_link.js') }}"></script>
<script src="{{ asset('assets/js/video.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/custom-carousel.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/animation_links.js') }}"></script>
<script src="{{ asset('assets/js/animation.js') }}"></script>
</body>

</html>