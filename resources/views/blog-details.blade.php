
@extends('layouts.app')


@section('headSection')

<style>





</style>

@endsection


@section('main-content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=289377179019430&autoLogAppEvents=1" nonce="Td6Ij62p"></script>

<div class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('user/images/bg_1.jpg')}}');"  data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Details</span></p>
            <h1 class="mb-3 bread">Blog Single</h1>
          </div>
        </div>
      </div>
    </div>

		<br>
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
             
            <h2 class="mb-3">{{$slug->title}}</h2>
            <span class="icon-calendar"></span> {{$slug->created_at}}
   <div class="fb-like" data-href="{{Request::url()}}" data-width="200" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
   <hr>
            <p>  <i>'{{$slug->subtitle}}'</i></p>
            <p>
              <img src="{{ asset('storage/blog_images/'.$slug->image) }}" alt="" class="img-fluid">
            </p>
           <p> {!! htmlspecialchars_decode($slug->body) !!}</p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
            @foreach ($slug->categories as $category)
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link"> {{$category->name}}</a>
            
              </div>
              @endforeach
            </div>
            <div class="pt-5">
              <h3 class="mb-5 h4 font-weight-bold">Facebook Comments</h3>
      
              <ul class="comment-list">
                

              <div class="fb-comments" data-href="{{Request::url()}}"  data-colorscheme="dark" data-numposts="6"  data-width=""></div>

                
              <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">

                           </div>
                        </div>
                     </div>
              </ul>
            
              <!-- END comment-list -->
         
              
     
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
         
            <div class="sidebar-box ftco-animate">
           <h3>Category</h3>
              @foreach ($slug->categories as $category)
              <ul class="tagcloud m-0 p-0">
                <a href="#" class="tag-cloud-link"> {{$category->name}}</a>
             
              </ul>
              @endforeach
            </div>
            <div class="sidebar-box ftco-animate">                     
         
              <div class="categories">
                <h3>SiteMap</h3>
                <li><a href="#">Home Page <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">About Us <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Our Team <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Blog <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Contact <span class="fa fa-chevron-right"></span></a></li>
               
              </div>
            </div>                      
    

            <div class="sidebar-box ftco-animate">
     
              <h3>Latest Articles</h3>
              @foreach($abc as $blog)
              <?php $month1= array("NULL","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                $m=$blog->created_at;
                                $month = substr($m,5,2); 
                                $day=substr($m,8,2);
                                $ab=intval($month);
                                $bc= $month1[$ab];
                                $year=substr($m,0,4);

                            ?>
              <div class="block-21 mb-4 d-flex">
                <a href="/blog-details/{{$blog->slug}}" class="blog-img mr-4" style="background-image: url('{{ asset('storage/blog_images/'.$blog->image)}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="/blog-details/{{$blog->slug}}">{{$blog->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>
                                  <?php echo $bc." ".$day.", ".$year;?>     </a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              
                  </div>
                </div>
              </div>
           
             @endforeach
            </div>

       

        


           
          </div><!-- END COL -->
        </div>
			</div>
		</section>
@endsection