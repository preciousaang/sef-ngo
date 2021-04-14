<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGO</title>
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
                    <p>199 Boundariesen Street Jacksonville, FL 32208</p>
                    <span><i class="fa fa-phone white"></i></span>
                    <p>(012) 345 - 6789</p>
                    <span><small><i class="fa fa-envelope white"></i></small></span>
                    <p>contact@charityattyia.com</p>
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