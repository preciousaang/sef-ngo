@extends('layouts.base')
@section('content')
<section class="mt160">
    <div class="container wow slideInDown">
      <div class="row">
        <div class="col-md-12">
          <h1>Gallery</h1>
          <hr>
              <div class="galley-nav mt50">
                @if(count($images) && count($galleries))
                  <a href="javascript:" class="btn btn-orange filter" data-filter="all">All</a>
                  @foreach($galleries as $gallery)
                      <a href="javascript:" class="btn btn-orange filter" data-filter=".{{$gallery->id}}">{{$gallery->title}}</a>
                  @endforeach
                @endif
            </div>
        
      
      <div id="g3c" class="gallery-area">
        <div id="Container">
          <!-- <div class="row">
            <div class="col-md-6"> -->
              @if(count($images) && count($galleries))
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
            @endif
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
    </div>
  </section>
  <hr>
  <section class="no-padding no-margin mb30">
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
            <p>Be the first to get our latest news.</p>
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
  
@endsection