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
            <h4>16 Active Members</h4>
        </li>
        <li>
            <i class="fa fa-android"></i>
            <h4>5 Robots</h4>
        </li>
        <li>
            <i class="fa fa-trophy"></i>
            <h4>17 Achievements</h4>
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
      <li><a href="mailto:iris@its.ac.id"><i class="ti-email"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCOmBeTiru1hFtOiGXneI_Gw" target="_blank"><i class="ti-youtube"></i></a></li>
      <li><a href="https://www.instagram.com/iris.itsrobotic" target="_blank"><i class="ti-instagram"></i></a></li>
    </ul>
</div>
</section>
<!--================Hero Banner Section end =================-->

<section class="section-margin">
  <div class="container">
    <div class="section-intro mb-75px">
      <h4 class="intro-title">Achievements</h4>
      <h2>Our achievements from 2017 - now</h2>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-md-offset-2 col-md-8 col-sm-12">
        <div class="main-timeline">
          <div class="timeline">
            <div class="timeline-content">
              <div class="timeline-icon">
                <i class="fa fa-trophy"></i>
              </div>
              <div class="inner-content">
                <h3 class="title">Kontes Robot Indonesia 2017</h3>
                <p class="description">
                    <strong>Third Place</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                    <strong>Best Design</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                    <strong>Best Design</strong> Kontes Robot Indonesia (KRI) Nasional<br>
                    <strong>Best Innovation</strong> Kontes Robot Indonesia (KRI) Nasional
                </p>
              </div>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-content">
              <div class="timeline-icon">
                <i class="fa fa-ravelry"></i>
              </div>
              <div class="inner-content">
                <h3 class="title">Kontes Robot Indonesia 2018</h3>
                <p class="description">
                  <strong>First Place</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                  <strong>Best Strategy</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                  <strong>Second Place</strong> Kontes Robot Indonesia (KRI) Nasional
                </p>
              </div>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-content">
              <div class="timeline-icon">
                <i class="fa fa-rocket"></i>
              </div>
              <div class="inner-content">
                <h3 class="title">FIRA RoboWorld Cup 2018</h3>
                <p class="description">
                    <strong>First Place</strong> Passing Challenge<br>
                    <strong>Third Place</strong> Obstacle Avoidance Challenge<br>
                    <strong>Third Place</strong> Localization Challenge<br>
                </p>
              </div>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-content">
              <div class="timeline-icon">
                <i class="fa fa-line-chart"></i>
              </div>
              <div class="inner-content">
                <h3 class="title">Kontes Robot Indonesia 2019</h3>
                <p class="description">
                    <strong>First Place</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                    <strong>Best Design</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                    <strong>First Place</strong> Kontes Robot Indonesia (KRI) Nasional<br>
                    <strong>Best Design</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                    <strong>Best Strategy</strong> Kontes Robot Indonesia (KRI) Regional IV<br>
                </p>
              </div>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-content">
              <div class="timeline-icon">
                <i class="fa fa-globe"></i>
              </div>
              <div class="inner-content">
                <h3 class="title">FIRA RoboWorld Cup 2019</h3>
                <p class="description">
                    <strong>Second Place</strong> Passing Challenge<br>
                    <strong>Second Place</strong> Localization Challenge<br>
                </p>
              </div>
            </div>
          </div>

          <div class="timeline">
            <div class="timeline-content">
              <div class="timeline-icon">
                <i class="fa fa-plane"></i>
              </div>
              <div class="inner-content">
                <h3 class="title">RoboCup Middle-Size League 2019</h3>
                <p class="description">
                    <strong>Fifth Place</strong> Middle-Size League<br>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

@endsection

@section('script')
<script>
  $('.nav-achievement').addClass("active");
</script>
@endsection