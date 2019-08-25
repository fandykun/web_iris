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
          <h4>16 Active Members</h4>
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
      <li><a href="mailto:iris.krsbi@gmail.com"><i class="ti-email"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCOmBeTiru1hFtOiGXneI_Gw" target="_blank"><i class="ti-youtube"></i></a></li>
      <li><a href="https://www.instagram.com/iris.itsrobotic" target="_blank"><i class="ti-instagram"></i></a></li>
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
            <h2>IRIS ITS Robotics Team</h2>
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
          <img class="card-img rounded-0" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Kontes Robot Indonesia 2019</h3>
            </a>
            <p>Got 1st Place on KRI Regional IV 2019</p>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Kontes Robot Indonesia 2019</h3>
            </a>
            <p>Got 1st Place on KRI Regional IV 2019</p>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Kontes Robot Indonesia 2019</h3>
            </a>
            <p>Got 1st Place on KRI Regional IV 2019</p>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Kontes Robot Indonesia 2019</h3>
            </a>
            <p>Got 1st Place on KRI Regional IV 2019</p>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Kontes Robot Indonesia 2019</h3>
            </a>
            <p>Got 1st Place on KRI Regional IV 2019</p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a class="button button-shadow mt-2 mt-lg-4" href="{{ '/gallery' }}">More Gallery</a>
      </div>
    </div>
  </section>
  <!--================Featured Section End =================-->

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

  @include('partials.contact')

  <!--================Blog section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Our Sponsorship</h4>
        <h2>Thank you for support our team</h2>
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