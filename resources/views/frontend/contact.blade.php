@extends('layouts.base')
@section('title', 'Contact Us')
@section('content')

<section class="mt160">
    <div class="container">
      <div class="row wow slideInDown">
        <div class="col-md-12">
          <h1>Contact Us</h1>
          <hr>
        </div>
      </div>
      <div class="row mt30">
        <div class="col-md-9 wow fadeIn">
         
          <div class="contact-us mt50 mb20">
            <h2>Send Us A Message</h2>
            <div class="row mt30">
              <div class="col-md-8">
                @include('includes.partials')
                <form action="{{route('contact-us')}}" method="POST">
                  @csrf
                  <div class="fl-name row">
                    <div class="col-md-6 @if($errors->has('first_name'))has-error @endif">
                      <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{old('first_name')}}">
                      @if($errors->has('first_name'))
                      @foreach($errors->get('first_name') as $error)
                        <span class="help-block">{{$error}}</span>
                      @endforeach
                    @endif
                    </div>
                    <div class="col-md-6 @if($errors->has('last_name'))has-error @endif">
                      <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}">
                      @if($errors->has('last_name'))
                        @foreach($errors->get('last_name') as $error)
                          <span class="help-block">{{$error}}</span>
                        @endforeach
                      @endif
                    </div>
                  </div>
                  <div class=" @if($errors->has('subject'))has-error @endif">
                    <input name="subject" type="text" class="form-control" placeholder="Subject" value="{{old('subject')}}">
                    @if($errors->has('subject'))
                    @foreach($errors->get('subject') as $error)
                      <span class="help-block">{{$error}}</span>
                    @endforeach
                  @endif
                  </div>
                  <div class=" @if($errors->has('body'))has-error @endif">
                  <textarea name="body" id="message" placeholder="Message" rows="10" class="form-control">{{old('body')}}</textarea>
                  @if($errors->has('body'))
                  @foreach($errors->get('body') as $error)
                    <span class="help-block">{{$error}}</span>
                  @endforeach
                @endif
                  </div>
                <div class="mt30">
                  <button type="submit" style="width: 120px; line-height: 3;" class="btn-orange btn-xl mb30">Submit</a>
                </div>
                </form>
              </div>
              <div class="col-md-4">
                <div class="cotact-details mb30 mt10">
                  <div class="row">
                    <div class="col-md-5">
                      <i class="fa fa-map-marker orange"></i> <span class="text-bold"> Address:</span>
                    </div>
                    <div class="col-md-7">
                      <span>17, Akeem Odumosu Crescent, Magodo GRA, Lagos</span>
                    </div>
                  </div>
                </div>
                <div class="cotact-details mb30">
                  <div class="row">
                    <div class="col-md-5">
                      <i> <img src="img/envelope.png" alt=""></i> <span class="text-bold"> E-mail:</span>
                    </div>
                    <div class="col-md-7">
                      <span>info@sefng.org</span>
                    </div>
                  </div>
                </div>
                <div class="cotact-details mb30">
                  <div class="row">
                    <div class="col-md-5">
                      <i class="fa fa-phone orange"></i> <span class="text-bold"> Phone:</span>
                    </div>
                    <div class="col-md-7">
                      <span>+234 906 289 9919</span>
                      <span>+234 803 517 2779</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection