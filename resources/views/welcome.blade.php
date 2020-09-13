
@extends('layouts.app')
@section('headSection')
<style>

</style>
@endsection
@section('main-content')

<div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
          <img class="one-third js-fullheight align-self-end order-md-first img-fluid" src="{{ asset('user/images/undraw_co-working_825n.svg') }}" alt="">
          <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
            <div class="text mt-5">
              <span class="subheading">Infoware Nepal Pvt. Ltd.</span>
              <h1 class="mb-3"><span>Finman</span> <span>Accounting</span> <span>Software</span></h1>
              <p>One of the Most Trusted Fintech Company of Nepal.</p>
              <p><a href="#" class="btn btn-secondary px-4 py-3">Get in touch</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-partner">
      <div class="container">
        <div class="row">
          <div class="col-sm ftco-animate">
            <a href="#" class="partner"><img src="{{ asset('user/images/partner-1.png') }}" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-sm ftco-animate">
            <a href="#" class="partner"><img src="{{ asset('user/images/partner-2.png') }}" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-sm ftco-animate">
            <a href="#" class="partner"><img src="{{ asset('user/images/partner-3.png') }}" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-sm ftco-animate">
            <a href="#" class="partner"><img src="{{ asset('user/images/partner-4.png') }}" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-sm ftco-animate">
            <a href="#" class="partner"><img src="{{ asset('user/images/partner-5.png') }}" class="img-fluid" alt="Colorlib Template"></a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- <section class="ftco-domain">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-5 heading-white mb-4 mb-sm-4 mb-lg-0 ftco-animate">
            <h2>Search Your Domain Name</h2>
            <p>A small river named Duden flows by their place</p>
          </div>
          <div class="col-lg-7 p-5 ftco-wrap ftco-animate">
            <form action="#" class="domain-form d-flex mb-3">
              <div class="form-group domain-name">
                <input type="text" class="form-control name px-4" placeholder="Enter your domain name...">
              </div>
              <div class="form-group domain-select d-flex">
                <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                    <option value="">.com</option>
                    <option value="">.net</option>
                    <option value="">.biz</option>
                    <option value="">.co</option>
                    <option value="">.me</option>
                  </select>
                </div>
                <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
              </div>
            </form>
            <p class="domain-price mt-2">
              <span><small>.com</small> $9.75</span> 
              <span><small>.net</small> $9.50</span> 
              <span><small>.biz</small> $8.95</span> 
              <span><small>.co</small> $7.80</span>
              <span><small>.me</small> $7.95</span>
            </p>
          </div>
        </div>
      </div>
    </section> -->
  
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-computer"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Desktop Application</h3>
                <p class="mb-0">We are financial system provider for large number of organization from more than 20 years.Our product "FINMAN" is used in more than 1000 organizations wide spread inside the country. </p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-www"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Web Application</h3>
                <p class="mb-0">We have been emphasizing on developing various web applications which includes payroll system, ,enterprise resource planning and other customized websites             </div>
            </div>    
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-app"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Mobile Application</h3>
                <p>We have been developing mobile application for mobile banking that enables user to facilitate their transaction through online .</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-scrum"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Agility</h3>
                <p>We know you need to move fast to win. Our team engage immediately and grow to accommodate new ideas and needs.</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-skill"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Domain Expertise</h3>
                <p>We leverage domain knowledge and data analysis to build modern experiences across various organizations  .</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-process"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Excellent Support</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-3">What Our Financial Software Can Do For You</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 py-5 d-flex align-items-center">
            <img src="{{ asset('user/images/undraw_referral_4ki4.svg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 py-5">
            <div class="row">
              <div class="col-md-12 ftco-animate d-flex">
                <div class="media block-6 services border d-flex p-3 mb-3">
                  <div class="icon icon-2 d-flex align-items-center justify-content-center">
                    <span class="flaticon-scrum"></span>
                  </div>
                  <div class="media-body pl-4">
                    <h3 class="heading">Automated, flexible financial processes</h3>
                
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate d-flex">
                <div class="media block-6 services border d-flex p-3 mb-3">
                  <div class="icon icon-2 d-flex align-items-center justify-content-center">
                    <span class="flaticon-accounting"></span>
                  </div>
                  <div class="media-body pl-4">
                    <h3 class="heading">Complete accounting modules</h3>
                 
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate d-flex">
                <div class="media block-6 services border d-flex p-3 mb-3">
                  <div class="icon icon-2 d-flex align-items-center justify-content-center">
                    <span class="flaticon-dashboard"></span>
                  </div>
                  <div class="media-body pl-4">
                    <h3 class="heading">User friendly Reports</h3>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate d-flex">
                <div class="media block-6 services border d-flex p-3 mb-3">
                  <div class="icon icon-2 d-flex align-items-center justify-content-center">
                    <span class="flaticon-process"></span>
                  </div>
                  <div class="media-body pl-4">
                    <h3 class="heading">Cloud Architecture</h3>
        
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate d-flex">
                <div class="media block-6 services border d-flex p-3 mb-3">
                  <div class="icon icon-2 d-flex align-items-center justify-content-center">
                    <span class="flaticon-app"></span>
                  </div>
                  <div class="media-body pl-4">
                    <h3 class="heading">SMS, Mobile & ATM Banking</h3>
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter">
      <div class="container pb-md-5">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">We Always Try To Understand Users Expectation</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="12000">0</strong>
                    <span>Queries</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="10">0</strong>
                    <span>Awards Won</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="100">0</strong>
                    <span>Contributors</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="1000">0</strong>
                    <span>Satisfied Customers</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="intro">
              <div class="row">
                <div class="col-md-8">
                  <h3>Have any question about us?</h3>
                  <p>If you have any question regarding our product and services. Please feel free to contact Us.</p>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                  <a href="#" class="btn btn-tertiary px-4 py-3">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


   

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">What Users Saying</h2>
            <p>Our clients have shared  experiences regarding the use of our system.</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-10">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Recent Blog</h2>
            <p>View our recent blog</p>
          </div>
        </div>
        <div class="row">
                   
        @foreach($abc as $blog)
                <?php $month1= array("NULL","January", "February", "March", "April", "May", "June", "July", "August", "Sept", "Octo", "Novem", "Decem");
                                $m=$blog->created_at;
                                $month = substr($m,5,2); 
                                $day=substr($m,8,2);
                                $ab=intval($month);
                                $bc= $month1[$ab];
                                $year=substr($m,0,4);

                            ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
            <a  href="/blog-details/{{$blog->slug}}" class="block-20" style="background-image: url('{{ asset('storage/blog_images/'.$blog->image)}}');">

              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
               
                  <div><a href="#"><?php echo $bc;?>, &nbsp;<?php echo $day;?> <?php echo $year;?></a></div>
                  <div><a href="#">Admin</a></div>
                  
                  <div><a href="#" class="meta-chat"><i class="fa fa-comments"></i> </a></div>
                </div>
               
                <div class="desc pl-3">
                  <h3 class="heading"><a href="/blog-details/{{$blog->slug}}">{{$blog->title}}</a></h3>
                </div>
              </div>
            </div>
          </div>
     
        @endforeach
        </div>
      </div>
    </section>

	
	
<br><br><br><br>
    @endsection
