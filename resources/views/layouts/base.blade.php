<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Welcome') | SEF</title>
    <meta property="og:url" content="{{url()->current()}}">
        @section('meta')
            <meta name="description" content="SEF is a non-governmental organisation founded in 2012, and since its inception SEF has been at the sharp point of demanding, ambitious and complex initiatives aimed at strengthening and optimising the agricultural value chain across Nigeria.">
            <meta name="keywords" content="NGO, Non-Govermental Organization, SEF">
            <meta name="author" content="SEF">
            <meta property="og:title" content="SEF">
            <meta property="og:description" content="SEF is a non-governmental organisation founded in 2012, and since its inception SEF has been at the sharp point of demanding, ambitious and complex initiatives aimed at strengthening and optimising the agricultural value chain across Nigeria.">
            <meta property="og:image" content="{{asset('img/logo.png')}}">
         @show
    
   
    
    <!-- Core CSS-->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/settings.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/featherlight.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script>
        AOS.init();
    </script> --}}
    <link rel="icon" href="{{asset('img/logo.png')}}">
<body>
@include('includes.nav')

@yield('content')
<footer class="wow fadeIn">
    <div class="container ">
        <div class="row">
            <div class="col-md-3 col-sm-6 charity">
                <h2>Our Mandate</h2>
                <p>Our mandate is to empower the marginalised (especially women and youth) in the Nigerian society and in the process, increase their economic contributions to their communities whilst increasing their knowledge and skills in their preferred/selected field. </p>
            </div>
            <div class="col-md-3 col-sm-6 about-us">
                <h2>About Us</h2>
                <ul class="list-unstyled">
                    <li><a href="{{route('about')}}">Our History</a></li>
                    <li><a href="{{route('team')}}">Our Team</a></li>
                </ul>
            </div>
            
            <div class="col-md-3 col-sm-6 contact">
                <h2>Contact Us</h2>
                <div class="contact-details">
                    <span><i class="fa fa-map-marker white"></i></span>
                    <p>17, Akeem Odumosu Crescent, Magodo GRA, Lagos</p>
                    <span><i class="fa fa-phone white"></i></span>
                    <p>08060334996</p>
                    <span><small><i class="fa fa-envelope white"></i></small></span>
                    <p>info@sefng.org</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Designed By AGZ &copy; {{date('Y')}}. All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>
    <!-- Javascript -->
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/js/jquery.themepunch.revolution.js')}}" type="text/javascript"></script> 
  <script src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
  <script src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
  <script src="{{asset('assets/js/featherlight.js')}}"></script>
  <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('assets/js/wow.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script>
      // smooth scrool
    $(function() {
        "use strict";
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
     });      
  </script>
</body>
</html>