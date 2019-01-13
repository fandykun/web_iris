
@extends('layouts.app')

@section('title')
    <title>{{ config('app.name') }}</title>
@endsection
@section('content')
<section id="intro">
    <div class="intro-container">
        {{-- <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel"> --}}
        {{-- <div class="carousel-inner" role="listbox"> --}}
            <div class="carousel-item active">
                <div class="carousel-background"><img src="img/background3.jpg" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2><img src="img/logo-tim.png" style="width:25%;"/></h2>
                        <div style="color: white;">IRIS is one of the Sepuluh Nopember Institute of Technology Robotic Team build in 2016.<br>
                        We work on Intelligent Wheeled Robot Development Research, which has ability to play football automatically.<br><br></div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</section>

<!--==========================
    About Us Section
============================-->
<section id="about">
    <div class="container">

    <header class="section-header">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </header>

    <div class="row about-cols">

        <div class="col-md-4 wow fadeInUp">
        <div class="about-col">
            <div class="img">
            <img src="img/about-mission.jpg" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Mission</a></h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="about-col">
            <div class="img">
            <img src="img/about-plan.jpg" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Plan</a></h2>
            <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
        </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-col">
            <div class="img">
            <img src="img/about-vision.jpg" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p>
            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
            </p>
        </div>
        </div>

    </div>

    </div>
</section><!-- #about -->
    
@endsection