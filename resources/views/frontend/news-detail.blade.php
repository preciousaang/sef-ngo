@extends('layouts.base')
@section('title', $post->title)
@section('content')
<section class="mt160">
    <div class="container wow fadeIn">
      <div class="row">
        <div class="col-md-12">
          <h1>{{$post->title}}</h1>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="blog-post-fwidth bounceInDown">
            <img class="img-responsive" src="{{asset('storage/uploads/'.$post->image_url)}}" alt="">
            <div class="post-title">
              <h3>{{$post->title}}</h3>
              <span><i style="color:#f79f17;" class="fa fa-user"></i>&nbsp;Author: {{$post->user->name}}</span>
              <span><img src="img/calender.png" alt="">  {{$post->created_at->toDateString()}}</span>
              <span><img src="img/timer.png" alt=""> {{$post->created_at->toTimeString()}}</span>
            </div>
            <hr>
            <div class="mb10">
              {!! $post->body !!}
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
         
      </div>
    </div>
  
  
  </section>
  
@endsection