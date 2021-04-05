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
                                  data-easing="easeOutExpo" style="bottom:20px;">
                                  <div class="slider-text text-center">
                                      
                                      
                                      <div class="slider-scroll">
                                          <a href="index.html#down">
                                              <img src="img/scroll.png" alt="">
                                              <p>Scroll</p>
                                          </a>
                                      </div>
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
                              <div class="caption sfb slide-2" 
                                  data-x="600" 
                                  data-y="120" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo">
                                  <div class="slider-right">
                                      <div class="sign text-center">
                                          <h2>Sign This Petition</h2>
                                          <span class="droid">$45.000 of a total of $62.000</span>
                                          <div class="progress-holder-slider">
                                              <div class="barWrapper">
                                                  <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" >   
                                                          <span  class="popOver" data-toggle="tooltip" data-placement="top" title="87%"> </span>    
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="fill-info">
                                          <input type="text" class="form-control" value="Name">
                                          <input type="email" class="form-control" value="Email">
                                          <input type="text" class="form-control" value="ZIP/POSTAL">
                                          <div class="choose-option">
                                              <select class="selectpicker form-control">
                                                <option>United States</option>
                                                <option>United States</option>
                                                <option>United States</option>
                                                 </select>
                                          </div>
                                          <input type="text" class="form-control" value="Phone">
                                          <div class="mt10">	
                                              <input type="radio" id="sign-now" name="sign" checked="checked"  />
                                              <label for="sign-now"><span></span>Sign up to join Charity Attyia Team & receive our alerts.</label>
                                          </div>
                                          <div class="mt20 text-center"><a href="index.html#" class="btn-orange">Sign Petition</a></div>
                                          <div class="recent-signers">
                                              <h1>recent signers</h1>
                                              <ul class="list-unstyled">
                                                  <li>about an hour ago<span> <span>  |  </span> Herzegovina - Sarajevo</span></li>
                                                  <li>about 2 hours ago<span> <span>  |  </span> Azerbaijan - Baku</span></li>
                                                  <li>about 3 hours ago<span> <span>  |  </span> Burkina Faso - Ouagadougou</span></li>
                                                  <li>about 4 hours ago<span> <span>  |  </span> Cambodia - Phnom Penh</span></li>
                                              </ul>
                                          </div>
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
                                      
                                      
                                      <div class="slider-scroll">
                                          <a href="index.html#down">
                                              <img src="img/scroll.png" alt="">
                                              <p>Scroll</p>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li data-transition="slide" data-slotamount="10"> 
                              <img  alt="#" src="{{asset('assets/images/Picture1.png')}}"/>
                              <div class="caption sfb sl3" 
                                  data-x="left" 
                                  data-y="center" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo">
                              
                                  <div class="slider-center">
                                      <div class="spon-child text-center">
                                          <h2>sponsor a child</h2>
                                          <span class="droid">Sponsoring a child is the most powerful way that you can fight poverty.</span>
                                      </div>
                                      <div class="child-info">
                                          <div class="child-fill-info">
                                              <input type="text" class="form-control" value="Gender">
                                              <input type="text" class="form-control" value="Location">
                                              <div class="choose-option mt10">
                                                  <select class="selectpicker form-control" title="Age">
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                     </select>
                                              </div>
                                              <div class="mt30 text-center"><a href="index.html#" class="btn-orange-ol">Search</a></div>
                                          </div>
                                          <div class="child-spon-details text-center">
                                              <h1>child sponsorship</h1>
                                              <p>Invites a person like you to support and help look after the well-being of a child in need from another country — until that child &amp; community become self-sufficient.</p>
                                          </div>	
                                      </div>
                                  </div>
                              </div>
                              <div class="caption sfb calc-goals" 
                                  data-x="left" 
                                  data-y="center" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo">
                                  <div class="calc-number">
                                      <h5 class="text-uppercase">latest campaign - $5265.70</h5>
                                      <h5 class="text-uppercase">goal - $7000.00</h5>
                                      <div class="goal-completed text-center">
                                          <h5>87% <span>Completed</span></h5>
                                          <h5>3 <span>Days Left</span></h5>
                                          <h5>2980 <span>Donations</span></h5>
                                          <a href="index.html#" class="btn-white">Donate</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <section class="start-helping">
      <div class="container">
          <div class="row">
              <div id="down" class="col-md-12">
                  <h1>start helping</h1>
                  <hr>
              </div>
          </div>
          <div class="row">
          <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div id="help-now" class="wow slideInDown">
                      <div class="helping-slide item">
                          <div class="helping-slide-img">
                              <img src="img/help1.jpg" alt="">
                          </div>
                          <div class="helping-text text-center">
                              <p>scolarships needed</p>
                          </div>
                          <div class="slider-overlay text-center">
                              <span>1</span>
                          </div>
                          <div class="helping-slide-hover">
                              <div class="helping-btn">
                                  <a href="index.html">Read More</a>
                              </div>
                              <div class="progress-holder">
                                  <div class="barWrapper">
                                      <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-percent="85" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >   
                                              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>    
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="helping-slide item">
                          <div class="helping-slide-img">
                              <img src="img/help2.jpg" alt="">
                          </div>
                          <div class="helping-text text-center">
                              <p>begging for clean water</p>
                          </div>
                          <div class="slider-overlay text-center">
                              <span>2</span>
                          </div>
                          <div class="helping-slide-hover">
                              <div class="helping-btn">
                                  <a href="index.html">Read More</a>
                              </div>
                              <div class="progress-holder">
                                  <div class="barWrapper">
                                      <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-percent="85" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >   
                                              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>    
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="helping-slide item">
                          <div class="helping-slide-img">
                              <img src="img/help3.jpg" alt="">
                          </div>
                          <div class="helping-text text-center">
                              <p>clothes for everyone</p>
                          </div>
                          <div class="slider-overlay text-center">
                              <span>3</span>
                          </div>
                          <div class="helping-slide-hover">
                              <div class="helping-btn">
                                  <a href="index.html">Read More</a>
                              </div>
                              <div class="progress-holder">
                                  <div class="barWrapper">
                                      <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-percent="85" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >   
                                              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>    
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="helping-slide item">
                          <div class="helping-slide-img">
                              <img src="img/help1.jpg" alt="">
                          </div>
                          <div class="helping-text text-center">
                              <p>scolarships needed</p>
                          </div>
                          <div class="slider-overlay text-center">
                              <span>4</span>
                          </div>
                          <div class="helping-slide-hover">
                              <div class="helping-btn">
                                  <a href="index.html">Read More</a>
                              </div>
                              <div class="progress-holder">
                                  <div class="barWrapper">
                                      <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-percent="85" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >   
                                              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>    
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="helping-slide item">
                          <div class="helping-slide-img">
                              <img src="img/help2.jpg" alt="">
                          </div>
                          <div class="helping-text text-center">
                              <p>begging for clean water</p>
                          </div>
                          <div class="slider-overlay text-center">
                              <span>5</span>
                          </div>
                          <div class="helping-slide-hover">
                              <div class="helping-btn">
                                  <a href="index.html">Read More</a>
                              </div>
                              <div class="progress-holder">
                                  <div class="barWrapper">
                                      <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-percent="85" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >   
                                              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>    
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="helping-slide item">
                          <div class="helping-slide-img">
                              <img src="img/help3.jpg" alt="">
                          </div>
                          <div class="helping-text text-center">
                              <p>clothes for everyone</p>
                          </div>
                          <div class="slider-overlay text-center">
                              <span>6</span>
                          </div>
                          <div class="helping-slide-hover">
                              <div class="helping-btn">
                                  <a href="index.html">Read More</a>
                              </div>
                              <div class="progress-holder">
                                  <div class="barWrapper">
                                      <div class="progress">
                                            <div class="progress-bar" role="progressbar" data-percent="85" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >   
                                              <span  class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>    
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-1"></div>
          </div>
      </div>
  </section>
  <section>
          <div id="projects-help" class="wow slideInDown">
              <div class="item">
                  <div class="row">
                      <div class="col-md-7">
                          <img class="img-responsive" src="img/project-girl.jpg" alt="">
                      </div>
                      <div class="col-md-5">
                          <div class="project-description">
                              <h1>Project 1</h1>
                              <hr class="small">
  
                              <h3>Caring For Nigeria.</h3>
                              <p>The United Republic of Tanzania is an emerging economy with high potential. But despite impressive growth in its gross domestic product (GDP) over the past decade, it remains one of the world's poorest countries in terms of per capita income.</p>
  
                              <a class="btn btn-orange" href="index.html">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="row">
                      <div class="col-md-7">
                          <img class="img-responsive" src="img/project-girl.jpg" alt="">
                      </div>
                      <div class="col-md-5">
                          <div class="project-description">
                              <h1>Project 1</h1>
                              <hr class="small">
  
                              <h3>Caring For Nigeria.</h3>
                              <p>The United Republic of Tanzania is an emerging economy with high potential. But despite impressive growth in its gross domestic product (GDP) over the past decade, it remains one of the world's poorest countries in terms of per capita income.</p>
  
                              <a class="btn btn-orange" href="index.html">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="row">
                      <div class="col-md-7">
                          <img class="img-responsive" src="img/project-girl.jpg" alt="">
                      </div>
                      <div class="col-md-5">
                          <div class="project-description">
                              <h1>Project 1</h1>
                              <hr class="small">
  
                              <h3>Caring For Nigeria.</h3>
                              <p>The United Republic of Tanzania is an emerging economy with high potential. But despite impressive growth in its gross domestic product (GDP) over the past decade, it remains one of the world's poorest countries in terms of per capita income.</p>
  
                              <a class="btn btn-orange" href="index.html">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </section>
  {{-- <section>
      <div class="container wow fadeIn">
          <div class="row">
              
              <div class="col-sm-3 text-center help-ways">
                  <img src="img/building.png" alt="">
                  <h2>Be An Ambassador</h2>
                  <hr>
                  <p>Do you want to spearhead initiatives that inspire mass change? </p>
                  <a class="btn btn-orange" href="index.html">Apply Now</a>
              </div>
              
              <div class="col-sm-3 text-center help-ways">
                  <img src="img/heart.png" alt="">
                  <h2>Work With Us</h2>
                  <hr>
                  <p>Are you a leader who shares our passion for social change? </p>
                  <a class="btn btn-orange" href="index.html">Start Today</a>
              </div>
  
              <div class="col-sm-3 text-center help-ways">
                  <img src="img/event.png" alt="">
                  <h2>Host An Event</h2>
                  <hr>
                  <p>Do you want to spearhead initiatives that inspire mass change?  </p>
                  <a class="btn btn-orange" href="index.html">Start Now</a>
              </div>
  
          </div>
      </div>
  </section> --}}
  
  
  <section>
      <div id="under-spotlight" class="wow fadeIn">
          <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="spot-img">
                          <img src="img/under-spotlight.jpg" alt="">
                      </div>
                      <div class="spot-text text-center">
                          <div class="spot-heading">
                              <h1>under <br> spotlight</h1>
                              <h2>Meet Abeni.</h2>
                          </div>
                          <div class="spot-details">
                              <p>	“I'm a 7-year-old girl from Nigeria, and you can change my world for good!”	</p>
                              <p>I've been hoping for a sponsor like you!</p>
                              <a class="btn btn-white" href="index.html">Volunteer</a>
                          </div>
  
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="spot-img">
                          <img src="img/under-spotlight.jpg" alt="">
                      </div>
                      <div class="spot-text text-center">
                          <div class="spot-heading">
                              <h1>under <br> spotlight</h1>
                              <h2>Meet Abeni.</h2>
                          </div>
                          <div class="spot-details">
                              <p>	“I'm a 7-year-old girl from Nigeria, and you can change my world for good!”	</p>
                              <p>I've been hoping for a sponsor like you!</p>
                              <a class="btn btn-white" href="index.html">Volunteer</a>
                          </div>
  
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="spot-img">
                          <img src="img/under-spotlight.jpg" alt="">
                      </div>
                      <div class="spot-text text-center">
                          <div class="spot-heading">
                              <h1>under <br> spotlight</h1>
                              <h2>Meet Abeni.</h2>
                          </div>
                          <div class="spot-details">
                              <p>	“I'm a 7-year-old girl from Nigeria, and you can change my world for good!”	</p>
                              <p>I've been hoping for a sponsor like you!</p>
                              <a class="btn btn-white" href="index.html">Volunteer</a>
                          </div>
  
                      </div>
                  </div>
              </div>
          </div>
          <div class="item">
              <div class="row">
                  <div class="col-md-12">
                      <div class="spot-img">
                          <img src="img/under-spotlight.jpg" alt="">
                      </div>
                      <div class="spot-text text-center">
                          <div class="spot-heading">
                              <h1>under <br> spotlight</h1>
                              <h2>Meet Abeni.</h2>
                          </div>
                          <div class="spot-details">
                              <p>	“I'm a 7-year-old girl from Nigeria, and you can change my world for good!”	</p>
                              <p>I've been hoping for a sponsor like you!</p>
                              <a class="btn btn-white" href="index.html">Volunteer</a>
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
                  <h1>what we do</h1>
                  <hr>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-6 our-work-main">
                  <div class="our-work-inner">
                      <img class="img-responsive" src="img/environment.jpg" alt="">
                      <div class="our-work-hover">
                          <div class="our-work-hover-text text-uppercase">
                              <h4>Environment</h4>
                          </div>
                      </div>
                  </div>
                  <div class="our-work-content">
                      <p>Fuel-efficient cookstoves & forest conservation, fruit tree planting, etc.</p>
                      <span>23 Projects</span><a class="btn btn-orange pull-right" href="index.html">View Projects</a>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 our-work-main">
                  <div class="our-work-inner">
                      <img  class="img-responsive" src="img/education.jpg" alt="">
                      <div class="our-work-hover">
                          <div class="our-work-hover-text text-uppercase">
                              <h4>Education</h4>
                          </div>
                      </div>
                  </div>
                  <div class="our-work-content">
                      <p>Pre-schools, primary schools, secondary schools and adult literacy.</p>
                      <span>18 Projects</span><a class="btn btn-orange pull-right" href="index.html">View Projects</a>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 our-work-main">
                  <div class="our-work-inner">
                      <img  class="img-responsive" src="img/healthcare.jpg" alt="">
                      <div class="our-work-hover">
                          <div class="our-work-hover-text text-uppercase">
                              <h4>Healthcare</h4>
                          </div>
                      </div>
                  </div>
                  <div class="our-work-content">
                      <p>Community dispensary and rural great healthy projects.</p>
                      <span>28 Projects</span><a class="btn btn-orange pull-right" href="index.html">View Projects</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section>
      <div class="numbers-saved wow slideInDown">
          <div class="container">
              <div class="row">
                  <div class="col-md-3 numbers text-center">
                      <h4><span class="stat-count" data-count="45">45</span>.089</h4>
                      <p>People we’ve served</p>
                  </div>
                  <div class="col-md-3 numbers text-center">
                      <h4><span class="stat-count" data-count="145">145</span></h4>
                      <p>Countries we’ve worked in</p>
                  </div>
                  <div class="col-md-3 numbers text-center">
                      <h4><span class="stat-count" data-count="100">100</span>%</h4>
                      <p>Public donations going towards projects</p>
                  </div>
                  <div class="col-md-3 numbers text-center">
                      <h4><span class="stat-count" data-count="12">12</span>.908</h4>
                      <p>Public events maintained</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section>
      <div class="join-compaign">
          
                  <div class="container wow fadeIn">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <div id="join-compaign-slider">
                                  <div class="item">
                                      <div class="copaign-slider-text text-center">
                                          <h3>JOIN OUR CAMPAIGN!  DONATION SO FAR: <span class="orange">$450.000</span></h3>
                                          <a class="btn btn-orange" href="index.html">Donate Now</a>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="copaign-slider-text text-center">
                                          <h3>JOIN OUR CAMPAIGN!  DONATION SO FAR: <span class="orange">$450.000</span></h3>
                                          <a class="btn btn-orange" href="index.html">Donate Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
              
          
          <div class="joined-team wow slideInDown">
              <div class="container">
                  <div class="row">
                      <div class="col-md-15 col-sm-4 text-center">
                          <div class="joined-team-img">
                              <img src="img/team/janet.jpg" alt="">
                              <div class="joined-team-overlay">
                                  <h4>Janet Kamer</h4>
                              </div>						
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-4 text-center" >
                          <div class="joined-team-img">
                              <img src="img/team/donald.jpg" alt="">
                              <div class="joined-team-overlay">
                                  <h4>Donald James</h4>
                              </div>						
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-4 text-center">
                          <div class="joined-team-img">
                              <img src="img/team/ann.jpg" alt="">
                              <div class="joined-team-overlay">
                                  <h4>Ann-Marie Koe</h4>
                              </div>						
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-4 text-center">
                          <div class="joined-team-img">
                              <img src="img/team/john.jpg" alt="">
                              <div class="joined-team-overlay">
                                  <h4>John Meredim</h4>
                              </div>						
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-4 text-center">
                          <div class="joined-team-img">
                              <img src="img/team/tressa.jpg" alt="">
                              <div class="joined-team-overlay">
                                  <h4>Teresa Lisbon</h4>
                              </div>						
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section>
    <div id="related-products" class="wow slideInDown">
      <div class="item">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Shop online</h1>
            <hr>
          </div>
        </div>
          <div class="row mt30">
            <div class="col-md-4">
              <div class="sidebar-product product text-center">
                <img class="img-responsive" src="img/shop1.jpg" alt="">
                <h5 class="text-uppercase">Educational toys for kids</h5>
                <div class="shop-price">
                  <span class="d-price">$25.00</span>
                  <span class="o-price">$27.90</span>
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
                </div>
            <div class="col-md-4">
              <div class="sidebar-product text-center product">
                <img class="img-responsive" src="img/shop2.jpg" alt="">
                <h5 class="text-uppercase">adult literacy classes</h5>
                <div class="shop-price">
                  <span class="d-price">$27.00</span>
                  <span class="o-price">$31.50</span>
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star10" name="rating" value="5" /><label class = "full" for="star10" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star9half" name="rating" value="4 and a half" /><label class="half" for="star9half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star9" name="rating" value="4" /><label class = "full" for="star9" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star8half" name="rating" value="3 and a half" /><label class="half" for="star8half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star8" name="rating" value="3" /><label class = "full" for="star8" title="Meh - 3 stars"></label>
                      <input type="radio" id="star7half" name="rating" value="2 and a half" /><label class="half" for="star7half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star7" name="rating" value="2" /><label class = "full" for="star7" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star6half" name="rating" value="1 and a half" /><label class="half" for="star6half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star6" name="rating" value="1" /><label class = "full" for="star6" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf6" name="rating" value="half" /><label class="half" for="starhalf6" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="sidebar-product text-center product">
                <img class="img-responsive" src="img/shop3.jpg" alt="">
                <h5 class="text-uppercase">water containers 25L</h5>
                <div class="shop-price">
                  <span class="d-price">$15.00</span>
                  <!-- <span class="o-price">$27.90</span> -->
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star15" name="rating" value="5" /><label class = "full" for="star15" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star14half" name="rating" value="4 and a half" /><label class="half" for="star14half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star14" name="rating" value="4" /><label class = "full" for="star14" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star13half" name="rating" value="3 and a half" /><label class="half" for="star13half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star13" name="rating" value="3" /><label class = "full" for="star13" title="Meh - 3 stars"></label>
                      <input type="radio" id="star12half" name="rating" value="2 and a half" /><label class="half" for="star12half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star12" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 12 stars"></label>
                      <input type="radio" id="star11half" name="rating" value="1 and a half" /><label class="half" for="star11half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star11" name="rating" value="1" /><label class = "full" for="star11" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf11" name="rating" value="half" /><label class="half" for="starhalf11" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Shop online</h1>
            <hr>
          </div>
        </div>
          <div class="row mt30">
            <div class="col-md-4">
              <div class="sidebar-product product text-center">
                <img class="img-responsive" src="img/shop1.jpg" alt="">
                <h5 class="text-uppercase">Educational toys for kids</h5>
                <div class="shop-price">
                  <span class="d-price">$25.00</span>
                  <span class="o-price">$27.90</span>
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star20" name="rating" value="5" /><label class = "full" for="star20" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star20half" name="rating" value="4 and a half" /><label class="half" for="star20half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star19" name="rating" value="4" /><label class = "full" for="star19" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star19half" name="rating" value="3 and a half" /><label class="half" for="star19half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star18" name="rating" value="3" /><label class = "full" for="star18" title="Meh - 3 stars"></label>
                      <input type="radio" id="star18half" name="rating" value="2 and a half" /><label class="half" for="star18half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star17" name="rating" value="2" /><label class = "full" for="star17" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star17half" name="rating" value="1 and a half" /><label class="half" for="star17half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star16" name="rating" value="1" /><label class = "full" for="star16" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="star16half" name="rating" value="half" /><label class="half" for="star16half" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
                </div>
            <div class="col-md-4">
              <div class="sidebar-product text-center product">
                <img class="img-responsive" src="img/shop2.jpg" alt="">
                <h5 class="text-uppercase">adult literacy classes</h5>
                <div class="shop-price">
                  <span class="d-price">$27.00</span>
                  <span class="o-price">$31.50</span>
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star25" name="rating" value="5" /><label class = "full" for="star25" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star25half" name="rating" value="4 and a half" /><label class="half" for="star25half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star24" name="rating" value="4" /><label class = "full" for="star24" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star24half" name="rating" value="3 and a half" /><label class="half" for="star24half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star23" name="rating" value="3" /><label class = "full" for="star23" title="Meh - 3 stars"></label>
                      <input type="radio" id="star23half" name="rating" value="2 and a half" /><label class="half" for="star23half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star22" name="rating" value="2" /><label class = "full" for="star22" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star22half" name="rating" value="1 and a half" /><label class="half" for="star22half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star21" name="rating" value="1" /><label class = "full" for="star21" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf21" name="rating" value="half" /><label class="half" for="starhalf21" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="sidebar-product text-center product">
                <img class="img-responsive" src="img/shop3.jpg" alt="">
                <h5 class="text-uppercase">water containers 25L</h5>
                <div class="shop-price">
                  <span class="d-price">$15.00</span>
                  <!-- <span class="o-price">$27.90</span> -->
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star30" name="rating" value="5" /><label class = "full" for="star30" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star30half" name="rating" value="4 and a half" /><label class="half" for="star30half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star29" name="rating" value="4" /><label class = "full" for="star29" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star29half" name="rating" value="3 and a half" /><label class="half" for="star29half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star28" name="rating" value="3" /><label class = "full" for="star28" title="Meh - 3 stars"></label>
                      <input type="radio" id="star28half" name="rating" value="2 and a half" /><label class="half" for="star28half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star27" name="rating" value="2" /><label class = "full" for="star27" title="Kinda bad - 12 stars"></label>
                      <input type="radio" id="star27half" name="rating" value="1 and a half" /><label class="half" for="star27half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star26" name="rating" value="1" /><label class = "full" for="star26" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf26" name="rating" value="half" /><label class="half" for="starhalf26" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Shop online</h1>
            <hr>
          </div>
        </div>
          <div class="row mt30">
            <div class="col-md-4">
              <div class="sidebar-product product text-center">
                <img class="img-responsive" src="img/shop1.jpg" alt="">
                <h5 class="text-uppercase">Educational toys for kids</h5>
                <div class="shop-price">
                  <span class="d-price">$25.00</span>
                  <span class="o-price">$27.90</span>
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star35" name="rating" value="5" /><label class = "full" for="star35" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star35half" name="rating" value="4 and a half" /><label class="half" for="star35half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star34" name="rating" value="4" /><label class = "full" for="star34" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star34half" name="rating" value="3 and a half" /><label class="half" for="star34half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star33" name="rating" value="3" /><label class = "full" for="star33" title="Meh - 3 stars"></label>
                      <input type="radio" id="star33half" name="rating" value="2 and a half" /><label class="half" for="star33half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star32" name="rating" value="2" /><label class = "full" for="star32" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star32half" name="rating" value="1 and a half" /><label class="half" for="star32half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star31" name="rating" value="1" /><label class = "full" for="star31" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf31" name="rating" value="half" /><label class="half" for="starhalf31" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
                </div>
            <div class="col-md-4">
              <div class="sidebar-product text-center product">
                <img class="img-responsive" src="img/shop2.jpg" alt="">
                <h5 class="text-uppercase">adult literacy classes</h5>
                <div class="shop-price">
                  <span class="d-price">$27.00</span>
                  <span class="o-price">$31.50</span>
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star40" name="rating" value="5" /><label class = "full" for="star40" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star39half" name="rating" value="4 and a half" /><label class="half" for="star39half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star39" name="rating" value="4" /><label class = "full" for="star39" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star38half" name="rating" value="3 and a half" /><label class="half" for="star38half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star38" name="rating" value="3" /><label class = "full" for="star38" title="Meh - 3 stars"></label>
                      <input type="radio" id="star37half" name="rating" value="2 and a half" /><label class="half" for="star37half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star37" name="rating" value="2" /><label class = "full" for="star37" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star36half" name="rating" value="1 and a half" /><label class="half" for="star36half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star36" name="rating" value="1" /><label class = "full" for="star36" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf36" name="rating" value="half" /><label class="half" for="starhalf36" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="sidebar-product text-center product">
                <img class="img-responsive" src="img/shop3.jpg" alt="">
                <h5 class="text-uppercase">water containers 25L</h5>
                <div class="shop-price">
                  <span class="d-price">$15.00</span>
                  <!-- <span class="o-price">$27.90</span> -->
                </div>
                <div class="rating-area">
                  <fieldset class="rating">
                      <input type="radio" id="star45" name="rating" value="5" /><label class = "full" for="star45" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star44half" name="rating" value="4 and a half" /><label class="half" for="star44half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star44" name="rating" value="4" /><label class = "full" for="star44" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star43half" name="rating" value="3 and a half" /><label class="half" for="star43half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star43" name="rating" value="3" /><label class = "full" for="star43" title="Meh - 3 stars"></label>
                      <input type="radio" id="star42half" name="rating" value="2 and a half" /><label class="half" for="star42half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star42" name="rating" value="2" /><label class = "full" for="star42" title="Kinda bad - 12 stars"></label>
                      <input type="radio" id="star41half" name="rating" value="1 and a half" /><label class="half" for="star41half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star41" name="rating" value="1" /><label class = "full" for="star41" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf41" name="rating" value="half" /><label class="half" for="starhalf41" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                </div>
                <div class="clearfix">  </div>
                <div class="shop-cart">
                  <a href="index.html"><i class="fa fa-shopping-cart fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-refresh fa-lg"></i></a>
                  <a href="index.html"><i class="fa fa-heart fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
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
          </div>
      </div>
  </section>
  <section class="no-padding no-margin">
      <div class="container wow fadeIn">
          <div class="row">
              <div class="col-md-6 col-sm-6">
                  <img class="img-responsive pull-right" src="img/newsletter.jpg" alt="">
                  <div class="clearfix"></div>
              </div>
              <div class="col-md-6 col-sm-6">
                  <div class="newsletter">
                      <h1>Join Our Newsletter</h1>
                      <hr>
                      <p>Africa’s Summer Newsletter 2015 is now ready for you to download and read. It’s got news about our projects in Malawi and a recent visit by two of our wonderful donors.</p>
                      <form action="index.html#">
                          <input type="text" class="form-control" value="Your Email Address">
                          <input class="btn btn-orange" type="submit" value="Subscribe">
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section>
      <div class="team-area wow slideInDown">
          <div class="row">
              <div class="col-md-4 col-sm-6 no-padding team-member">
                  <div class="team-img">
                      <img src="img/our-team/kris.jpg" alt="">
                      <div class="overlay"></div>
                  </div>
                  <div class="team-text">
                      <h1>Kris G. Torres</h1>
                      <h5>- Clothing Help</h5>
                  </div>
                  
              </div>
              <div class="col-md-4 col-sm-6 no-padding team-member">
                  <div class="team-img">
                      <img src="img/our-team/william.jpg" alt="">
                      <div class="overlay"></div>
                  </div>
                  <div class="team-text">
                      <h1>William Andre</h1>
                      <h5>- Dentistry Help</h5>
                  </div>
                  
              </div>
              <div class="col-md-4 col-sm-6 no-padding team-member active">
                  <div class="team-img">
                      <img src="img/our-team/mari.jpg" alt="">
                      <div class="overlay"></div>
                  </div>
                  <div class="team-text">
                      <h1>Mari A. Ward</h1>
                      <h5>- Toys Help</h5>
                  </div>
                  <div class="member-hover-top">
                      <h1>generous donors</h1>
                      <hr>
                      <p>See all people who help us day by day by donating stuff for our poor children. </p>
                      <a href="index.html" class="btn btn-orange">All Donors</a>
                  </div>
              </div>
              <div class="clearfix visible-md-block"></div>
              <div class="col-md-4 col-sm-6 no-padding team-member">
                  <div class="team-img">
                      <img src="img/our-team/melissa.jpg" alt="">
                      <div class="overlay"></div>
                  </div>
                  <div class="team-text">
                      <h1>Melissa H. Ness</h1>
                      <h5>- Water Help</h5>
                  </div>
                  
              </div>
              <div class="col-md-4 col-sm-6 no-padding team-member">
                  <div class="team-img">
                      <img src="img/our-team/vera.jpg" alt="">
                      <div class="overlay"></div>
                  </div>
                  <div class="team-text">
                      <h1>Vera J. Gent</h1>
                      <h5>- Seeds Help</h5>
                  </div>
                  
              </div>
              <div class="col-md-4 col-sm-6 no-padding team-member">
                  <div class="team-img">
                      <img src="img/our-team/kris.jpg" alt="">
                  </div>
                  <div class="team-text">
                      <h1>Kris G. Torres</h1>
                      <h5>- Clothing Help</h5>
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
              <div class="row">
                  <div class="col-md-4 col-sm-6 blog-post">
                      <h4 class="orange">Africa  /  Kids  /  Water</h4>
                      <h2>Getting Ready For Getting Some Warm & Nice Water</h2>
                      <div class="blog-img">
                          <img class="img-responsive" src="img/blog/blog1.jpg" alt="">
                          <div class="blog-img-hover text-center">
                              <a class="btn btn-orange" href="index.html">Read Article</a>
                          </div>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare tempor iaculis [...]</p>
                      <div class="post-footer">
                          <div class="post-author pull-left">
                              <img src="img/blog/kate.jpg" alt="">
                              <span>Kate Dawson</span>
                          </div>
                          <div class="post-time pull-right orange">
                              <i class="fa fa-clock-o"></i> <span> August 12, 2015</span>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  
                  <div class="col-md-4 col-sm-6 blog-post">
                      <h4 class="orange">Seeds  /  Food</h4>
                      <h2>Ylang-ylang Harvest For 25 People & Their Families</h2>
                      <div class="blog-img">
                          <img class="img-responsive" src="img/blog/blog2.jpg" alt="">
                          <div class="blog-img-hover text-center">
                              <a class="btn btn-orange" href="index.html">Read Article</a>
                          </div>
                      </div>
                      <p>Vestibulum faucibus tempor leo id viverra. Praesent cre vulputate, urna in malesuada egesta [...]</p>
                      <div class="post-footer">
                          <div class="post-author pull-left">
                              <img src="img/blog/jessica.jpg" alt="">
                              <span>Jessica Moe</span>
                          </div>
                          <div class="post-time pull-right orange">
                              <i class="fa fa-clock-o"></i> <span> August 11, 2015</span>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                  
                  <div class="col-md-4 col-sm-6 blog-post">
                      <h4 class="orange">Women  /  Poverty</h4>
                      <h2>African Women Are Also Very Kind & Beautiful</h2>
                      <div class="blog-img">
                          <img class="img-responsive" src="img/blog/blog3.jpg" alt="">
                          <div class="blog-img-hover text-center">
                              <a class="btn btn-orange" href="index.html">Read Article</a>
                          </div>
                      </div>
                      <p>Ut dapibus imperdiet eros at molestie. Integer congue eget massa sed eleifend. Nullam semper [...]</p>
                      <div class="post-footer">
                          <div class="post-author pull-left">
                              <img src="img/blog/dana.jpg" alt="">
                              <span>Dana Brown</span>
                          </div>
                          <div class="post-time pull-right orange">
                              <i class="fa fa-clock-o"></i> <span> August 12, 2015</span>
                          </div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
                      
              </div>
          </div>
      </div>
  </section>
  <section>
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