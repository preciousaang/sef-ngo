@extends('layouts.base')  
  @section('content')
  <div class="slider-r">
      <div id="mainslider">
          <div class="slider">
              <div class="fullscreen-container">
                  <div class="fullscreenbanner">
                      <ul>
                          <li data-transition="fade" data-slotamount="0"> 
                              <img style="filter: grayscale(100%);"  alt="#" src="{{asset('assets/images/Picture2.png')}}" />
                              <div class="caption sfb" 
                                  data-x="center" 
                                  data-y="center" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo">
                                  <div class="slider-text text-center">
                                      <h1 class="text-center">
                                          Nigeria Women
                                      </h1>
                                      <h2 class="text-center">need help</h2>
  
                                      <div class="slider-btn">
                                          <a class="btn btn-donate" href="index.html">DONATE</a>
                                      </div>
                                      
                                  </div>
                              </div>
                              <div class="caption sfb" 
                                  data-x="left" 
                                  data-y="bottom" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo" style="bottom:0; margin-bottom: 50px;">
                                  <div class="slider-text text-center">
                                      
                                      {{-- <div class="slider-social">
                                          <a href="index.html"><i class="fa fa-facebook"></i></a>
                                          <a href="index.html"><i class="fa fa-twitter"></i></a>
                                          <a href="index.html"><i class="fa fa-instagram"></i></a>
                                      </div> --}}
                                      
                                  </div>
                              </div>
                              <div class="caption sfb" 
                                  data-x="center" 
                                  data-y="bottom" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo" style="bottom:20px;">
                                  <div class="slider-text text-center">
                                      
                                      
                                      
                                  </div>
                              </div>
                          </li>
                          <li data-transition="slide" data-slotamount="10"> 
                              <img  alt="#" src="{{asset('assets/images/Picture1.png')}}"/>
                              <div class="caption sfb sl2-r" 
                                  data-x="0" 
                                  data-y="center" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo">
                                  <div class="slider-text-1 text-center pull-left">
                                      <div class="slider-left">
                                          <h1 class="text-center">Clean water</h1>
                                          <hr class="o">
                                          <p class="white mt40">Diseases from unsafe water and lack of basic sanitation kill more people every year than all forms of violence, including war.  Children are especially vulnerable, as their bodies aren't strong enough to fight diarrhea, dysentery and other illnesses. </p>
                                          <h2 class="white text-left mt40">Let's help <span class="text-bold">#WaterHelpForAfrica!</span></h2>
                                          <p class="white mt40">The petition reads:
                                          Dear Congress,
                                          Please pass the Water Africa Act, a bill that will help provide 43 million people with access to clean water for the first time - at no new cost to taxpayers.
                                          </p>
                                      </div>
                                      
                                  </div>
                              </div>
                             
  
                              <div class="caption sfb" 
                                  data-x="left" 
                                  data-y="bottom" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo" style="bottom: 40px;">
                                  <div class="slider-text text-center" style="margin-bottom: 40px;">
                                      
                                      <div class="slider-social">
                                          <a href="index.html"><i class="fa fa-facebook"></i></a>
                                          <a href="index.html"><i class="fa fa-twitter"></i></a>
                                          <a href="index.html"><i class="fa fa-instagram"></i></a>
                                      </div>
                                      
                                  </div>
                              </div>
                              <div class="caption sfb" 
                                  data-x="center" 
                                  data-y="bottom" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo" style="bottom: 20px;">
                                  <div class="slider-text text-center">
                                      
                                      
                                      
                                  </div>
                              </div>
                          </li>
                          <li data-transition="slide" data-slotamount="10"> 
                              <img  alt="#" src="{{asset('assets/images/Picture1.png')}}"/>
                              
                              
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <section>
    <div class="our-work">
        <h1 class="text-center animated animated.hinge slideInUp">Latest Projects</h1>
        <hr>
    </div>
          <div id="projects-help" class="wow slideInDown">
              
              @foreach($projects as $project)
              <div class="item">
                  <div class="row">
                      <div class="col-md-7">
                          <img class="img-responsive" src="{{asset('storage/uploads/'.$project->image_url)}}" alt="">
                      </div>
                      <div class="col-md-5">
                          <div class="project-description">
                              <h1 class="animated fadeInUp slideInUp">{{$project->title}}</h1>
                              <hr class="small">
  
                              <h3>{{$project->subtitle}}</h3>
                              <p>{{$project->detail}}</p>
  
                              {{-- <a class="btn btn-orange" href="index.html">Read More</a> --}}
                          </div>
                      </div>
                  </div>
              </div>
             @endforeach
          </div>
  </section>
  <section>
      <div id="under-spotlight" class="wow fadeIn">
          <div style="max-height: 500px;" class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="spot-img">
                          <img style='width: 100%;' src="{{asset('assets/images/Picture1-1.png')}}" alt="">
                      </div>
                      <div class="spot-text text-center">
                          <div class="spot-heading">
                              <h1>Milestones</h1>
                              <h2></h2>
                          </div>
                          <div class="spot-details">
                              <p>Capacity building training of 2000+ women on international best agronomic practices for maximum production, yield and quality.</p>
                              <p>Capacity building training of 2000+ women on international best agronomic practices for maximum production, yield and quality.</p>
                              <p>Capacity building training of 2000+ women on international best agronomic practices for maximum production, yield and quality.</p>
                          </div>
  
                      </div>
                  </div>
              </div>
          </div>
          
        </div>
      
      </div>
  </section>
  <section>
      <div class="container wow fadeIn">
          <div class="row">
              <div class="col-md-12 our-work">
                  <h1>Projects</h1>
                  <hr>
              </div>
          </div>
          <div class="row">
              @foreach($projects as $project)
              <div class="col-md-4 col-sm-6 our-work-main">
                  <div class="our-work-inner">
                      <img class="img-responsive" src="{{asset('storage/uploads/'.$project->image_url)}}" alt="">
                      <div class="our-work-hover">
                          <div class="our-work-hover-text text-uppercase">
                              <h4>{{$project->title}}</h4>
                          </div>
                      </div>
                  </div>
                  <div class="our-work-content">
                      <p>{{$project->detail}}</p>
                      {{-- <span>23 Projects</span> --}}
                      {{-- <a class="btn btn-orange pull-right" href="index.html">View Projects</a> --}}
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>
 
 
  {{-- <section>
      <div class="container">
          <div class="row">
              <div class="col-md-12 gallery-filter">
                  <h1 class="wow slideInDown">our gallery</h1>
                  <div class="galley-nav pull-right wow fadeIn">
                      <a href="javascript:" class="btn btn-orange filter" data-filter="all">Nauru</a>
                      <a href="javascript:" class="btn btn-orange filter" data-filter=".mala">Malawi</a>
                      <a href="javascript:" class="btn btn-orange filter" data-filter=".ni">Niger</a>
                      <a href="javascript:" class="btn btn-orange filter" data-filter=".bu">Burundi</a>
                  </div>
                  <hr>
  
                  <div class="gallery-area wow slideInDown">
                      <div id="Container">
                          <div class="mix bu ni">
                              <img class="img-responsive" src="img/gallery/1.jpg" alt="">
                              <div class="gallery-mix-hover text-center">
                                  <a href="index.html#" data-featherlight="img/gallery/1.jpg" class="btn btn-white">View Image</a>
                              </div>
  
                          </div>
                          <div class="mix bu">
                              <img class="img-responsive" src="img/gallery/2.jpg" alt="">
                              <div class="gallery-mix-hover text-center">
                                  <a href="index.html#" data-featherlight="img/gallery/2.jpg" class="btn btn-white">View Image</a>
                              </div>
                          </div>
                          <div class="mix mala bu ni">
                              <img class="img-responsive" src="img/gallery/3.jpg" alt="">
                              <div class="gallery-mix-hover text-center">
                                  <a href="index.html#" data-featherlight="img/gallery/3.jpg" class="btn btn-white">View Image</a>
                              </div>
                          </div>
                          <div class="mix bu">
                              <img class="img-responsive" src="img/gallery/4.jpg" alt="">
                              <div class="gallery-mix-hover text-center">
                                  <a href="index.html#" data-featherlight="img/gallery/4.jpg" class="btn btn-white">View Image</a>
                              </div>
                          </div>
                          <div class="mix mala ni">
                              <img class="img-responsive" src="img/gallery/5.jpg" alt="">
                              <div class="gallery-mix-hover text-center">
                                  <a href="index.html#" data-featherlight="img/gallery/5.jpg" class="btn btn-white">View Image</a>
                              </div>
                          </div>
                          <div class="mix mala ni">
                              <img class="img-responsive" src="img/gallery/6.jpg" alt="">
                              <div class="gallery-mix-hover text-center">
                                  <a href="index.html#" data-featherlight="img/gallery/6.jpg" class="btn btn-white">View Image</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <section>
      <div id="find-us" class="wow slideInDown mb10">
          <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="find-img">
                          <img src="img/find-us.jpg" alt="">
                      </div>
                      <div class="find-text text-center">
                          <div class="spot-heading">
                              <h1>Where to find us</h1>
                              <h2>Locate Us</h2>
                              <p>The address is 17, Akeem Odumosu Crescent, Magodo GRA, Lagos</p>
                          </div>
                          
                      </div>
                      {{-- <div class="find-quote">
                          <p>“Loneliness and the feeling of being unwanted is the most terrible poverty.”</p>
                          <p class="author">- A. P. J. Abdul Kalam</p>
                      </div> --}}
                  </div>
              </div>
          </div>
          {{-- <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="find-img">
                          <img src="img/find-us.jpg" alt="">
                      </div>
                      <div class="find-text text-center">
                          <div class="spot-heading">
                              <h1>Where to find us</h1>
                              <h2>Locate Us.</h2>
                          </div>
                          <div class="find-details">
                              <p>	Or contact us directly:</p>
                              <a class="btn btn-white" href="index.html">Contact Us</a>
                          </div>
                      </div>
                      <div class="find-quote">
                          <p>“Loneliness and the feeling of being unwanted is the most terrible poverty.”</p>
                          <p class="author">- A. P. J. Abdul Kalam</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="find-img">
                          <img src="img/find-us.jpg" alt="">
                      </div>
                      <div class="find-text text-center">
                          <div class="spot-heading">
                              <h1>Where to find us</h1>
                              <h2>Locate Us.</h2>
                          </div>
                          <div class="find-details">
                              <p>	Or contact us directly:</p>
                              <a class="btn btn-white" href="index.html">Contact Us</a>
                          </div>
                      </div>
                      <div class="find-quote">
                          <p>“Loneliness and the feeling of being unwanted is the most terrible poverty.”</p>
                          <p class="author">- A. P. J. Abdul Kalam</p>
                      </div>
                  </div>
              </div>
          </div> --}}
      </div>
  </section>
  <section class="no-padding no-margin">
      <div class="container wow fadeIn">
          <div class="row">
              <div class="col-md-6 col-sm-6">
                  <img class="img-responsive pull-right" src="{{asset('assets/images/Picture2-1.png')}}" alt="">
                  <div class="clearfix"></div>
              </div>
              <div class="col-md-6 col-sm-6">
                  <div class="newsletter">
                      <h1>Join Our Newsletter</h1>
                      <hr>
                      <p>Africa’s Summer Newsletter 2015 is now ready for you to download and read. It’s got news about our projects in Malawi and a recent visit by two of our wonderful donors.</p>
                      @include('includes.partials')
                      <form action="{{route('join-newsletter')}}" method="POST">
                        @csrf
                          <input required  type="email" class="form-control mb10" value="{{old('email')}}" name="email" placeholder="Your Email Address">
                          <input class="btn btn-orange" type="submit" value="Subscribe">
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <section>
      <div class="container wow slideInDown">
          <div class="row">
              <div class="col-md-12">
                  <h1>Latest News</h1>
                  <hr>
              </div>
          </div>
          <div class="blog-area">
              @forelse($news as $post)
              <div class="row">
                  <div class="col-md-4 col-sm-6 blog-post">
                      
                      <h2>{{$post->title}}</h2>
                      <div class="blog-img">
                          <img class="img-responsive img-rounded" src="{{asset('storage/uploads/'.$post->image_url)}}" alt="{{$post->title}}">
                          <div class="blog-img-hover text-center">
                              <a class="btn btn-orange" href="{{route('news-detail', $post->slug)}}">Read Article</a>
                          </div>
                      </div>
                      <p><?= substr(strip_tags($post->body), 0, 50); ?></p>
                      <div class="post-footer">
                          <div class="post-author pull-left">
                              <img src="img/blog/kate.jpg" alt="">
                              <span>{{$post->user->name}}</span>
                          </div>
                          <div class="post-time pull-right orange">
                              <i class="fa fa-clock-o"></i> <span> {{$post->created_at->diffForHumans()}}</span>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                @empty
                @endforelse                      
              </div>
          </div>
      </div>
  </section>
  <hr class="mb30">  
 @endsection