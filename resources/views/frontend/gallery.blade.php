@extends('layouts.base')
@section('content')
<section class="mt160">
    <div class="container wow slideInDown">
      <div class="row">
        <div class="col-md-12">
          <h1>Gallery</h1>
          <hr>
              <div class="galley-nav mt50">
                <a href="javascript:" class="btn btn-orange filter" data-filter="all">All</a>
                @foreach($galleries as $gallery)
                    <a href="javascript:" class="btn btn-orange filter" data-filter=".{{$gallery->id}}">{{$gallery->title}}</a>
                @endforeach
            </div>
        
      
      <div id="g3c" class="gallery-area">
        <div id="Container">
          <!-- <div class="row">
            <div class="col-md-6"> -->
            @foreach($images as $image)
              <div class="mix {{$image->gallery_id}}">
                <div class="gray-bg">
                  <div class="g3c-img no-margin">
                    <img src="{{asset('storage/uploads/'.$image->image_url)}}" alt="" class="img-responsive">
                    <div class="img-tagline no-margin text-center">
                      <h4 class="text-uppercase white">{{$image->title}}</h4>
                    </div>
                    <div class="g3c-img-hover text-center">
                      <a href="gallery-3columns.html#" data-featherlight="{{asset('storage/uploads/'.$image->image_url)}}" class="btn-white">View Image</a>
                    </div>
                  </div>
                  <div class="img-description no-margin">
                    <p>{{$image->detail}}</p>
                  </div>
                </div>
              </div>
            @endforeach
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
    </div>
  </section>
  <section>
    <div id="find-us" class="wow slideInDown">
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
                <p> Or contact us directly:</p>
                <a class="btn btn-white" href="gallery-3columns.html">Contact Us</a>
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
                <p> Or contact us directly:</p>
                <a class="btn btn-white" href="gallery-3columns.html">Contact Us</a>
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
                <p> Or contact us directly:</p>
                <a class="btn btn-white" href="gallery-3columns.html">Contact Us</a>
              </div>
            </div>
            <div class="find-quote">
              <p>“Loneliness and the feeling of being unwanted is the most terrible poverty.”</p>
              <p class="author">- A. P. J. Abdul Kalam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="no-padding no-margin">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <img class="img-responsive pull-right" src="img/newsletter-girl4.jpg" alt="">
          <div class="clearfix"></div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="newsletter">
            <h1>Join Our Newsletter</h1>
            <hr>
            <p>Africa’s Summer Newsletter 2015 is now ready for you to download and read. It’s got news about our projects in Malawi and a recent visit by two of our wonderful donors.</p>
            <form action="gallery-3columns.html#">
              <input type="text" class="form-control" value="Your Email Address">
              <input class="btn btn-orange" type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="no-margin no-padding">
    <div class="twitter-feeds wow slideInDown">
      <div class="container">
        <div id="twitter-slider">
          <div class="item">
            <div class="row">
              <div class="col-md-11">
                <div class="tweet-time pull-left white">
                  <i class="fa fa-twitter"></i><span>2 days ago</span>
                </div>
                <div class="twitter-tweet pull-right white">  
                  <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel felis a tellus dignissim laoreet. Mauris dapibus ut elit quis pulvinar. </p>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-11">
                <div class="tweet-time pull-left white">
                  <i class="fa fa-twitter"></i><span>2 days ago</span>
                </div>
                <div class="twitter-tweet pull-right white">  
                  <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel felis a tellus dignissim laoreet. Mauris dapibus ut elit quis pulvinar. </p>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-11">
                <div class="tweet-time pull-left white">
                  <i class="fa fa-twitter"></i><span>2 days ago</span>
                </div>
                <div class="twitter-tweet pull-right white">  
                  <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel felis a tellus dignissim laoreet. Mauris dapibus ut elit quis pulvinar. </p>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection