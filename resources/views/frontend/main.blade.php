<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>{{ $title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
  <meta name="keywords" content="Startup, Business, Multi-uses, HTML, Clean, Modern, Creative" />
  <meta name="author" content="Shreethemes" />
  <meta name="email" content="shreethemes@gmail.com" />
  <meta name="website" content="https://shreethemes.in" />
  <meta name="Version" content="v1.0.0" />
  <!-- favicon -->
  <link href="images/favicon.ico" rel="shortcut icon">
  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/css/tiny-slider.css" rel="stylesheet" type="text/css" />
  <link href="/css/tobii.min.css" rel="stylesheet" type="text/css" />
  <link href="/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Main Css -->
  <link href="/css/style-dark.min.css" rel="stylesheet" type="text/css" id="theme-opt"/>
</head>

<body>
<!-- Navbar STart -->
@include('frontend.layouts.navbar')
<!-- Navbar End -->

{{-- section start --}}
@yield('container')
{{-- section ends --}}

<!-- Footer Start -->
@include('frontend.layouts.footer')
<!-- End -->

<!-- Back to top -->
<a href="javascript:void(0)" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill"><i class="bi bi-caret-up-fill"></i></a>
<!-- Back to top -->


    <!-- javascript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/tiny-slider.js"></script>
    <script src="/js/tobii.min.js"></script>
    <script src="/js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>
</html>