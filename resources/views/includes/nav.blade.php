
<style>
#main-nav-h.default {
    background: url(img/nav-bg.jpg) no-repeat !important;
    background-color: rgba(0, 0, 0, 0.7);
    padding-bottom: 40px;
    padding-top: 12px;
}
</style>
<nav id="@if(request()->route()->named('homepage')){{__('main-nav')}}@else{{__('main-nav-h')}}@endif" class="navbar  navbar-fixed-top @if(!request()->route()->named('homepage')){{__('default affix')}}@endif wow slideInDown">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="height: 100%;" href="index.html#"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li><a href="{{route('homepage')}}">Homepage</a></li>
            <li>
                <a href="{{route('about')}}">About Us</a>
            </li>
            <li>
                <a href="{{route('team')}}">Team</a>
            </li>
            <li>
                <a href="{{route('gallery')}}">Gallery</a>
            </li>
           
            <li class="dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Causes <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="causes.html">Causes</a></li>
                <li><a href="detailed-cause.html">Detailed Cause</a></li>
            </ul>
            </li>
            <li class="dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="blog-detailed-full-width.html">Blog Detailed Full Width</a></li>
                <li><a href="blog-detailed-with-sidebar.html">Blog Detailed With Sidebar</a></li>
                <li><a href="blog-full-width.html">Blog Full Width</a></li>
                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
            </ul>
            </li>
            <li><a href="contact-us.html">Contact</a></li>
            {{-- <li><a href="index.html"><i class="fa fa-search fa-lg"></i></a></li> --}}
        </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>