@extends('layouts.base')
@section('title', 'About Us')
@section('content')
    <div class="mb10">
        <section class="mt160">
            <div class="container wow">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <img class="img-responsive" src="{{asset('assets/images/Picture1.png')}}" alt="">
                    </div>
                    <div class="col-md-5 animated slideInRight">
                        <h1>Who We Are</h1>
                        <hr class="small">
                        <h3>SHEA EMPOWERMENT FOUNDATION (SEF)</h3>
                        <p>
                            SEF is a non-governmental organisation founded in 2012, and since its inception SEF has been at the sharp point of demanding, ambitious and complex initiatives aimed at strengthening and optimising the agricultural value chain across Nigeria.
                        </p>
                        <p>
                            SEF activities spans training and capacity building, environmental and parkland management, community and stakeholders engagement, facilitating and managing public-private partnerships, corporate-social responsibility management, advocacy, access to finance and investment and agricultural & rural development.
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5 animated slideInLeft">
                        <h1>Mission & Vision</h1>
                        <hr class="small">
                        <h3>Our Goals & Objectives</h3>
                        <ul style="list-style-type: circle;">
                            <li class="mb10">To promote agricultural and rural development and social inclusion through targeted training and capacity building activities for value chain players with the aim of income generation and poverty alleviation.</li>
                            <li class="mb10">To promote agricultural and rural development and social inclusion through targeted training and capacity building activities for value chain players with the aim of income generation and poverty alleviation.</li>
                            <li class="mb10">To improve livelihoods and ensure food security. </li>
                        </ul>
                    </div>
                    <div class="col-md-7">
                        <img class="img-responsive" src="{{asset('assets/images/Picture1.png')}}" alt="">
                    </div>
                </div>
                <br>
                <h1 class="text-center">Milestones</h1>
                <hr>
                <span class="mb20"></span>
            </div>
        </section>
        <section>
            <div id="projects-help" class="wow slideInDown animated">
                <div class="item">
                    <div class="row">
                      <div class="col-md-7">
                        <img class="img-responsive" src="{{asset('assets/images/Picture1-1.png')}}" alt="">
                      </div>
                      <div class="col-md-5">
                        <div class="project-description" style="margin-left: 12px;">
                          <h1>Milestone 1</h1>
                          <hr class="small">
            
                          <h3>Caring For Nigeria.</h3>
                          <p>Capacity building training of 2000+ women on international best agronomic practices for maximum production, yield and quality.</p>
            
                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-md-7">
                        <img class="img-responsive" src="{{asset('assets/images/Picture1.png')}}" alt="">
                      </div>
                      <div class="col-md-5">
                        <div class="project-description"  style="margin-left: 12px;>
                          <h1>Project 1</h1>
                          <hr class="small">
            
                          <h3>Caring For Nigeria.</h3>
                          <p>Increased capacity of shea butter processors to 20+ tons per month</p>
            
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-md-7">
                        <img class="img-responsive" src="{{asset('assets/images/Picture1.png')}}" alt="">
                      </div>
                      <div class="col-md-5">
                        <div class="project-description"  style="margin-left: 12px;>
                          <h1>Project 1</h1>
                          <hr class="small">
            
                          <h3>Caring For Nigeria.</h3>
                          <p>
                            Advocacy for Shea Trees Protection 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-md-7">
                        <img class="img-responsive" src="{{asset('assets/images/Picture1.png')}}" alt="">
                      </div>
                      <div class="col-md-5">
                        <div class="project-description"  style="margin-left: 12px;>
                          <h1>Project 1</h1>
                          <hr class="small">
            
                          <h3>Caring For Nigeria.</h3>
                          <p>
                            Launch of training centers
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        <section class="container">
            <h1 style="font-size: 150%;" class="text-center">
                Our Partners
            </h1>
            <hr>
            <div class="row">
              @foreach($partners as $partner)
                <div class="col-md-3">
                    <img src="{{asset('storage/uploads/'.$partner->image_url)}}" alt="" class="img-responsive">
                </div>
              @endforeach
            </div>
        </section>
    </div>
@endsection