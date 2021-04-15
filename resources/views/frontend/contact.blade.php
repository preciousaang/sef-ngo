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
                <form action="contact-us.html#">
                  <div class="fl-name row">
                    <div class="col-md-6">
                      <input type="text" class="form-control" value="First Name">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" value="Last Name">
                    </div>
                  </div>
                <input type="text" class="form-control" value="Subject">
                <textarea name="your-message" id="message" rows="10" class="form-control">Message</textarea>
                <div class="mt30">
                  <a href="contact-us.html#" class="btn-orange">Submit</a>
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
                      <span>1465 Still Street Cairo, OH 45820</span>
                    </div>
                  </div>
                </div>
                <div class="cotact-details mb30">
                  <div class="row">
                    <div class="col-md-5">
                      <i> <img src="img/envelope.png" alt=""></i> <span class="text-bold"> E-mail:</span>
                    </div>
                    <div class="col-md-7">
                      <span>info@charity.com</span>
                    </div>
                  </div>
                </div>
                <div class="cotact-details mb30">
                  <div class="row">
                    <div class="col-md-5">
                      <i class="fa fa-phone orange"></i> <span class="text-bold"> Phone:</span>
                    </div>
                    <div class="col-md-7">
                      <span>(012) 345-6789</span>
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