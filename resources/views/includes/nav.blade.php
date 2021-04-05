<nav id="main-nav" class="navbar navbar-fixed-top affix-top wow slideInDown">
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
                <a href="{{route('team')}}">Team</a>
            </li>
            <li class="dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="event-calendar.html">Event Calander</a></li>
                <li><a href="event-detailed.html">Event Detailed</a></li>
                <li><a href="event-listing.html">Event Listing</a></li>
            </ul>
            </li> 
            <li class="dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Causes <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="causes.html">Causes</a></li>
                <li><a href="detailed-cause.html">Detailed Cause</a></li>
            </ul>
            </li>
            <li class="dropdown">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="gallery-2columns.html">Gallery 2 Columns</a></li>
                <li><a href="gallery-3columns.html">Gallery 3 Columns</a></li>
                <li><a href="gallery-detail.html">Gallery Detail</a></li>
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