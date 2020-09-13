
@extends('layouts.app')
@section('headSection')
<style>
p.groove {
    font-family: "Times New Roman", Times, serif;
   
   
    color: black;
  
    font-size: 16px;
    text-justify: inter-word;

}

a.hello:link, a.hello:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-weight: bold;
}

a.hello:hover, a.hello:active {
  background-color: black;
  display: inline-block;
}

</style>

@endsection

@section('main-content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('user/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services</span></p>
            <h1 class="mb-3 bread">Services</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
	    				<div class="img img-faqs mb-4 mb-sm-0" style="background-image: url('{{asset('user/images/finman.jpg')}}');">
	    				</div>
    			</div>
    			<div class="col-lg-6 pl-lg-5">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
	            <h2 class="mb-3">Our Services</h2>
	          <p>Infoware Nepal Private Limited is committed to providing total information technology related services to its clients. This commitment prompts the company to diversify its activities in design, development, implementation and maintenance of Integrated Financial Accounting Software as per the requirements of the user. Infoware Nepal Private Limited is a total Computerised MIS solutions provider offering solution and services in Areas as Application Software, System Integration and other customised software solutions, Data Entry Operations, Computer Trainings etc..
 
The flagship product of INFOWARE NEPAL PRIVATE LIMITED is Financial Accounting Software "FINANCE MANAGER" (FINMAN) which has been used in more than 1000 organisations.
<br>
<h3> Satisfied Clients</h3>

Some of the organisations where FINMAN computer software have been used
<ul>
<li>Finance Companies</li>
 <li>Development Banks</li>
 <li>Micro Finance Institutions</li>
 <li>Cooperatives</li>
 <li>Hotels</li>
 <li>Restaurants</li>
 <li>Trading Companies</li>
 
  <li>Department Stores</li>
 <li>Schools Colleges</li>
 <li>NGO, INGO and Project</li>
</ul>
            </p>
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




    
    @endsection