@extends('layouts.base')
@section('title', 'Team')
@section('content')
<section class="mt160 mb50">
    <div class="container wow slideInDown">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Core Team</h1>
          <hr>
        </div>
      </div>
      <div class="row mt30">
        @forelse($teams as $team)
          <div class="col-sm-6 mt20  p-lr-30">
            <div class="row gray-bg">
              <div class="col-md-6 no-padding-left">
                <img src="{{asset('storage/uploads/'.$team->image_url)}}" alt="" class="img-responsive">
              </div>
              <div class="col-md-6">
                <h5 class="text-uppercase fz-16 mt30">{{$team->name}}</h5>
                @if($team->title)
                  <h5 class="orange fz-16">- {{$team->title}}</h5>
                @endif
                <p class="mt30 mb30">{{$team->details}}</p>
                <div class="social-detail mt20 no-padding no-margin">
                  @if($team->facebook_url)
                    <a href="{{$team->facebook_url}}"><i class="fa fa-facebook-f"></i></a>
                  @endif
                  @if($team->twitter_url)
                    <a href="{{$team->twitter_url}}"><i class="fa fa-twitter"></i></a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          @empty
        @endforelse
      </div>
      
    </div>
  </section>
@endsection