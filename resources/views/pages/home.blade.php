@extends('layouts.app')

@section('title')
    <title>{{ config('app.name') }}</title>
@endsection
@section('content')
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade">
            <div class="carousel-item active">
                <div class="carousel-background"><img src="img/background3.jpg" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2><img src="img/logo-tim.png" style="width:50%;"/></h2>
                        <h3 style="color: white;">Robotics With Intelligent System</h3>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================
    About Us Section
============================-->
<section id="about">
    <div class="container">
        <header class="section-header">
            <h3>About Us</h3>
            <p>IRIS is Institut Teknologi Sepuluh Nopember (ITS) Robotic team focusing on autonomous soccer playing robots. IRIS ITS has competed in the soccer robotic league since 2017. The team consist of students of Institut Teknologi Sepuluh Nopember Surabaya. 
                <br>To build a great team and a robot that is capable of playing football, the team is divided into 4 divisions which are mechanical division, electrical division, programming division, and official division. </p>
        </header>

        <div class="row">

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.2s">
              <div class="icon"><i class="ion-ios-person"></i></div>
              <h4 class="title"><a>Coach</a></h4>
              <p class="description">The IRIS-ITS Coach himself would be in charge of leading the assembly process of the robot that will participate in competition.</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.2s">
              <div class="icon"><i class="ion-code"></i></div>
              <h4 class="title"><a>Programming Division</a></h4>
              <p class="description">The division that giving the complex codes to make a life of robot.</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.2s">
              <div class="icon"><i class="ion-ios-bolt"></i></div>
              <h4 class="title"><a>Electronic Division</a></h4>
              <p class="description">One of technical division that focus to design electrical system of the robot.</p>
            </div>
            <br><br>
            <div class="col-lg-2 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.2s">
              <div class="icon"><i class="ion-settings"></i></div>
              <h4 class="title"><a>Mechanics Division</a></h4>
              <p class="description">The division that build body shape and manufacture of robot.</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.2s">
              <div class="icon"><i class="ion-clipboard"></i></div>
              <h4 class="title"><a>Official Division</a></h4>
              <p class="description">Non technical division responsible to do all things about branding, sponsorship, administration and finance.</p>
            </div>
          </div>
    </div>
</section>

@endsection