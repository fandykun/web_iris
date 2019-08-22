@extends('layouts.landing')

@section('style')
@endsection

@section('content')
<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Achievements</h1>
    <p>IRIS have so many achievement from national <br class="d-none d-xl-block"> and international competition since 2017</p>
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
          <img class="img-fluid" src="{{ asset('img/iris/banner-1.jpg') }}" alt="">
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
@endsection

@section('script')
<script>
  $('.nav-achievement').addClass("active");
</script>
@endsection