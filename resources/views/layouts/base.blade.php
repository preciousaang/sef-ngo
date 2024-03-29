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
	{{-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}
    <style>
        /*	################################################################

	File Name: style.css
	Template Name: ATTIYA
	Created By: WOW-THEMES
	http://themeforest.net/user/wow_themes
	
	1) GENERAL STYLES
	2) NAV AND REVOLUTIN SLIDER
	3) START HELPING
	4) PROJECTS
	5) GALLERY STYLES
	6) NEWS LETTER
	7) TEAM SECTION
	8) BLOG SECTIONS
	9) TWITTER FEEDS
	10) FOOTER
	11) ABOUT US
	12) CSUSES
	13) PROFILE DETAILS
	
################################################################# */ 

/* ----------------------------------------------------
	General Styles
------------------------------------------------------- */




@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
@import url(https://fonts.googleapis.com/css?family=Droid+Sans:400,700);




body, html{
	font-family: "Calibri" !important;
	overflow-x:hidden;
	font-size: 16px;
	font-weight: normal;
}

h1, h2, h3, h4, h5, h6{
	font-family: Montserrat;
	font-weight: normal;
}
h1{ font-size: 18px; color: #f79f17; text-transform: uppercase;}
h2{font-size: 18px; color: #2f2f2f;}
h3{font-size: 24px;}
h4{font-size: 12px;}
h5{font-size: 14px;}
h6{font-size: 15px;}

.fz-16{
	font-size: 16px;
}
p{
	/* font-family: Montserrat; */
	font-family: Montserrat, 'Droid Sans', sans-serif;
	font-size: 14px;
	color: #2f2f2f;
	line-height: 24px;
}


a{
	transition: all .5s ease;
	text-decoration: none;
}
a:hover, a:focus{
	text-decoration: none;
	outline: none;
}
.text-bold{
	font-weight: bold !important;
}
.text-unbold{
	font-weight: normal !important;
}
.gray-bg{
	background-color: #f7f7f7;
}
.gray-bg-light{
	background-color: #fbfbfb;
}

/*--- buttons *--*/
.btn-donate{
	padding: 17px 54px;
	padding: 1.24vw 3.95vw;
	border:2px solid #f79f17;
	border-radius: 44px;
	margin-top: 20px;
	color: #f79f17 !important;
	transition: all .5s ease !important;
}
.btn-donate:hover{
	background: #f79f17;
	color: #fff !important;
}
.orange{
	color: #f79f17;
}
.orange-imp{
	color: #f79f17 !important;
}

.white{
	color: #fff;
}
.white-bg{
	background-color: #fff;
}
.mute{
	color:#d0d0d0;
}
.btn-black{
	font-size: 11px;
	padding: 5px 28px;
	background-color: #2f2f2f;
	border-radius: 24px;
	border: 2px solid #2f2f2f;
	color: #fff;
	margin-left: 10px;
}
.btn-black:hover{
	background: transparent;
	color: #2f2f2f;
}

.btn-orange{
	font-size: 11px;
	padding: 5px 28px;
	background-color: #f79f17;
	border-radius: 24px;
	border: 2px solid #f79f17;
	color: #fff;
}
.btn-orange:hover{
	background-color: transparent;
	color: #f79f17;
}

.btn-orange-ol{
	font-size: 11px;
	padding: 5px 28px;
	background-color: transparent;
	border-radius: 24px;
	border: 2px solid #f79f17;
	color: #f79f17;	
	transition:all 1s ease;
}
.btn-orange-ol:hover{
	color: #f79f17;
	border-radius: 0px;	
}
.btn-white{
	font-size: 11px;
	padding: 5px 28px;
	background-color: transparent;
	border-radius: 24px;
	border: 2px solid #fff;
	color: #fff;
}
.btn-white:hover{
	color: #f79f17;
	border-color: #f79f17;
}
.btn:active, .btn.active{
	box-shadow: none;
}
.stock-label{
	font-size: 11px;
	padding: 5px 28px;
	background-color: #f79f17;
	border-radius: 24px;
	border: 2px solid #f79f17;
	color: #fff;
	position: absolute;
	top: 15px;
	right: 15px;
	z-index:1;
}

hr{
	height: 7px;
	background-color: #f8f8f8;
	margin-top: 20px;
	border:none; 
}

hr.small{
	height: 7px;
	background-color: #ededed;
	margin-top: 20px;
	width: 60%;
	margin-left: 0;

}
hr.dark-color{
	background: #ededed;
}
hr.thin{
	height: 2px;
	background-color: #f8f8f8;
	margin-top: 20px;
	border:none; 
}
hr.thiner{
	height: 1px;
	background-color: #f8f8f8;
	margin-top: 20px;
	border:none; 
}
hr.o{
	opacity: 0.3;
}
span.droid{
	font-family: 'Droid Sans', sans-serif;
	font-size: 14px;
	color: #2f2f2f;
}
span.droid span{
	margin-left: 8px;
}
span.price{
	font-family: Montserrat;
	font-size: 14px;
}
span.price-old{
	text-decoration: line-through;
	margin-right: 10px;
}
.no-padding{
	padding: 0 !important;
}
.no-padding-left{
	padding: 0 !important
}
.no-margin{
	margin: 0 !important;
}
.no-margin-right{
	margin-right: 0 !important;
}
.no-margin-left{
	margin-left: 0 !important;
}
.no-mt{
	margin-top: 0 !important;
}
.mt-5{
	margin-top: 5px;
}
.mt10{
	margin-top: 10px !important;
}
.mt15{
	margin-top: 15px !important;
}
.mt20{
	margin-top: 20px !important;
}
.mt25{
	margin-top: 25px;
}
.mt30{
	margin-top: 30px !important;
}
.mt40{
	margin-top: 40px !important;
}
.mt50{
	margin-top: 50px !important;
}
.mt60{
	margin-top: 60px !important;
}
.mb10{
	margin-bottom: 10px !important;
}
.mb20{
	margin-bottom: 20px !important;
}
.mb30{
	margin-bottom: 30px !important;
}
.mb40{
	margin-bottom: 40px !important;
}
.mb50{
	margin-bottom: 50px !important;
}
.mb60{
	margin-bottom: 60px !important;
}
.p-lr-15{
	padding: 0 15px;
}
.p-lr-30{
	padding: 0 30px;
}
.p-t6b8{
	padding-top: 60px;
	padding-bottom: 80px;
}

/*--- bootstrap 5 col */
.col-xs-15,
.col-sm-15,
.col-md-15,
.col-lg-15 {
    position: relative;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px;
}

.col-xs-15 {
    width: 20%;
    float: left;
}
@media (min-width: 768px) {
.col-sm-15 {
        width: 20%;
        float: left;
    }
}
@media (min-width: 992px) {
    .col-md-15 {
        width: 20%;
        float: left;
    }
}
@media (min-width: 1200px) {
    .col-lg-15 {
        width: 20%;
        float: left;
    }
}
/* -- Right Offset --*/
.col-xs-offset-right-12 {
  margin-right: 100%;
}
.col-xs-offset-right-11 {
  margin-right: 91.66666667%;
}
.col-xs-offset-right-10 {
  margin-right: 83.33333333%;
}
.col-xs-offset-right-9 {
  margin-right: 75%;
}
.col-xs-offset-right-8 {
  margin-right: 66.66666667%;
}
.col-xs-offset-right-7 {
  margin-right: 58.33333333%;
}
.col-xs-offset-right-6 {
  margin-right: 50%;
}
.col-xs-offset-right-5 {
  margin-right: 41.66666667%;
}
.col-xs-offset-right-4 {
  margin-right: 33.33333333%;
}
.col-xs-offset-right-3 {
  margin-right: 25%;
}
.col-xs-offset-right-2 {
  margin-right: 16.66666667%;
}
.col-xs-offset-right-1 {
  margin-right: 8.33333333%;
}
.col-xs-offset-right-0 {
  margin-right: 0;
}
@media (min-width: 768px) {
  .col-sm-offset-right-12 {
    margin-right: 100%;
  }
  .col-sm-offset-right-11 {
    margin-right: 91.66666667%;
  }
  .col-sm-offset-right-10 {
    margin-right: 83.33333333%;
  }
  .col-sm-offset-right-9 {
    margin-right: 75%;
  }
  .col-sm-offset-right-8 {
    margin-right: 66.66666667%;
  }
  .col-sm-offset-right-7 {
    margin-right: 58.33333333%;
  }
  .col-sm-offset-right-6 {
    margin-right: 50%;
  }
  .col-sm-offset-right-5 {
    margin-right: 41.66666667%;
  }
  .col-sm-offset-right-4 {
    margin-right: 33.33333333%;
  }
  .col-sm-offset-right-3 {
    margin-right: 25%;
  }
  .col-sm-offset-right-2 {
    margin-right: 16.66666667%;
  }
  .col-sm-offset-right-1 {
    margin-right: 8.33333333%;
  }
  .col-sm-offset-right-0 {
    margin-right: 0;
  }
}
@media (min-width: 992px) {
  .col-md-offset-right-12 {
    margin-right: 100%;
  }
  .col-md-offset-right-11 {
    margin-right: 91.66666667%;
  }
  .col-md-offset-right-10 {
    margin-right: 83.33333333%;
  }
  .col-md-offset-right-9 {
    margin-right: 75%;
  }
  .col-md-offset-right-8 {
    margin-right: 66.66666667%;
  }
  .col-md-offset-right-7 {
    margin-right: 58.33333333%;
  }
  .col-md-offset-right-6 {
    margin-right: 50%;
  }
  .col-md-offset-right-5 {
    margin-right: 41.66666667%;
  }
  .col-md-offset-right-4 {
    margin-right: 33.33333333%;
  }
  .col-md-offset-right-3 {
    margin-right: 25%;
  }
  .col-md-offset-right-2 {
    margin-right: 16.66666667%;
  }
  .col-md-offset-right-1 {
    margin-right: 8.33333333%;
  }
  .col-md-offset-right-0 {
    margin-right: 0;
  }
}
@media (min-width: 1200px) {
  .col-lg-offset-right-12 {
    margin-right: 100%;
  }
  .col-lg-offset-right-11 {
    margin-right: 91.66666667%;
  }
  .col-lg-offset-right-10 {
    margin-right: 83.33333333%;
  }
  .col-lg-offset-right-9 {
    margin-right: 75%;
  }
  .col-lg-offset-right-8 {
    margin-right: 66.66666667%;
  }
  .col-lg-offset-right-7 {
    margin-right: 58.33333333%;
  }
  .col-lg-offset-right-6 {
    margin-right: 50%;
  }
  .col-lg-offset-right-5 {
    margin-right: 41.66666667%;
  }
  .col-lg-offset-right-4 {
    margin-right: 33.33333333%;
  }
  .col-lg-offset-right-3 {
    margin-right: 25%;
  }
  .col-lg-offset-right-2 {
    margin-right: 16.66666667%;
  }
  .col-lg-offset-right-1 {
    margin-right: 8.33333333%;
  }
  .col-lg-offset-right-0 {
    margin-right: 0;
  }
}
.mt40{
	margin-top: 40px;
}
.mt100{
	margin-top: 100px;
}
.mt140{
	margin-top: 140px;
}
.mt160{
	margin-top: 160px;
}


/* ----------------------------------------------------
			NAV AND Revolution Slider
------------------------------------------------------- */
/*Main Nav */


.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top:0;
    left:100%;
    margin-top:-6px;
    margin-left:-1px;
    box-shadow: none;
}
.dropdown-submenu:hover>.dropdown-menu {
    display:block;
}

.dropdown-submenu.pull-left {
    float:none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left:-100%;
    margin-left:10px;
    
}

.nav .open > a, .nav .open > a:hover, .nav .open > a:focus{
	background-color: transparent;
}
.navbar-nav > li > .dropdown-menu > li > .dropdown-menu,
.navbar-nav > li > .dropdown-menu {
	opacity: 0;
	display: block;
	visibility: hidden;
	-webkit-transition: all .5s ease-in-out;
       -o-transition: all .5s ease-in-out;
          transition: all .5s ease-in-out;
}
.navbar-nav > li > .dropdown-menu > li:hover > .dropdown-menu, 
.navbar-nav > li.open > .dropdown-menu {
	opacity: 1;
	visibility: visible;
}


#main-nav.affix, #main-nav-h.affix {
    width: 100%;
    height: auto;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 99999;
    top:0;
	background-size: cover;
}
#main-nav-h.default{
	background:url(../img/nav-bg.jpg) no-repeat;
	background-color: rgba(0, 0, 0, 0.7);
	padding-bottom: 40px;
	padding-top: 12px;
}
#main-nav.affix-top.navbar.navbar-fixed-top, 
#main-nav-h.affix-top.navbar.navbar-fixed-top {
	margin-top: 50px;
}
#main-nav.affix-top.navbar.navbar-fixed-top .nav.navbar-nav, #main-nav-h.navbar.navbar-fixed-top .nav.navbar-nav {
	border-bottom: 1px solid rgba(255, 255, 255, 0.4);
	
}
#main-nav-h.navbar.navbar-fixed-top .nav.navbar-nav{
	padding-bottom: 0;
}
#main-nav-h .navbar-nav > li > a{
	padding-bottom: 8px;
}
.nav.navbar-nav > li > a{
	color: #fff;
	text-transform: uppercase;
	font-size: 12px;
	font-weight: normal;
	margin-right: 12px;
	border-bottom: 1px solid transparent;
}
.affix .nav.navbar-nav {
    margin-top: 8px;
}
.nav .open > a, .nav .open > a:hover, .nav .open > a:focus{
	border-color: transparent;
}
.nav.navbar-nav > li > a:hover{
	background: transparent;
	border-bottom: 1px solid #fff;
}
.nav.navbar-nav > li:nth-of-type(1){
	margin-left: 64px;
}
.nav.navbar-nav > li:nth-last-of-type(1) {
	margin-left: 60px;
}
.nav.navbar-nav > li:nth-last-of-type(1) a {
	border-bottom: none;
}
.nav.navbar-nav > li:nth-last-of-type(1) a:hover {
	border-bottom: none;
}
.navbar-toggle{
	background-color: #fff;
}
.navbar-toggle .icon-bar{
	background-color: #000;
}

.navbar-brand > img{
	margin-right: 20px;
	margin-top: 12px;
}
#main-nav.affix .navbar-brand > img{
	margin-top: 0;
}

.nav > li > a:hover, .nav > li > a:focus{
	background-color: transparent;
}
.nav.navbar-nav > li > .dropdown-menu{
	background-color: #fff;
	margin-top: 10px;
	padding: 12px 0;
}
.nav.navbar-nav > li > .dropdown-menu > li > a, .dropdown-submenu > ul > li > a, .dropdown-menu > li > a{
	font-size: 12px;
	font-family: Montserrat;
	color: #2f2f2f;
	padding: 15px 30px;
	border-bottom: 1px solid #f2f2f2;
}
.nav.navbar-nav > li > .dropdown-menu > li:nth-last-of-type(1) > a, .dropdown-submenu > ul > li > a, .dropdown-menu > li > a{
	border-bottom: none;
}
.nav.navbar-nav > li > .dropdown-menu > li > a:hover, .dropdown-submenu > ul > li > a:hover, .dropdown-menu > li > a:hover{
	background-color: transparent;
	color: #f79f17;
}


/*--Slider----+*/
.slider-text h1{
	font-size: 40px;
	font-size: 2.93vw; 
	color: #f79f17;
	text-transform: uppercase;
	letter-spacing: 55px;
	letter-spacing: 4.03vw;
	margin-left: 10px;
}
.slider-text h2{
	font-size: 40px;
	font-size: 2.93vw;
	color: #fff;
	letter-spacing: 26px;
	letter-spacing: 1.9vw;
	text-transform: uppercase;
	border: 2px solid #fff;
	padding: 27px;
	padding: 1.98vw;
}
.slider-social i, .slider-scroll i{
	font-size: 14px;
}
.slider-social a{
	color: #fff;
	margin-right: 15px;
}
.slider-social,
.slider-scroll {
    position: absolute;
	bottom: 0;
}
.slider-scroll a{
	color: #fff;
}
.slider-scroll a p{
	color: #fff;
}

.slider-text-1 h1{
	font-size: 40px;
	font-size: 2.93vw; 
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 20px;
}
.slider-left{
	width: 43%;
}
.slider-left p{	
	width: 100%;
	white-space: pre-line;
	text-align: left;
	line-height: 30px;
	line-height: 2.2vw;
	font-size: 1.02vw;
}
.slider-right > .sign{
	background: #f79f17;
	padding: 25px 90px;
	padding: 1.83vw 6.59vw;
	position: relative;
}
.slider-right > .sign::after{
	content:"";
	width: 0; 
	height: 0; 
	border-left: 42px solid transparent;
	border-right: 42px solid transparent;
	border-top: 30px solid #f79f17;
	position: absolute;
	bottom: -20px;
	left: 42%;
	z-index: 2;

}
.slider-right > .sign h2{
	font-size: 20px;
	font-size: 1.46vw;
	color: #fff;
}
.slider-right > .sign span.droid{
	font-size: 13px;
	font-size: 0.95vw;
	color: #fff;
}
.progress-holder-slider{
	position: absolute;
	bottom: -20px;
	width: 100%;
	left: 0;
}
.progress-holder-slider .tooltip > .tooltip-inner{
	background-color: #000;
}
.progress-holder-slider .popOver + .tooltip > .tooltip-arrow{
	border-top-color: #000;
}
.progress-holder-slider .progress{
	background-color: #fff;
}
.progress-holder-slider .progress-bar{
	background-color: #000;
}
.progress-holder-slider .tooltip.top .tooltip-arrow{
	left: 50% !important;
}
.progress-holder-slider .tooltip{
	top: -38px !important;
}
.slider-right .fill-info{
	background-color: #fff;
	padding: 40px 20px 30px 30px;
	padding: 2.93vw 1.46vw 2.2vw 2.2vw;
}
.slider-right .fill-info a{
	color: #fff;
}
.slider-right .fill-info a:hover{
	color: #f79f17;
}
.recent-signers > ul > li{
	font-size: 13px;
	font-size: 0.95vw;
	font-family: 'Droid Sans', sans-serif;
	color: #f79f17;
}
.recent-signers > ul > li > span{
	color: #2f2f2f;
}
.recent-signers > ul > li > span > span{
	color: #cacac9;
}
.recent-signers > ul > li:nth-of-type(2){
	opacity: 0.7;
}
.recent-signers > ul > li:nth-of-type(3){
	opacity: 0.4;
}
.recent-signers > ul > li:nth-of-type(4){
	opacity: 0.2;
}
.slider-text-1 .slider-social{
	bottom: -20%;
	left: -14%;
}
.slider-text-1 .slider-scroll{
	top: 9vw;
	left: -6%;
}
.slider-center{
	background-color: #fff;
	width: 80%;
}
.slider-center > .spon-child{
	background: #f79f17;
	padding: 10px 50px 25px 50px;
	padding: 0.73vw 3.66vw 1.83vw 3.66vw;
	position: relative;
	word-space: pre-line;
}
.slider-center > .spon-child::after{
	content:"";
	width: 0; 
	height: 0; 
	border-left: 42px solid transparent;
	border-right: 42px solid transparent;
	border-top: 30px solid #f79f17;
	position: absolute;
	bottom: -20px;
	left: 42%;
	z-index: 2;

}
.slider-center > .spon-child h2{
	font-size: 24px;
	font-size: 1.76vw;
	color: #fff;
	text-transform: uppercase;
}
.slider-center > .spon-child span.droid{
	font-size: 13px;
	font-size: 0.95vw;
	color: #fff;
	white-space: pre-line;
}
.slider-center > .child-info > .child-fill-info{
	padding: 35px 50px 25px 50px;
	padding: 2.56vw 3.66vw 1.83vw 3.66vw;
}
.slider-center > .child-info > .child-fill-info > input{
	border-radius: 6px;
}
.slider-center > .child-info > .child-fill-info > .choose-option .btn-group.bootstrap-select button.btn{
	border-radius: 6px;
}
.slider-center > .child-info{
	position: relative;
}
.slider-center > .child-info > .child-spon-details{
	background-color: rgba(0, 0, 0, 0.6);
	position: absolute;
	top: 0;
	left: 100%;
	padding: 19px 40px;
	width: 100%;
	height:100%;
}
.slider-center > .child-info > .child-spon-details > h1{
	font-size: 24px;
	font-size: 1.76vw;
}
.slider-center > .child-info > .child-spon-details > p{
	line-height: 30px;
	line-height: 2.2vw;
	white-space: pre-line;
	color: #fff;
	font-size: 1.02vw;
}
.slider-center > .child-info > .child-fill-info .text-center > a{
	color: #f79f17;
}
.caption.sfb.calc-goals{
	bottom: 0 !important;
	min-width: 100% !important;
	left: 0 !important;
	top: 86% !important;
}
.calc-number{
	width: 100%;
	background-color: #000;
	padding: 20px 100px;
	padding: 1.46vw 7.32vw;
}
.calc-number > h5:nth-of-type(1){
	color: #fff;
	background-color: #f79f17;
	padding: 22px 24px;
	padding: 1.61vw 1.76vw;
	display: inline-block;
	margin-left: 0;
	margin-right: 0;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	font-size: 1.02vw;
}
.calc-number > h5:nth-of-type(2){
	color: #606060;
	background-color: #fff;
	padding: 22px 70px;
	padding: 1.61vw 5.12vw;
	display: inline-block;
	margin-left: -4px;
	margin-right: 0;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	font-size: 1.02vw;
}
.calc-number .goal-completed{
	display: inline-block;
	vertical-align: middle;
}
.calc-number .goal-completed > h5{
	display: inline-block;
	font-size: 28px;
	font-size: 1.46vw;
	color: #fff;
	margin-left: 90px;
}
.calc-number .goal-completed > h5 > span{
	font-family: 'Droid Sans', sans-serif;
	font-size: 12px;
	font-size: 0.88vw;
	display: block;
	margin-top: 10px;
}
.calc-number .goal-completed > a{
	margin-left: 60px;
	margin-left: 4.39vw;
	color: #fff;
	display: inline-block;
	margin-top: 30px;
	margin-top: 1.5vw;
	padding:0px 36px 4px 36px;
	padding: 0  2.64vw 0.29vw 2.64vw;
	vertical-align: top;
}
.calc-number .goal-completed > a:hover{
	color: #f79f17;
}

/* general styling for sections */

section{
	margin-top: 66px;
}

/* ----------------------------------------------------
	Start Helping
------------------------------------------------------- */
/*-----Start Helping ----*/

#help-now{
	position: relative;
	margin-top: 50px;
}
.helping-slide{
	display: inline-block;
	position: relative;
	cursor: pointer;
}
.helping-slide img{
	display: block;
	margin-bottom: 6px;
}


.owl-theme .owl-controls .owl-buttons div{
	background: transparent;
}
#help-now .owl-prev {
    left: -12%;
    position: absolute;
    top: 26%;
}
#help-now .owl-next {
    position: absolute;
    right: -12%;
    top: 26%;
}


.helping-slide-img{
	position: relative;
}
.helping-slide-img::before {
    background: #f79f17;
    bottom: -8px;
    content: "";
    height: 93%;
    position: absolute;
    right: -8px;
    width: 2px;
}
.helping-slide-img::after {
    background: #f79f17;
    content: "";
    height: 2px;
    position: absolute;
    width: 93%;
    right: -7px;
}
.helping-text{
	margin-top: 15px;
}
.helping-text p{
	font-family: Montserrat;
	text-transform: uppercase;
}
.slider-overlay{
	background-color: #f3a328;
    position: absolute;
    top: 0;
    width: 100%;
    height: 81%;
    opacity: 0.9;
    transition: all .5s ease;
}

.helping-slide-hover {
    background-color: rgba(0, 0, 0, 0.7);
    height: 79%;
    position: absolute;
    top: 0;
    width: 100%;
    opacity: 0;
    transition:all .5s ease;
}
.slider-overlay span {
    color: #fff;
    display: block;
    font-size: 40px;
    margin-top: 27%;

}

		/*---- progressbars with tooltips ---*/
		.helping-btn {
		    margin-bottom: 92px;
		    margin-top: 85px;
		    text-align: center;
		}
		.helping-btn a{
			padding: 5px 28px;
			border-radius: 22px;
			border:1px solid #fff;
			color: #fff;
			text-decoration: none;
			font-size: 11px;
		}
		.helping-btn a:hover{
			color: #f79f17;
			border-color: #f79f17;
		}
		.tooltip{ 
		  position:relative;
		  float:right;
		  left: 20px !important;
		}
		.tooltip > .tooltip-inner {
			background-color: #f3a328; 
			padding:5px 15px; 
			color:#fff;  
			font-size:11px;
		}
		.popOver + .tooltip > .tooltip-arrow {	
			border-left: 5px solid transparent; 
			border-right: 5px solid transparent; 
			border-top: 5px solid #eebf3f;
		}
		.progress{
		  border-radius:0;
		  border:none;
		  overflow:visible;
		  height: 8px;
		  background-color: #fff;
		  transition: all .5s ease;
		}
		.progress-bar{
		   background:#f3a328; 
		  -webkit-transition: width 1.5s ease-in-out;
		  transition: width 1.5s ease-in-out;
		  height: 8px;
		}
	.helping-slide:hover .slider-overlay{
		opacity: 0;
		}
	.helping-slide:hover .helping-slide-hover{
		opacity: 1;
		}


/* ----------------------------------------------------
	Projects
------------------------------------------------------- */
/*--- Projects ----*/

#projects-help{
}
#projects-help  .item{
	background-color: #f7f7f7;
}
#projects-help .item div:nth-of-type(2){
	padding-left: 3%;
	padding-right: 10%;
}
#projects-help .item div:nth-of-type(1) img{
	width: 100%;

}
.project-description{
	margin-top: 100px;
}
.project-description h3{
	margin-top: 20px;
}
.project-description p{
	font-family: Montserrat, 'Droid Sans', sans-serif;
	color: #2f2f2f;
	margin-top: 10px;
	line-height: 30px;
}
.project-description a{
	color: #fff;
	margin-top: 12px;
}


#projects-help.owl-theme .owl-controls .owl-page span {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    display: block;
    height: 4px;
    margin: 5px 5px 0;
    opacity: 0.5;
     position: relative;
	top: -54px;
    width: 42px;
    transition: all .5s ease;
}
#projects-help.owl-theme .owl-controls .owl-page.active span, #projects-help.owl-theme .owl-controls.clickable .owl-page:hover span {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
}


/*------ HELP WAYS -------*/
.help-ways {
	margin: 0 4%;
}
.help-ways img{
	height: 61px;
}
.help-ways p{
	font-family: Montserrat, 'Droid Sans', sans-serif;
}
.help-ways a{
	margin-top: 10px;
}

/* under Spotlight */

#under-spotlight .item{
	position: relative;
}
.spot-text{
	position:absolute;
	top: 0;
	background-color: rgba(0, 0, 0, 0.4);
	left: 29%;
	height: 100%;
	width: 250px;
}
.spot-heading{
	background-color: #f79f17;
	margin-top: 0;
	padding: 40px 50px;
}
.spot-heading h1{
	font-size: 26px;
	color: #fff;
	margin-top: 0;
}
.spot-heading h2{
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	margin-top: 12px;
}
.spot-details{
	margin-top: 50px;
	padding: 0px 20px;
}
.spot-details p{
	color: #fff;
}
.spot-details p:nth-of-type(2){
	font-size: 18px;
	margin-top: 5px;
}
.spot-details a{
	margin-top: 15px;
}
#under-spotlight.owl-theme .owl-controls .owl-buttons .owl-prev{
	position: absolute;
	top: 50%;
	left: 20px;
}
#under-spotlight.owl-theme .owl-controls .owl-buttons .owl-next{
	position: absolute;
	top: 50%;
	right: 20px;
}

/*-- What we do ---*/

.our-work{
	margin-bottom: 30px;
}
.our-work-inner{
	position: relative;
}
.our-work-hover{
	position: absolute;
	bottom: 0;
	width:97%;
	height: 100%;
	left: 0;
	transition:all .5s ease;
}
.our-work-hover-text{
	background-color: #2f2f2f;
	color: #fff;
	text-align: center;
	padding: 2px 0;
	transition:all .5s ease;
	position: absolute;
	bottom: 0;
	width: 100%;

}
.our-work-content{
	background-color: #f7f7f7;
	padding: 30px 20px 30px 30px;
	width: 97%;
}
.our-work-content p{
	font-family: Montserrat, 'Droid Sans', sans-serif;
}
.our-work-content > span {
    border-bottom: 1px solid #ececec;
    padding-bottom: 4px;
    font-size: 12px;
}
.our-work-main:hover .our-work-hover{
	background: rgba(0, 0, 0, 0.7);
}
.our-work-main:hover .our-work-hover-text{
	background-color: #f79f17;
}
.our-work-main:hover .our-work-content a{
	background: transparent;
	color: #f79f17;

}

/*-- Number saved ---*/
.numbers-saved{
	background: url(../img/numbers.jpg) no-repeat;
	background-size: cover;
	padding: 50px 0 40px 0;
} 
.numbers-saved .numbers h4{
	font-size: 40px;
	font-weight: normal;
	color: #f79f17;
}
.numbers-saved .numbers p{
	color: #fff;
}

/*---- Compaign ----*/
#join-compaign-slider .item{
	position: relative;
}


.copaign-slider-text{
	font-size: 100%;
	border-top:7px solid #f8f8f8;
	border-bottom:7px solid #f8f8f8;	
	padding: 15px 0;
}

.copaign-slider-text h3{
	display: inline-block;
}
.copaign-slider-text a{
	margin-left: 20px;
	margin-top: -10px;
}
#join-compaign-slider.owl-theme .owl-controls .owl-buttons .owl-prev{
	position: absolute;
	top: 25%;
	left: 0;
}
#join-compaign-slider.owl-theme .owl-controls .owl-buttons .owl-next{
	position: absolute;
	top: 25%;
	right: 0;
}



.joined-team{
	margin-top: 50px;
}
.joined-team-img{
	position: relative;
	overflow: hidden;
	display: inline-block;
}
.joined-team-overlay{
	position: absolute;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	opacity: 1;
	transition:all .5s ease;
}
.joined-team-overlay h4 {
    bottom: 12px;
    font-size: 16px;
    left: 23px;
    position: absolute;
    color: #fff;
}

.joined-team-overlay > h4::before {
    background: #fff none repeat scroll 0 0;
    content: "";
    height: 4px;
    position: absolute;
    top: -10px;
    width: 26px;
}
.joined-team-img:hover .joined-team-overlay{
	opacity: 0;
	top: 100%;
}

.team-area .team-member .team-img .overlay {
	background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0;
    visibility: hidden;
    opacity: 0;
    transition: all .5s ease;
    z-index: 999;
}

.team-area .team-member .team-img:hover .overlay {
	visibility: visible;
	opacity: 1;
	transition: all .5s ease;
}

/* .team-area .team-member::before {
    background-color: rgba(0, 0, 0, 0.7);
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0;
    visibility: hidden;
    opacity: 0;
    transition: all .5s ease;
    z-index: 999;
}

.team-area .team-member:hover::before {
	visibility: visible;
	opacity: 1;
	transition: all .5s ease;
} */

/*--- Online Shop ---*/

.online-products{
	margin-top: 40px;
}
.online-products .product-inner.white-bg{
	padding: 20px 0;
}
.shop-price{
	font-size: 20px;

}
.shop-price .d-price{
	color: #f79f17;
	margin-right: 10px;
}
.shop-price .o-price{
	color: #cdcdcd;
	text-decoration: line-through;
}

/****** Style Star Rating Widget *****/

.rating-area{
	margin-left: 38%;
	margin-top: 18px;
}

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 12px;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
  margin-right: 0px;
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #000; 
 float: right; 
}
/*--- star rating for comments ---*/
.coments-rating > .rating-area{
	float: right;
	margin: 0;
}
.coments-rating > .rating-area > .rating > label{
	color: #dbdbdb;
}


/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #f79f17;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #f79f17;  }

.shop-cart{
	margin-top: 33px;
}
.shop-cart a{
	padding: 20px 40px;
	color: #2f2f2f;
	border-top:1px solid #f7f7f7;
	border-bottom:1px solid #f7f7f7;
	border-right:1px solid #f7f7f7;
}
.shop-cart a:nth-of-type(3){
	border-right: none;
}
.shop-cart a:nth-of-type(2) i{
	transform:rotate(110deg);
}

.shop-cart a:hover{
	background-color: #2f2f2f;
	color: #fff;
}

/* ----------------------------------------------------
	Gallery
------------------------------------------------------- */
/*-- Gallery---*/
.gallery-filter h1{
	display: inline-block;
}
.gallery-filter a{
	margin-right: 10px;
}
.gallery-filter hr{
	margin: 0;
}
.gallery-area{
	margin-top: 60px;
}
.gallery-area div{
	display: inline-block;
	margin-right: 1px;
	margin-bottom: 1px;
}
.gallery-area .mix{
	display: none;
	position: relative;
	width: 32.9%;	
	overflow: hidden;
}
.gallery-area .mix > img{
	width: 100%;
}
.galley-nav .filter.active{
	background-color: transparent;
	color: #f79f17;
}
.gallery-mix-hover{
	position: absolute;
	top: 100%;
	width: 100%;
	height:100%;
	background: rgba(0, 0, 0, 0.7);
	opacity: 0;
	transition:all .5s ease;
}
.gallery-mix-hover a{
	margin-top: 30%;
}
.gallery-area .mix:hover .gallery-mix-hover{
	opacity: 1;
	top: 0;	

}
/* Gallery 2 Columns */

#g2c.gallery-area .mix{
	width: 48%;
	padding: 15px;
}
#g2c .g2c-img{
	position: relative;
}
#g2c .g2c-img img{
	width: 100%;
}
#g2c .g2c-img .img-tagline{
	width: 100%;
	background-color: #2f2f2f;
	padding: 12px 0;
	transition:all .5s ease;
	position: relative;
	z-index: 3;
}
#g2c .mix .g2c-img .g2c-img-hover{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	opacity: 0;
	transition: all .5s ease;
}
.g2c-img-hover a{
	position: relative;
	top: 40%;
}
#g2c .mix .img-description{
	background-color: #f7f7f7;
	padding: 40px;
	margin-top: -4px !important;
}
#g2c .mix:hover .g2c-img-hover{
	opacity: 1;
}
#g2c .mix:hover .img-tagline{
	background-color: #f79f17;
}
/* Gallery 3 Columns */

#g3c.gallery-area .mix{
	width: 32%;
	padding: 15px;
}
#g3c .g3c-img{
	position: relative;
}
#g3c .g3c-img img{
	width: 100%;
}
#g3c .g3c-img .img-tagline{
	width: 100%;
	background-color: #2f2f2f;
	padding: 8px 0;
	position: relative;
	z-index: 3;
	transition:all .5s ease;
}
#g3c .mix .g3c-img .g3c-img-hover{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	opacity: 0;
	transition: all .5s ease;
}
.g3c-img-hover a{
	position: relative;
	top: 40%;
}
#g3c .mix .img-description{
	background-color: #f7f7f7;
	padding: 30px 38px 28px 30px;
	margin-top: -4px !important;
}
#g3c .mix:hover .g3c-img-hover{
	opacity: 1;
}
#g3c .mix:hover .img-tagline{
	background-color: #f79f17;
}
#g3c.gallery-area #Container div{
	margin: 0;
}
/*--- Gallery Details --*/
#gallery-details.owl-theme .owl-controls.clickable{
	position: absolute;
	right: 2%;
	top: 66%;
}
#gallery-details.owl-theme .owl-controls .owl-page span {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    display: block;
    height: 4px;
    margin: 5px 5px 0;
    opacity: 0.8;
    width: 42px;
    transition: all .5s ease;
}
#gallery-details.owl-theme .owl-controls .owl-page.active span, #gallery-details.owl-theme .owl-controls.clickable .owl-page:hover span {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
}
/*---Where to find us---*/
#find-us .item{
	position: relative;
}

.find-text{
	position:absolute;
	top: 0;
	background-color: rgba(0, 0, 0, 0.4);
	left: 20%;
	height: 100%;
	width: 250px;
}
.find-heading{
	background-color: #f79f17;
	margin-top: 0;
	padding: 50px;
}
.find-heading h1{
	font-size: 26px;
	color: #fff;
	margin-top: 0;
}
.find-heading h2{
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	margin-top: 12px;
}
.find-details{
	margin-top: 30px;
}
.find-details p{
	color: #fff;
}

.find-details a{
	margin-top: 15px;
}
.find-quote{
	position: absolute;
	top: 20%;
	left: 45%;
	width: 49%;
}
.find-quote p{
	color: #fff;
	font-family: Montserrat, 'Droid Sans', sans-serif;
	font-size: 18px;
}
.find-quote p:nth-of-type(1){
	font-size: 34px;
	line-height: 45px;
	padding-right: 6px;
}

#find-us.owl-theme .owl-controls .owl-page span {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    display: block;
    height: 4px;
    margin: 5px 5px 0;
    opacity: 0.5;
    position: relative;
    top: -54px;
    width: 42px;
    transition: all .5s ease;
}
#find-us.owl-theme .owl-controls .owl-page.active span, #projects-help.owl-theme .owl-controls.clickable .owl-page:hover span {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
}

/* ----------------------------------------------------
	News Letter
------------------------------------------------------- */
/*-- news letter --*/

.newsletter{
	margin-top: 145px;
}
.newsletter p{
	font-family: Montserrat, 'Droid Sans', sans-serif;
	margin-top: 12px;
}
.newsletter form{
	margin-top: 5px;
}
.newsletter form input:nth-of-type(1){
	border:1px solid #dcdcdc;
	color: #cacac9 !important;
	box-shadow: none;
	font-family: Montserrat, 'Droid Sans', sans-serif;
	font-size: 13px;


}
.newsletter form input:nth-of-type(2){
	margin-top: 30px;

}
/* ----------------------------------------------------
	Team Section
------------------------------------------------------- */

/*-- Team section ---*/
.team-member{
	position: relative;	
	padding: 40px 0 35px 20px !important; 
}
.team-area .team-member .team-img, .team-area .team-member .team-text {
	display: inline-block;
	color: #fff;
}
.team-area .team-member .team-img{
	position: relative;
}
.team-area .team-member .team-text{
	margin-left: 30px;
}
.team-area .team-member .team-text h1{
	color: #fff;
}

.team-area .team-member:nth-of-type(1){
	background: url(../img/team1.jpg) no-repeat;
	background-size: cover;
}
.team-area .team-member:nth-of-type(2){
	background: url(../img/team2.jpg) no-repeat;
	background-size: cover;
}
.team-area .team-member:nth-of-type(3){
	background: url(../img/team3.jpg) no-repeat;
	background-size: cover;
}
.team-area .team-member:nth-last-of-type(3){
	background: url(../img/team4.jpg) no-repeat;
	background-size: cover;
}
.team-area .team-member:nth-last-of-type(2){
	background: url(../img/team5.jpg) no-repeat;
	background-size: cover;
}
.team-area .team-member:nth-last-of-type(1){
	background: url(../img/team1.jpg) no-repeat;
	background-size: cover;
}


.team-img::before {
    background: #f79f17;
    content: "";
    height: 95%;
    position: absolute;
    right: -6px;
    top: 13px;
    width: 2px;
}
.team-img::after {
    background: #f79f17;
    bottom: -6px;
    content: "";
    height: 2px;
    left: 18px;
    position: absolute;
    width: 95%;
}
.member-hover-top,.member-hover-bottom {
	position: absolute;
	top: 0;
	left: 0;
	background: #fff;
	width: 100%;
	height: 100%;
	z-index: 9999;
	padding: 30px 50px 50px 50px;
	opacity: 0;
	transition:all .5s ease;
	visibility: hidden;
}
.member-hover-top p, .member-hover-bottom p{
	font-family: Montserrat, 'Droid Sans', sans-serif;

}
.team-member:hover > .member-hover-top, .team-member.active > .member-hover-top{
	opacity: 1;
	visibility: visible;
	top: 100%;
}
.team-member:hover > .member-hover-bottom, .team-member.active > .member-hover-bottom{
	opacity: 1;
	visibility: visible;
	top: -100%;
}

/* ----------------------------------------------------
	Blog Section
------------------------------------------------------- */
/*--- Blog Area----*/

.blog-post{
	margin-top: 10px;
}
.blog-post h2{
	line-height: 24px;
	font-weight: normal;
}
.blog-post .blog-img{
	margin-top: 25px;
	position: relative;
}
.blog-post .blog-img .blog-img-hover{
	position: absolute;
	width: 99%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	top: 0;
	left: 0;
	opacity: 0;
	transition:all .5s ease;
}
.blog-post .blog-img .blog-img-hover a{
	margin-top: 20%;
}
.blog-post .blog-img:hover .blog-img-hover{
	opacity: 1;
}
.blog-post p{
	margin-top: 30px;
}
.post-author span{
	margin-left: 10px;
	font-size: 14px;
}
.post-time{
	margin-top: 10px;
	margin-right: 30px;
}
.post-time > span{
	font-size: 14px;
}
.post-time i{
	transform:rotate(90deg);
	margin-right: 6px;
}
/* ----- Blog Section ------ */
.blog-post-fwidth{
	margin-top: 30px;
}
.post-title h3{
	font-family: Montserrat, "Droid Sans", sans-serif;
}
.post-title span{
	font-family: Montserrat ,"Droid Sans", sans-serif;
	font-size: 14px;
	vertical-align: middle;
	margin-right: 28px;
}
.post-title span > img{
	margin-top: -3px;
	margin-right: 6px;
}
.blog-post-fwidth p{
		line-height: 28px;
}
.blog-post-fwidth > p{
	margin-top: 40px;
	line-height: 28px;
}
.blog-post-fwidth > p:nth-of-type(2){
	margin-top: 20px;
}
.blog-post-fwidth > blockquote{
	border-left: 9px solid #f79f17;
	background: #f9f9f9;
	margin-top: 55px;
	margin-bottom: 55px; 
}

.blog-post-fwidth > blockquote p{
	font-size: 20px;
	line-height: 36px;
	font-style: italic;
	padding: 22px;
}
.blog-post-fwidth .post-l-img,
.blog-post-fwidth .post-r-img{
	margin-top: 50px;
}
.blog-post-fwidth .post-l-img p:nth-of-type(2),
.blog-post-fwidth .post-r-img p:nth-of-type(2){
	margin-top: 30px;
}

/* comments */
.head-content{
	margin-bottom: 10px;	
}
.comment-rr {
	margin-top: 20px;
}
.comment-rr span{
	font-family: Montserrat, "Droid Sans", sans-serif;
	font-size: 13px;
	font-weight: normal;

}
.coments-rating span{
	margin-right: 10px;
}
.comment-reply, .coments-rating{
	display: inline-block;
}
.comment-reply{
	margin-right: 20px;
}
.comment-reply span > i{
	color: #fff;
	background-color: #f79f17;
	padding:4px;
	margin-left: 10px;
	font-size: 65%;
}
.comment{
	margin-top: 40px;
}
.comment > p{
	margin-top: 30px;
	line-height: 28px;	
}
.leave-comment label{
	font-family: Montserrat, "Droid Sans", sans-serif;
	color: #2f2f2f;
	font-size: 14px;
	width: 100px;
	font-weight: normal;
	vertical-align: middle;
	margin-right: 20px;
}
.leave-comment input{
	display: inline-block;

}
.leave-comment .form-control{
	display: inline-block;
	width: 70%;
	box-shadow: none;
	height: 47px;
	border-color: #ececec;
}
.leave-comment .form-group:nth-last-of-type(1) label{
	vertical-align: top;
}
.leave-comment .form-group:nth-last-of-type(1) .form-control{
	height: auto;
}
.leave-comment a {
    display: inline-block;
    margin-left: 120px;
    margin-top: 12px;
}
/*-- Blog Sidebar--*/
.charity-evnets{
	
}
.charity-event span.droid.orange{
	color: #f79f17;
	display: block;
	margin-top: 6px;
}
.take-action{
	margin-top: 30px;
}
.take-action .choose-option{
	margin-top: 30px;
}
.take-action .choose-option button{
	height: 39px;
}
.take-action input[type="radio"] {
  	display: none;
}

.take-action input[type="radio"] + label {
	  color: #9e9e9e;
	  font-family: 'Droid Sans', sans-serif;
	  font-size: 14px;
	  font-weight: normal;
}

.take-action input[type="radio"] + label span {
	  display: inline-block;
	  width: 13px;
	  height: 13px;
	  margin: -1px 10px 0 0;
	  vertical-align: middle;
	  cursor: pointer;
	  -moz-border-radius: 50%;
	  border-radius: 50%;
	  padding: 3px;
}

.take-action input[type="radio"] + label span {
	  background-color: #fff;
	  border: 2px solid #f79f17;
	  background-clip: content-box; 
}

.take-action input[type="radio"]:checked + label span {
  	background-color: #f79f17;
}

.take-action input[type="radio"] + label span,
.take-action input[type="radio"]:checked + label span {
	  -webkit-transition: background-color 0.4s linear;
	  -o-transition: background-color 0.4s linear;
	  -moz-transition: background-color 0.4s linear;
	  transition: background-color 0.4s linear;
}
.take-action .payment-method label{
	margin-top: 14px;
}
.take-action .payment-method label:nth-of-type(1){
	margin-right: 30px;
}
.take-action > input{
	font-family: 'Droid Sans', sans-serif;
	font-size: 13px;
	color: #cacac9;
	box-shadow: none;
	border-color: #ebebeb;
	margin-top: 10px;
	height: 40px;

}
.take-action > input:nth-last-of-type(1){
	margin-bottom: 25px;
}
.recent-posts a{
	font-family: 'Droid Sans', sans-serif;
	color: #2f2f2f;
	font-weight: normal;
	display: block;
	transition:all .5s ease;
}
.recent-posts a:hover{
	color: #f79f17;
}
.recent-posts a:hover span.orange{
	color: #2f2f2f;
}
.archive ul li{
	font-family: 'Droid Sans', sans-serif;
	font-size: 14px;
	font-weight: normal;
	padding: 12px 0px;
	border-bottom: 1px solid #f7f7f7;
}
.archive ul li:nth-last-of-type(1){
	border-bottom: none;
}
.archive ul li a{
	color: #2f2f2f;
	transition:all .5s ease;
}
.archive ul li a span{
	transition:all .5s ease;
}
.archive ul li a:hover{
	color: #f79f17;
}
.archive ul li a:hover span.orange{
	color: #2f2f2f;
}
.product-search .input-group-addon {
	background-color: transparent;
	color: #b8b8b8;
	border-color: #ebebeb;
	border-left:none;
}
.product-search .input-group > input{
	border-right: none;
}
/*--PAgenation---*/
.pagination > li > a{
	font-family: 'Droid Sans', sans-serif;
	font-size: 12px;
	color: #2f2f2f;

}
.pagination > li > a, .pagination > li > span{
	border:none;
	border-radius: 50%;
}
.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus{
	background-color: #f79f17;
	color: #fff;
}
.pagination > li:nth-of-type(1) > a:hover, .pagination > li:nth-last-of-type(1) > a:hover{
	background-color: transparent;
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
	background-color: #f79f17;
}

/* ----------------------------------------------------
	Twitter Feeds
------------------------------------------------------- */
/*--- Twitter Feeds -----*/
.twitter-feeds{
	background-color: #f79f17;
	padding: 20px 0 10px;
}
.tweet-time{
	margin-top: 0px;
}
.tweet-time i{
	margin-right: 10px;
}
.tweet-time span{
	font-family: 'Droid Sans', sans-serif;
}
.twitter-tweet p{
	font-style: italic;
}
#twitter-slider.owl-theme .owl-controls {
    margin:0;
    margin-top: -2px;
    position: absolute;
    right: 0px;
    text-align: center;
    top: 0;
}
/* ----------------------------------------------------
	Foooter
------------------------------------------------------- */
/*--footer section----*/
footer{
	background: url(../img/footer.png) no-repeat center;
	background-color: #2f2f2f;
	padding: 50px 0 80px 0;
}
footer h2{
	color: #fff;
	padding-bottom: 12px;
	position: relative;
	font-weight: normal;
}
footer h2::after{
	content: "";
	width: 50px;
	height: 2px;
	background-color: #f79f17;
	position: absolute;
	bottom: 0;
	left: 0;
}
footer .charity p{
	color: #999;
	line-height: 28px;
	margin-top: 30px;
}
footer ul{
	margin-top: 35px;
}
footer ul li{
	border-bottom: 1px solid #393939;
	padding: 15px 0px;
	font-family: 'Droid Sans', sans-serif;
	font-size: 14px;
}
footer ul li:nth-of-type(1){
	padding-top: 0;
}
footer ul li:nth-last-of-type(1){
	border-bottom: none;
}
footer ul li a{
	color: #999999;
}
footer ul li a:hover{
	color: #fff;
	text-decoration: none;
}
footer .contact-details{
	margin-top: 30px;
}
footer .contact-details span {
    display: inline-block;
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
}
footer .contact-details p{
	line-height: 24px;
	color: #999;
	padding-bottom: 12px;
}

/*---copyright---*/
.copyright{
	background-color: #272727;
	padding: 6px 0;
}
.copyright p{
	color: #717171;
	font-size: 12px;
	padding: 10px 0 0 0;
}



/* ----------------------------------------------------
	About Us
------------------------------------------------------- */
/*-- About US---*/
.grid{
	margin-top: 50px;
}
.grid-item { float: left; position: relative; overflow: hidden; }
.grid-item-hover{
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: #f2a021;
	vertical-align: middle;
	opacity: 0;
	transition:all .5s ease;
}
.grid-item-hover h2{
	margin-top: 34%;
	vertical-align: middle;
}
.grid-item:nth-of-type(1) .grid-item-hover h2{
	margin-top:80%;
}
.grid-item:nth-last-of-type(1) .grid-item-hover h2{
	margin-top: 15%;
}
.grid-item-hover a.btn.btn-white:hover{
	border-color: #fff;
	color:#fff;
}
.grid-item:hover .grid-item-hover{
	top: 0;
	opacity: 1;
}
#our-work-about .our-work-main:hover .our-work-inner img{
	filter: gray; /* IE6-9 */
  filter: grayscale(1); /* Firefox 35+ */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
}
#our-work-about .our-work-main:hover .our-work-hover{
	background: transparent;
}
#our-work-about .our-work-main:hover .our-work-hover-text{
	background-color: #2f2f2f;
}
/*---Become my Sponsor---*/
.breadcrumb{
	background-color: #f79f17;
	margin-top: 50px;
	border-radius: 0px;
}
.breadcrumb .pull-right h5{
	font-family: 'Droid Sans', sans-serif;
	font-weight: normal;
}
.become-sponsor{
	margin-top: 30px;
}
#my-sponsor.owl-theme .owl-controls.clickable{
	position: absolute;
	left: 2%;
	top: 85%;
}
.basket-total{
	margin-bottom: 40px;
}
#my-sponsor.owl-theme .owl-controls .owl-page span {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    display: block;
    height: 4px;
    margin: 5px 5px 0;
    opacity: 0.8;
     position: relative;
	top: -54px;
    width: 42px;
    transition: all .5s ease;
}
#my-sponsor.owl-theme .owl-controls .owl-page.active span, #my-sponsor.owl-theme .owl-controls.clickable .owl-page:hover span {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
}
.my-sponsor-details{
	margin-left: 30px;
}
.my-sponsor-details .sponsor-name h2{
	font-size: 20px;
	font-weight: normal;
}
.my-sponsor-details .sponsor-name h3{
	font-size: 16px;
	font-weight: normal;	
}
.sponsor-donation{
	margin-top: 10px;
}
.sponsor-donation .choose-option{
	margin-top: 10px;
}
.sponsor-donation .choose-option .btn-group.bootstrap-select button.btn{
	border-radius: 0px;
	padding: 8px 0px 8px 16px;
}
.btn-group.bootstrap-select button span{
	color:#cacac9;
	font-size: 13px;
	font-family: 'Droid Sans', sans-serif;
}
.btn-group.bootstrap-select button span.caret{
	color: #767474;
} 
.dropdown-menu.inner{
	background: #fff;
}
.dropdown-menu.inner li a{
	color:#cacac9;
	font-size: 13px;
	font-family: 'Droid Sans', sans-serif;	
}
.your-donation{
	margin-top: 16px;
}
.your-donation h5{
	font-family: 'Droid Sans', sans-serif;
	font-size: 13px;
	color: #2f2f2f;
	font-weight: normal;
}
.your-donation a{
	color: #2f2f2f;
	font-size: 13px;
	text-decoration: none;
	font-family: 'Droid Sans', sans-serif;
}
.your-donation a:nth-of-type(2){
	margin-left: 22px;

}
.your-donation a:hover{
	color: #f79f17;
}
.basket-total{
	font-family: 'Droid Sans', sans-serif;
	color: #2f2f2f;
	font-size: 13px;
	margin-top: 24px;
}
.basket-total h5{
	font-family: 'Droid Sans', sans-serif;
	color: #2f2f2f;
}
.table.borderless{
	margin-bottom: 20px;
}
.borderless tbody tr td, .borderless tbody tr th, .borderless thead tr th {
    border: none;
}
.table.borderless .total{
	font-weight: bold;
}
.basket-total > a{
	color: #fff;
	font-size: 11px;
	font-family: Montserrat;
	padding: 8px 26px;
	background-color: #2f2f2f;
	border-radius: 32px;
	text-decoration: none;	
}
.basket-total > a:hover{
	background: #f79f17;
}
/*-- accordion--*/
.become-sponsor .panel{
	box-shadow: none;
}
.panel-group .panel + .panel {
    border: 1px solid #f2f2f2;
    border-radius: 0;
    border-top: none;
    margin-top: 0;
}
.become-sponsor .panel-group .panel-heading + .panel-collapse > .panel-body, .panel-group .panel-heading + .panel-collapse > .list-group{
	border-top:none;
}
.become-sponsor .panel .panel-heading .panel-title a{
	margin-top: 0;
}
.become-sponsor .panel .panel-heading .panel-title a.collapsed{
	background: #f7f7f7;
	padding: 30px 0 30px 25px;
	display: block;
	margin-top: 3px;
}
.become-sponsor .panel input, .login-form input{
	font-family: 'Droid Sans', sans-serif;
	font-size: 13px;
	border-color: #ebebeb;
    border-radius: 0;
    box-shadow: none;
    color: #cacac9;
    font-weight: normal;
    margin-top: 10px;
    height: auto;
    padding: 12px;
}
.become-sponsor .panel .panel-body{
	padding-left: 25px;
}
.become-sponsor .panel .panel-body p{
	margin-top: 10px;

}
.become-sponsor .panel .panel-heading{
	padding: 0;
}
.become-sponsor .panel .panel-heading .panel-title a{
	padding: 20px 0 0 25px;
	display: block;
}
.become-sponsor .panel .panel-heading h4{
	color: #2f2f2f;
	font-size: 15px;
}
.become-sponsor .panel .panel-heading h4 span{
	margin-right: 30px;
	font-size: 14px;
	font-weight: normal;
	font-family: 'Droid Sans', sans-serif;
}
.become-sponsor .panel .panel-body input[type="radio"] {
  	display: none;
}

.become-sponsor .panel .panel-body input[type="radio"] + label {
	  color: #9e9e9e;
	  font-family: 'Droid Sans', sans-serif;
	  font-size: 14px;
	  font-weight: normal;
}

.become-sponsor .panel .panel-body input[type="radio"] + label span {
	  display: inline-block;
	  width: 13px;
	  height: 13px;
	  margin: -1px 10px 0 0;
	  vertical-align: middle;
	  cursor: pointer;
	  -moz-border-radius: 50%;
	  border-radius: 50%;
	  padding: 3px;
}

.become-sponsor .panel .panel-body input[type="radio"] + label span {
	  background-color: #fff;
	  border: 2px solid #f79f17;
	  background-clip: content-box; 
}

.become-sponsor .panel .panel-body input[type="radio"]:checked + label span {
  	background-color: #f79f17;
}

.become-sponsor .panel .panel-body input[type="radio"] + label span,
.become-sponsor .panel .panel-body input[type="radio"]:checked + label span {
	  -webkit-transition: background-color 0.4s linear;
	  -o-transition: background-color 0.4s linear;
	  -moz-transition: background-color 0.4s linear;
	  transition: background-color 0.4s linear;
}

.become-sponsor .panel .panel-body .send-mail{
	font-family: 'Droid Sans', sans-serif;
	font-weight: normal;
}
.become-sponsor .panel .panel-body .send-mail > span{
	font-size: 14px;
}
.become-sponsor .panel .panel-body .send-mail input,
.become-sponsor .panel .panel-body .send-mail textarea{
	font-size: 13px;
	color: #cacac9;
	margin-top: 10px;
	border-radius: 0px;
	border-color: #ebebeb;
	box-shadow: none;
	font-weight: normal;
}
/* .become-sponsor .panel .panel-body .send-mail input, .fill-info input{
	height: auto;
	padding: 12px;
} */
.become-sponsor .panel .panel-body .send-mail textarea{
	margin-top: 10px;
}
.choose-option .btn-group.bootstrap-select button.btn:hover,
.choose-option .btn-group.bootstrap-select button.btn:focus{
	background:transparent;
	color: inherit;
	box-shadow: none;
}
.choose-option .btn-group.bootstrap-select button.btn{
	border-radius: 0px;
	border-color: #ebebeb;
	height: 38px;
}
.become-sponsor .panel .panel-body .send-mail .choose-option .btn-group.bootstrap-select.form-control{
	margin-top: 20px;
	margin-bottom: 10px;
}
.become-sponsor .panel .panel-body .send-mail .text-center a,
.become-sponsor .panel .panel-body .payment-methods .text-center a,
.become-sponsor .panel .panel-body .review-submit a {
	margin-top: 30px;
	margin-bottom: 10px;
}
.other-ways-give{
	background: #f7f7f7;
	padding: 70px 0px;
}
.other-ways-give .other-ways .other-ways-content{
	background-color: #fff;
	padding: 30px 20px 30px 30px;
	width: 100%;
}
.other-ways .our-work-inner{
	margin-top: 20px;
}
.other-ways-give .other-ways .our-work-inner > img{
	width: 100%;
}

.give-now{
	margin-top: 20px;
}
.give-now input[type="radio"] {
  	display: none;
}

.give-now input[type="radio"] + label {
	  color: #9e9e9e;
	  font-family: 'Droid Sans', sans-serif;
	  font-size: 14px;
	  font-weight: normal;
}

.give-now input[type="radio"] + label span {
	  display: inline-block;
	  width: 13px;
	  height: 13px;
	  margin: -1px 10px 0 0;
	  vertical-align: middle;
	  cursor: pointer;
	  -moz-border-radius: 50%;
	  border-radius: 50%;
	  padding: 3px;
}

.give-now input[type="radio"] + label span {
	  background-color: #fff;
	  border: 2px solid #f79f17;
	  background-clip: content-box; 
}

.give-now input[type="radio"]:checked + label span {
  	background-color: #f79f17;
}

.give-now input[type="radio"] + label span,
.give-now input[type="radio"]:checked + label span {
	  -webkit-transition: background-color 0.4s linear;
	  -o-transition: background-color 0.4s linear;
	  -moz-transition: background-color 0.4s linear;
	  transition: background-color 0.4s linear;
}
/* .my-information .fill-info input{
	font-family: 13px;
	color: #cacac9;
	margin-top: 10px;
	border-radius: 0px;
	border-color: #ebebeb;
	box-shadow: none;
	font-weight: normal;
} */
.fill-info .choose-option .btn-group.bootstrap-select.form-control{
	margin-top: 9px;
}
.payment-methods .choose-option .btn-group.bootstrap-select.form-control{
	margin-bottom: 10px;
}
.fill-info .choose-option .btn-group.bootstrap-select button.btn, 
.payment-methods .choose-option .btn-group.bootstrap-select button.btn{
	border-radius: 0px;
	padding: 12px;
	border-color: #ebebeb;
}
.fill-info p{
	margin:20px 0 10px 0;
}
.fill-info .text-center > a {
    margin-bottom: 10px;
    margin-top: 30px;
}
.review-submit h5{
	font-family: "Droid Sans", sans-serif;
	font-weight: bold;	
}
.review-submit span{
	font-family: "Droid Sans", sans-serif;
	font-weight: normal;
	font-size: 14px;	
}
.login-form{
	background-color: #f7f7f7;
	padding:20px 20px 22px 20px;
}
.login-form h2, .guest-donor h2{
	font-family: "Droid Sans", sans-serif;
	margin-bottom: 25px;
}
.login-form a{
	margin: 25px 0 30px 0;
}
.login-form span{
	font-family: "Droid Sans", sans-serif;
	font-size: 14px;
	border-bottom: 2px solid #f7d9b9;
}
.guest-donor{
	background-color: #f7f7f7;
	padding: 20px 30px 40px 30px;
	margin-top: 20px;
}
.guest-donor a{
	margin-top: 25px;

}



/* ----------------------------------------------------
	Causes
------------------------------------------------------- */
/*causes*/
.causes .helping-slide-hover{
	background-color: transparent;
	top: 97%;
}
.causes .slider-overlay span{
	margin-top: 20%;
}
.causes .slider-overlay{
	height: 100%;
	width: 100%;
}
.causes .helping-slide-img img{
	width: 100%;
}
.causes .our-work-content{
	padding-top: 20px;
	width: calc(100% + 8px);
}
.causes .our-work-content > .helping-text > p{
	font-family: Montserrat;
	font-size: 14px;
}
.helping-slide.causes:hover .our-work-content a{
	background-color: transparent;
	color: #f79f17;
	border-color: #f79f17;
}
/*--google Map --- */
#map{
	width: 100%;
	height: 356px;
}
/*-- contact Us --*/
.contact-us input{
	height: 38px;
}
.contact-us input,
.contact-us textarea{
	font-size: 13px;
	font-family: 'Droid Sans', sans-serif;
	font-weight: normal;
	color: #cacac9;
	margin-top: 10px;
	border-radius: 0px;
	border-color: #ebebeb;
	box-shadow: none;
}
.contact-us textarea{
	resize:none;
}
.cotact-details{
	font-family: 'Droid Sans', sans-serif;
	font-size: 14px;
	color: #2f2f2f;
	font-weight: normal;
}
.cotact-details i{
	margin-right: 9px;
}
/*-- Donors --*/
.donor-img{
	position: relative;
	overflow: hidden;
}
.donor-img img{
	width: 100%;
}
.donor-img .donor-hover{
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: #f79f17;
	top: 100%;
	padding-top: 27%;
	opacity: 0;
	transition:all .5s ease;
}
.donor-img .donor-hover a:hover{
	color: #fff;
	background-color: transparent;
	border-color: #fff;
}
.donor-img:hover .donor-hover{
	opacity: 1;
	top: 0;
}
/*--product details--*/
input[type="radio"] {
  	display: none;
}

input[type="radio"] + label {
	  color: #9e9e9e;
	  font-family: 'Droid Sans', sans-serif;
	  font-size: 14px;
	  font-weight: normal;
}

input[type="radio"] + label span {
	  display: inline-block;
	  width: 13px;
	  height: 13px;
	  margin: -1px 10px 0 0;
	  vertical-align: middle;
	  cursor: pointer;
	  -moz-border-radius: 50%;
	  border-radius: 50%;
	  padding: 3px;
}

input[type="radio"] + label span {
	  background-color: #fff;
	  border: 2px solid #f79f17;
	  background-clip: content-box; 
}

input[type="radio"]:checked + label span {
  	background-color: #f79f17;
}

input[type="radio"] + label span,
input[type="radio"]:checked + label span {
	  -webkit-transition: background-color 0.4s linear;
	  -o-transition: background-color 0.4s linear;
	  -moz-transition: background-color 0.4s linear;
	  transition: background-color 0.4s linear;
}
input.form-control{
	height: 38px;
}
textarea.form-control{
	resize:none;
}
input.form-control, textarea.form-control{
	font-family: 'Droid Sans', sans-serif;
	font-size: 13px;
	border-color: #ebebeb;
    border-radius: 0;
    box-shadow: none;
    color: #cacac9;
    font-weight: normal;
    margin-top: 10px;
    padding: 12px;
}

.sidebar-product{
	background-color: #f7f7f7;
	padding-bottom: 20px;
}
.sidebar-product.product > img{
	width: 100%;
}
.sidebar-product.product .shop-cart{
}
.sidebar-product.product .shop-cart a{
	padding: 20px 46px;
	border-color: #fff;
}

/*---Nav-Tabs--*/

#exTab1 .tab-content {
  background-color: #f7f7f7;
  padding : 20px 30px;
}
#exTab1 .tab-content .tab-pane p{
	line-height: 28px;
}

#exTab1 .nav-pills > li > a{

}
#exTab1 .nav-pills > li.active > a,#exTab1 .nav-pills > li.active > a:hover,#exTab1 .nav-pills > li.active > a:focus{
	background-color: #f7f7f7;
	color: #2f2f2f;
}

#exTab1 .nav-pills > li > a {
  	font-family: Montserrat;
	font-size: 11px;
	color: #a7a7a7;
	padding: 20px 30px;
	-webkit-border-top-left-radius: 4px;
	-webkit-border-top-right-radius: 4px;
	-moz-border-radius-topleft: 4px;
	-moz-border-radius-topright: 4px;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
		-webkit-border-bottom-left-radius: 0px;
	-webkit-border-bottom-right-radius: 0px;
	-moz-border-radius-bottomleft: 0px;
	-moz-border-radius-bottomright: 0px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 0px;

}
/*-- Related Products --*/
#related-products{
	background-color: #fbfbfb;
	padding: 60px 0;
	position: relative;
	
}
#related-products .sidebar-product{
	background: #fff;
	-webkit-box-shadow: 0px 4px 0px 0px rgba(243,243,243,1);
-moz-box-shadow: 0px 4px 0px 0px rgba(243,243,243,1);
box-shadow: 0px 4px 0px 0px rgba(243,243,243,1);
}
#related-products .sidebar-product.product .shop-cart a{
	border-color: #f7f7f7;
	border-bottom: none;
}
#related-products .owl-controls.clickable{
	position: absolute;
	top: 50%;
	width: 100%;
	left: 0;
}
#related-products .owl-controls.clickable .owl-prev{
	position: absolute;
	left: 10px;
}
#related-products .owl-controls.clickable .owl-next{
	position: absolute;
	right: 10px;
}
/*-- Product Grid View --*/
span.grid-view, span.list-view{
	position: relative;
}
span.grid-view img:nth-of-type(2), span.list-view img:nth-of-type(2){
	position: absolute;
	top: 6px;
	left: 0;
	opacity: 0;
	transition:all .5s ease;
}
@media screen and (-webkit-min-device-pixel-ratio:0) { 
span.grid-view img:nth-of-type(2), span.list-view img:nth-of-type(2){
	top: 4px;
} 
 }
span.grid-view:hover img:nth-of-type(2), span.list-view:hover img:nth-of-type(2){
	opacity: 1;
	cursor: pointer;
}
span.grid-view:hover img:nth-of-type(1), span.list-view:hover img:nth-of-type(1){
	opacity: 0;
}
span.grid-view.active img:nth-of-type(2), span.list-view.active img:nth-of-type(2){
	opacity: 1;
	cursor: pointer;
}
span.grid-view.active img:nth-of-type(1), span.list-view.active img:nth-of-type(1){
	opacity: 0;
}
#Grid .sidebar-product{
	position: relative;
}
.out-of-stock{
	 opacity: 0.3;
}
.quick-view-layer{
	position: relative;
}
.quick-view-layer >img {
	width: 100%;
}
.quick-view-hover{
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	padding-top: 25%;
	opacity: 0;
	transition:all .5s ease;
	z-index: -1;
}
.quick-view-layer:hover .quick-view-hover{
	top: 0;
	opacity: 1;
	z-index: 2;
}

/*-- Product List View --*/
.list-view{

}
.list-view-content{
	padding: 30px 30px 0px 30px;
}
.list-view-content-bottom{
	padding: 30px 0 16px 30px;
	border-top: 1px solid #fff;
}
.list-view-content-bottom > div{
	display: inline-block;
}
.list-view-content-bottom .rating-area{
	margin-top: 0;
	margin-left: 10px;
	vertical-align: middle;
}
.list-view-content-bottom .shop-cart{
	margin-top: -30px;
}
.list-view-content-bottom .shop-cart a {
	padding: 30px 45px;
	display: inline-block;
}
.list-view .quick-view-hover{
	padding: 20%;
}

/*----Projucts Page------*/
#project-p{
	background-color: #fbfbfb;
	padding: 20px 0;
	position: relative;
	
}
#project-p .owl-controls.clickable{
	position: absolute;
	top: 50%;
	width: 100%;
	left: 0;
}
#project-p .owl-controls.clickable .owl-prev{
	position: absolute;
	left: 10px;
}
#project-p .owl-controls.clickable .owl-next{
	position: absolute;
	right: 10px;
}
#project-p .item div:nth-of-type(2){
	padding-left: 3%;
	padding-right: 10%;
}
#project-p video{
	float: right;
	margin-top: 10%;
	width: 60%;
	margin-right: 12%;
}
/* #project-p .item div:nth-of-type(1) img{
	width: 100%;
} */
.project-description{
	margin-top: 100px;
}
.project-description h3{
	margin-top: 20px;
}
.project-description p{
	font-family: 'Droid Sans', sans-serif;
	color: #2f2f2f;
	margin-top: 10px;
	line-height: 30px;
}
.project-description a{
	color: #fff;
	margin-top: 12px;
}


#projects-help.owl-theme .owl-controls .owl-page span {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    display: block;
    height: 4px;
    margin: 5px 5px 0;
    opacity: 0.5;
     position: relative;
	top: -54px;
    width: 42px;
    transition: all .5s ease;
}
#projects-help.owl-theme .owl-controls .owl-page.active span, #projects-help.owl-theme .owl-controls.clickable .owl-page:hover span {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
}
/*-- Register Or Sign Up  --*/
.register-now{
	padding: 0 50px;
}
.sponsor-child img{
	width: 100%;
}
.sponsor-child h2{
	font-size: 20px;
}
.sponsor-child .sponsor-child-content{
	padding: 0 100px 30px 50px; 
}
.sponsor-child .find-child {
	padding: 2px 60px 30px 30px; 
}
/*-- About Amos--*/
#amos{

}
#amos .amos-content{
	padding: 12% 6% 12% 20%;
}
#amos .amos-content > p{
	line-height: 28px;
}
#amos .amos-tile{
	position: relative;
}
#amos .amos-tile > img{
	width: 100%;
}
#amos .amos-tile > .img-title{
	background-color: #f79f17;
	width: 100%;
	position: absolute;
	bottom: 0;
	padding: 16px 0;
	left: 0;
}
#amos .amos-tile > .img-title > span{
	color: #fff;
	font-size: 12px;
}
#amos .amos-tile .amos-tile-hover{
	background-color: rgba(0, 0, 0, 0.7);
	width: 100%;
	height: 100%;
	position:absolute;
	top: 100%;
	left: 0;
	padding-top: 20%;
	opacity: 0;
	transition:all .5s ease;
}
#amos .amos-tile:hover .amos-tile-hover{
	top: 0;
	opacity: 1;
}
#amos .amos-map #map, .amos-map #map1,.amos-map #map2{
	max-height: 210px;
	max-width: 100%;
}
#amos.owl-theme .owl-pagination {
    bottom: 165px;
    position: absolute;
    right: 3%;
}
@media screen and (-webkit-min-device-pixel-ratio:0){
	#amos.owl-theme .owl-pagination {
		bottom: 160px;
	}
}
#amos.owl-theme .owl-controls .owl-page span {
    background: rgba(255, 255, 255, 0.3) none repeat scroll 0 0;
    display: block;
    height: 4px;
    margin: 5px 5px 0;
    opacity: 0.8;
    width: 42px;
    transition: all .5s ease;
}
#amos.owl-theme .owl-controls .owl-page.active span, #amos.owl-theme .owl-controls.clickable .owl-page:hover span {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
}
/* ----------------------------------------------------
	PROFILE DETAILS
------------------------------------------------------- */
/*--profile Detail--*/
ul.profile-detail{
	padding: 0 40px;
}
ul.profile-detail > li{
	font-family: 'Droid Sans', sans-serif;
	font-size: 14px;
	color: #2f2f2f;
	padding: 15px 0 20px 0;
	border-bottom: 1px solid #ebebeb;
}
ul.profile-detail > li:nth-last-of-type(1){
	border-bottom: none;
}
ul.profile-detail > li > span{
	color: #a4a4a4;
	width: 50%;
}

.social-detail{
	margin-left: 40px;
}
.social-detail a{
	color: #fff;
	background-color: #2f2f2f;
	padding:8px 12px;
}
.social-detail a:hover{
	background-color: #f79f17;
}
/* Team member single Prev and Next */
.team-member-prev a, .team-member-next a{
	color: #f79f17;
	font-size: 12px;
}
.team-member-prev a > span > i, .team-member-next a > span > i{
	margin: 0 10px;
}
.team-member-prev a:hover, .team-member-next a:hover{
	color: #2f2f2f;
}
/* ----------------------------------------------------
	Event Calander
------------------------------------------------------- */
.event-view > li.dropdown > a{
	color: #fff;
	background-color: #f79f17;
	padding: 20px;
	width: 170px;
	height: 76px;
	display: block;
	font-size: 11px;
	font-weight: normal;

}
.event-view > li.dropdown > a > span.clearfix{
	font-size: 14px;
	font-weight: normal;
}
.event-view > li.dropdown > a > span.clearfix > i{
	margin-right: 10px;
}
.event-input input.form-control{
	height: 76px;
	margin-top: 0;
	padding: 10px;
	background-color: #f8f8f8;
}
.event-btn a{
	vertical-align: middle;
	margin-top: 20px;
	display: block;
	text-align: center;
}
.fc-content{
	color: #f79f17;
	background-color: #fff;
	border:none;
}
.fc-event{
	border: none;
}
.fc-row.fc-widget-header table > thead{
	background-color: #f79f17;
}
.fc th{
	border: none;
	font-size: 11px;
	font-weight: normal;
	color: #fff;

}
    </style>
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
                    {{-- <span><i class="glyphicon glyphicon-map-marker white"></i></span> --}}
                    {{-- <p>17, Akeem Odumosu Crescent, Magodo GRA, Lagos</p> --}}
                    <span><i class="glyphicon glyphicon-earphone white"></i></span>
                    <p>+234 906 289 9919<br>+234 906 289 9917</p>
					
                    <span><small><i class="glyphicon glyphicon-envelope white"></i></small></span>
                    <p>info@sefng.org</p>
                </div>
            </div>
			<div class="col-md-3 col-sm-6">
				<h2>Admin</h2>
				<ul class="list-unstyled">
					<li><a href="{{route('login')}}"><i class="glyphicon glyphicon-cog"></i>&nbsp; Login</a></li>
				</ul>
			</div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; {{date('Y')}}. All Rights Reserved</p>
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