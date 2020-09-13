
@extends('layouts.app')
@section('main-content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=289377179019430&autoLogAppEvents=1" nonce="AE0jRJLs"></script>




        <!--? Hero Start -->
        
        <div class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('user/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread">Blog</h1>
            </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-4 text-center heading-section ftco-animate"></div>
          <div class="col-md-4 text-center heading-section ftco-animate">
            <h2>Recent Blog</h2>  </div><div class="col-md-4">  
         
              <form action="/blogsearch"  id="myform" class="search-form" method="POST" >
              {{ csrf_field() }}
                <div class="form-group">
                <a href="javascript:;" onclick="document.getElementById('myform').submit()"> <span class="fa fa-search"></span></a>
                  <input type="text" class="form-control" name="q" placeholder="Search blog">
                </div>
              </form>
              </div>
        
        </div>@if(isset($abc))
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
          <div class="col-md-6  col-lg-4 ftco-animate">
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
</div><br>
{!! $abc->render() !!}
@else

  <br>
  <a href="/blog1"  ><i class="ion-ios-arrow-back"></i>- Back</a>
  <div class="alert alert-success">{{ $message}}</div>
  <br>

@endif
      </div>
    </section>

    @endsection
  