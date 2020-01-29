@extends('layouts.landing')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
@endsection

@section('content')
<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Gallery Team</h1>
    <p>We share our moments to show every event <br class="d-none d-xl-block"> and take it as an opportunity to learn</p>
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
          <img class="img-fluid" src="{{ asset('img/iris/banner-5.jpg') }}" alt="">
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
      <h4 class="intro-title">Our Gallery</h4>
      <h2>Enjoy every moment with Us!</h2>
    </div>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left justify-content-md-center justify-content-center">
      @foreach($galleries as $gallery)
      <div class="col-lg-4 col-md-6 col-12">
        <a href="{{ asset('storage/gallery/'.$gallery->image) }}" class="d-block mb-4 h-100" data-toggle="lightbox" data-gallery="example-gallery" data-title="{{ $gallery->title }}" data-footer="{{ $gallery->description }}">
          <img class="img-fluid img-thumbnail" src="{{ asset('storage/gallery/'.$gallery->image) }}" alt="">
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
  $('.nav-gallery').addClass("active");

  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
</script>
@endsection