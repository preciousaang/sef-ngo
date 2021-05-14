@extends('layouts.base')
@section('title', 'Projects')
@section('content')
<section class="mt160">
    <div class="container">
      <div class="row wow slideInDown">
        <div class="col-md-12">
          <h1>Projects</h1>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            @forelse($projects as $project)
                <div class="blog-post-fwidth wow fadeIn">
                    <img class="img-responsive" src="{{asset('storage/uploads/'.$project->image_url)}}" alt="">
                    <div class="post-title">
                        <h1>{{$project->title}}</h1>
                        <hr>
                        <h3>{{$project->subtitle}}</h3>
                        {{-- <span><i style="color:#f79f17;" class="fa fa-user"></i>&nbsp;Author: {{$post->user->name}}</span> --}}
                        <span><img src="img/calender.png" alt="">  {{$project->created_at->toDateString()}}</span>
                        <span><img src="img/timer.png" alt=""> {{$project->created_at->toTimeString()}}</span>
                    </div>
                    <p class="mt20"><?= substr(strip_tags($project->detail), 0, 359) ?></p>
                   
                    <hr>
                </div>
            @empty
            @endforelse
            <div class="mb20">
                {{$projects->links()}}
            </div>
            
          </div>
        </div>
      </div>
  
  
  </section>
  
@endsection