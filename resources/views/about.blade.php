
@extends('layouts.app')

@section('headSection')
<style>
p.groove {
    font-family: "Times New Roman", Times, serif;
   
   
    color: black;
  
    font-size: 16px;
    justify-content:center;

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


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('/user/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About Us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <br>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=309352246835670&autoLogAppEvents=1" nonce="uMSJ4c5L"></script>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 col-sm-12 col-lg-3 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="fb-page" data-href="https://www.facebook.com/infowarenepal" data-tabs="timeline" data-width="299px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
					</div>
					<div class="col-lg-9 col-sm-12 col-md-7 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4">Company Profile</h2>
						<p class="groove">Infoware Nepal Private Limited is committed to providing total information technology related services to its clients. This commitment prompts the company to diversify its activities in design, development, implementation and maintenance of Integrated Financial Accounting Software as per the requirements of the user. Infoware Nepal Private Limited is a total Computerised MIS solutions provider offering solution and services in Areas as Application Software, System Integration and other customised software solutions, Data Entry Operations, Computer Trainings etc..
			
                    <br>

                   
The focus area for Infoware Nepal Private Limited has been:
<ul>
<li> Finance- Banking & Insurance Solutions</li>
<li>Donar based Accounting for Non government organisations</li>
<li> Manufacturing and Trading Business Solutions</li>
<li> Customised software solutions</li>
</ul>
The flagship product of INFOWARE NEPAL PRIVATE LIMITED is Financial Accounting Software "FINANCE MANAGER" (FINMAN) which has been used in more than 1000 organisations.
</p>			</div>
			</div>
		</section>
		
        

        @endsection