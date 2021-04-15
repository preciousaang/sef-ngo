@extends('layouts.base')
@section('title', 'News')
@section('content')
<section class="mt160">
    <div class="container">
      <div class="row wow slideInDown">
        <div class="col-md-12">
          <h1>News</h1>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            @forelse($news as $post)
                <div class="blog-post-fwidth wow fadeIn">
                    <img class="img-responsive" src="{{asset('storage/uploads/'.$post->image_url)}}" alt="">
                    <div class="post-title">
                        <h3>{{$post->title}}</h3>
                        <span><i style="color:#f79f17;" class="fa fa-user"></i>&nbsp;Author: {{$post->user->name}}</span>
                        <span><img src="img/calender.png" alt="">  {{$post->created_at->toDateString()}}</span>
                        <span><img src="img/timer.png" alt=""> {{$post->created_at->toTimeString()}}</span>
                    </div>
                    <p class="mt20"><?= substr(strip_tags($post->body), 0, 359) ?></p>
                    <div class="mt20 mb30">
                        <a href="{{route('news-detail', $post->slug)}}" class="btn-orange">Read Article</a>
                    </div>
                    <hr>
                </div>
            @empty
            @endforelse
            <div class="mb20">
                {{$news->links()}}
            </div>
            
          </div>
        </div>
      </div>
  
  
  </section>
  
@endsection