<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{ Config::get('app.name') }} | @yield('title') </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.jpg') }}">
    <!-- METAS -->
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="{{ Config::get('app.name') }}">
      <meta property="og:title" content="{{ Config::get('app.name') }}">
      <meta property="og:type" content="website">
      <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
      <meta name="MobileOptimized" content="width">
      <meta name="HandheldFriendly" content="true">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      
    <!-- STYLES -->
      
      <!-- Fontawesome -->
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/imperiodorado.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/socicon.css') }}">
      <link rel="stylesheet" href="{{ asset('css/portfolio-style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/front-flex.css') }}">
      <link rel="stylesheet" href="{{ asset('css/genericons.css') }}">
      <link rel="stylesheet" href="{{ asset('css/morphext.css') }}">
      <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
      <link rel="stylesheet" href="{{ asset('css/testimonial-rotator-style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/sow-image-default-2daac9b0bc02.css') }}">
      <link rel="stylesheet" href="{{ asset('css/portfolio-style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/widgets.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/core.gmap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/dashicons.min.css') }}">
      <!-- Main CSS -->
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    
    @yield('styles')
  </head>
  <body>
    
    <!-- navbar -->
    @include('layouts.navbar')
    <!-- navbar-end -->

    <!-- content -->
    @yield('content')
    <!-- content-end -->

    <!-- footer -->
    @include('layouts.footer')
    <!-- footer-end -->

    <!-- scripts_main -->

    <script src="{{ asset('js/analytics.js') }}"></script>
    <script src="{{ asset('js/jquery.cycletwo.addons.js') }}"></script>
    <script src="{{ asset('js/jquery.cycletwo.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/core.gmap.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/core.marker.js') }}"></script>
    <script src="{{ asset('js/frontend.gmap.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/marker.js') }}"></script>
    <script src="{{ asset('js/morphext.min.js') }}"></script>
    <script src="{{ asset('js/onion.js') }}"></script>
    <script src="{{ asset('js/controls.js') }}"></script>
    <!-- scripts_main-end -->
    @yield('scripts')
  </body>
</html>
