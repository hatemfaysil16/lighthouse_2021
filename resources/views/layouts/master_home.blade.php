<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Light House</title>
  <meta content="برامج شركة اد للبرامج المحاسبية المتخصصة إحدي برامجها هي لايت هاوس ويتضمن   حسابات عامة – مشتريات – مبيعات – مخازن – نظام الاقساط - شئون عاملين – تخطيط – إنتاج – نقاط بيع-نظام " name="descriptison">

  <meta content="Light|House" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('image/defalte/logo2.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/bootstrap-tagsinput.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  @if (App::getLocale() == 'en')
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  @else
  <link href="{{asset('frontend/assets/css/style_ar.css')}}" rel="stylesheet">

  @endif



</head>

<body>

@include('layouts.body.header')



  <main id="main">

    @yield('home_content')

  </main><!-- End #main -->

  @include('layouts.body.footer')




  <!-- Vendor JS Files -->

  {{-- <script src="{{asset('frontend/assets/js/bootstrap-tagsinput.js')}}"></script> --}}
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
