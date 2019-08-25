@extends('layouts.landing')

@section('style')
<style>
#teamContainer {
  position: relative; 
}

.customButton {
    display: inline-block;
    background-color: #1cc3b2;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    text-transform: capitalize;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
}

.selected {
  background-color: #2a303b;
  color: #fff;
}

@media (min-width: 600px) {
    .customButton {
        padding: 12px 45px;
    }
}

.customButton:hover {
    background-color: #2a303b;
    color: #fff;
}
</style>
@endsection

@section('content')

<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Meet the Team</h1>
    <p>IRIS’s team consist of undergraduate students <br class="d-none d-xl-block"> from various departement </p>
    <p></p>
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
      <h2>Active members</h2>
    </div>

    <div class="mb-75px text-center">
      <ul class="teamFilter d-inline-flex">
          <li><a href="javascript:void(0)" data-filter="" class="selected customButton">All members</a></li>
          <li><a href="javascript:void(0)" data-filter=".Lead" class="customButton">Team Leader</a></li>
          <li><a href="javascript:void(0)" data-filter=".Ofc" class="customButton">Official</a></li>
          <li><a href="javascript:void(0)" data-filter=".Prog" class="customButton">Programmer</a></li>
          <li><a href="javascript:void(0)" data-filter=".Mech" class="customButton">Mechanic</a></li>
          <li><a href="javascript:void(0)" data-filter=".Elec" class="customButton">Electronic</a></li>
      </ul>
    </div>

    <div class="row justify-content-md-center" id="teamContainer">
      @foreach($members as $member)
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 element-item {{ $member->division }}">
        <div class="chef-card">
          <img class="card-img rounded-0" src="{{ asset('iris/member/'.$member->name.'.jpg') }}" alt="">
          <div class="chef-footer">
            <h4>{{ $member->name }}</h4>
            <p><i>{{ $member->description }}</i></p>
          </div>

          <div class="chef-overlay">
            <ul class="social-icons">
              @if(!empty($member->facebook))
                <li><a href="{{ ('https://www.facebook.com/'.$member->facebook) }}" target="_blank">
                  <i class="ti-facebook"></i></a></li>
              @endif
              @if(!empty($member->twitter))
                <li><a href="{{ ('https://www.twitter.com/'.$member->twitter) }}" target="_blank">
                  <i class="ti-twitter-alt"></i></a></li>
              @endif
              @if(!empty($member->linkedin))
                <li><a href="{{ ('https://www.linkedin.com/in/'.$member->linkedin) }}" target="_blank">
                  <i class="ti-linkedin"></i></a></li>
              @endif
              @if(!empty($member->instagram))
                <li><a href="{{ ('https://www.instagram.com/'.$member->instagram) }}" target="_blank">
                  <i class="ti-instagram"></i></a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      @endforeach  
    </div>
  </div>
</section>
<!--================Chef section end =================-->  

@endsection

@section('script')
<script src="https://npmcdn.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script>
  $('.nav-team').addClass("active");

  $(window).on('load', function(){
    var $container = $('#teamContainer');

    // $container.isotope({
    //   itemSelector: '.element-item',
    //   masonry: {
    //     columnWidth: 40,
    //     isFitWidth: true
    //   }
    // });

    $('.teamFilter a').click(function() {
        $('.teamFilter .selected').removeClass('selected');
        $(this).addClass('selected');
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
    });

  });
</script>
@endsection