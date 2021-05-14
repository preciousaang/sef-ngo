
{{-- <nav id="@if(request()->route()->named('homepage')){{__('main-nav')}}@else{{__('main-nav-h')}}@endif" class="navbar  navbar-fixed-top @if(!request()->route()->named('homepage')){{__('default affix')}}@endif wow slideInDown"> --}}
<nav id="main-nav-h" class="navbar  navbar-fixed-top default affix wow slideInDown">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="height: 100%;" href="{{route('homepage')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li><a href="{{route('homepage')}}">Home</a></li>
            <li>
                <a href="{{route('about')}}">About Us</a>
            </li>
            <li>
                <a href="{{route('team')}}">Team</a>
            </li>
            <li>
                <a href="{{route('gallery')}}">Gallery</a>
            </li>
           <li>
               <a href="{{route('projects')}}">Projects</a>
           </li>
            <li>
                <a href="{{route('news')}}">News</a>
            </li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
           
           
        </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>