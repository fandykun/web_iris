@extends('layouts.landing')

@section('style')
@endsection

@section('content')

<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Our Team</h1>
    {{-- <p>From  set together our divided own saw divided the form god <br class="d-none d-xl-block"> seas moveth you will fifth under replenish end</p> --}}
    <p></p>
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
    <div class="hero-right">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
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


    <!--================Chef section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Our Members</h4>
        <h2>Talent & experience member</h2>
      </div>

      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="chef-card">
            <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/chef-1.png') }}" alt="">
            <div class="chef-footer">
              <h4>Daniesl Laran</h4>
              <p>Executive Chef</p>
            </div>

            <div class="chef-overlay">
              <ul class="social-icons">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="chef-card">
            <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/chef-2.png') }}" alt="">
            <div class="chef-footer">
              <h4>Daniesl Laran</h4>
              <p>Executive Chef</p>
            </div>

            <div class="chef-overlay">
              <ul class="social-icons">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="chef-card">
            <img class="card-img rounded-0" src="{{ asset('sneaky/img/home/chef-3.png') }}" alt="">
            <div class="chef-footer">
              <h4>Daniesl Laran</h4>
              <p>Executive Chef</p>
            </div>

            <div class="chef-overlay">
              <ul class="social-icons">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Chef section end =================-->  

  <!--================CTA section start =================-->  
  <section class="cta-area text-center">
    <div class="container">
      <p>Some Trendy And Popular Courses Offerd</p>
      <h2>Under replenish give saying thing</h2>
      <a class="button" href="#">Reservation</a>
    </div>
  </section>
  <!--================CTA section end =================-->  
@endsection

@section('script')
<script>
  $('.nav-team').addClass("active");
</script>
@endsection