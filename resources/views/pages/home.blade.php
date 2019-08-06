@extends('layouts.landing')

@section('content')

<!--================Hero Banner Section start =================-->
<section class="hero-banner">
  <div class="hero-wrapper">
    <div class="hero-left">
      <h1 class="hero-title">Robotics <br> with Intelligent System</h1>
      <div class="d-sm-flex flex-wrap">
        <a class="button button-hero button-shadow" href="#">Get Started</a>
        <a class="hero-banner__video" href="https://www.youtube.com/watch?v=kKfPtkb797g">Watch Video</a>          
      </div>
      <ul class="hero-info d-none d-lg-block">
        <li>
          <i class="fa fa-users"></i>
          <h4>16 Members</h4>
        </li>
        <li>
            <i class="fa fa-android"></i>
          <h4>5 Robots</h4>
        </li>
        <li>
          <i class="fa fa-trophy"></i>
          <h4>15 Achievements</h4>
        </li>
      </ul>
    </div>
    <div class="hero-right hero-right-home">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-1.jpg') }}" alt="">
        </div>
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
        </div>
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-3.jpg') }}" alt="">
        </div>
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-4.jpg') }}" alt="">
        </div>
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-5.jpg') }}" alt="">
        </div>
      </div>
    </div>
    <ul class="social-icons d-none d-lg-block">
      <li><a href="#"><i class="ti-facebook"></i></a></li>
      <li><a href="#"><i class="ti-twitter"></i></a></li>
      <li><a href="#"><i class="ti-instagram"></i></a></li>
    </ul>
  </div>
</section>
<!--================Hero Banner Section end =================-->

  <!--================About Section start =================-->
  <section class="about section-margin pb-xl-70">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
          <div class="img-styleBox">
            <div class="styleBox-border">
              <img class="styleBox-img1 img-fluid" src="{{ asset('img/iris/about-1.jpg') }}" alt="">
            </div>
            {{-- <img class="styleBox-img2 img-fluid" src="{{ asset('img/iris/about-2.png') }}" alt=""> --}}
          </div>
        </div>
        <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
          <div class="section-intro mb-lg-4">
            <h4 class="intro-title">About Us</h4>
            <h2>ini diisi apa ya</h2>
          </div>
          <p style="text-align: justify;">IRIS is Institut Teknologi Sepuluh Nopember (ITS) Robotic team focusing on autonomous soccer playing robots. IRIS ITS has competed in the soccer robotic league since 2017. The team consist of students of Institut Teknologi Sepuluh Nopember Surabaya. 
              <br>To build a great team and a robot that is capable of playing football, the team is divided into 4 divisions which are mechanical division, electrical division, programming division, and official division.</p>
          <a class="button button-shadow mt-2 mt-lg-4" href="{{ '/team' }}">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Section End =================-->

  <!--================Featured Section Start =================-->
  <section class="section-margin mb-lg-100">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Gallery</h4>
        <h2>Enjoy every moment with Us!</h2>
      </div>


      <div class="owl-carousel owl-theme featured-carousel">
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/featured1.png') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Mountain Mike Pizza</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$35</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/featured2.png') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Patatas Bravas</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$30</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/featured3.png') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Pulled Sandwich</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$20</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/featured1.png') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Mountain Mike Pizza</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$35</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Featured Section End =================-->

  <!--================Offer Section Start =================-->
  <!-- <section class="bg-lightGray section-padding">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm">
          <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/offer-img.png') }}" alt="">
        </div>
        <div class="col-sm">
          <div class="offer-card offer-card-position">
            <h3>Italian Pizza Offer</h3>
            <h2>50% OFF</h2>
            <a class="button" href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--================Offer Section End =================-->


  <!--================Food menu section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Our Division</h4>
        <h2>Our team consists of 4 divisions</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="{{ asset('sneaky/img/home/food1.png') }}" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Electronic Division</h4>
              </div>
              <p>One of technical division that focus to design electrical system of the robot.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="{{ asset('sneaky/img/home/food1.png') }}" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Mechanics Division</h4>
              </div>
              <p>The division that build body shape and manufacture of robot.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="{{ asset('sneaky/img/home/food1.png') }}" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Programming Division</h4>
              </div>
              <p>The division that giving the complex codes to make a life of robot.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="{{ asset('sneaky/img/home/food1.png') }}" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Official Division</h4>
              </div>
              <p>The division that responsible to do all things about branding, sponsorship, administration and finance.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Food menu section end =================-->  

  <!--================CTA section start =================-->  
  <section class="cta-area text-center">
    <div class="container">
      <p>Some Trendy And Popular Courses Offerd</p>
      <h2>Under replenish give saying thing</h2>
      <a class="button" href="{{ '/contact' }}">Contact Us</a>
    </div>
  </section>
  <!--================CTA section end =================-->  

  <!--================Blog section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Our Blog</h4>
        <h2>Latest food and recipe news</h2>
      </div>

      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('sneaky/img/blog/blog1.png') }}" alt="">
            <div class="blog-body">
              <ul class="blog-info">
                <li><a href="#">Admin post</a></li>
                <li><a href="#">Jan 10, 2019</a></li>
              </ul>
              <a href="#">
                <h3>Huge cavity in antarctic glacie signals rapid</h3>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('sneaky/img/blog/blog2.png') }}" alt="">
            <div class="blog-body">
              <ul class="blog-info">
                <li><a href="#">Admin post</a></li>
                <li><a href="#">Jan 10, 2019</a></li>
              </ul>
              <a href="#">
                <h3>Researcher unearths age
                    in the desert</h3>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('sneaky/img/blog/blog3.png') }}" alt="">
            <div class="blog-body">
              <ul class="blog-info">
                <li><a href="#">Admin post</a></li>
                <li><a href="#">Jan 10, 2019</a></li>
              </ul>
              <a href="#">
                <h3>High-protein rice brings
                    value, nutrition</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog section end =================-->  
@endsection

@section('script')
<script>
  $('.nav-home').addClass("active");
</script>
@endsection