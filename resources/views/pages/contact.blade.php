@extends('layouts.landing')

@section('style')
@endsection

@section('content')
@if (\Session::has('success'))
  <div class="alert alert-success text-center" role="alert">
    Thank you for your message! Please wait our reply to your email.
  </div>
@elseif (\Session::has('error'))
  <div class="alert alert-danger text-center" role="alert">
    Error! Please fulfill your data/message.
  </div>
@endif
<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Contact</h1>
    <p>For further information, you can contact us</p>
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
          <img class="img-fluid" src="{{ asset('img/iris/banner-2.jpg') }}" alt="">
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

  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -7.277379, lng: 112.798304};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: uluru,
            });
            var contentString = '<div>'+
                '<div>'+
                '</div>'+
                '<h5>Sekretariat Robotika ITS</h5>'+
                '<div style="font-size:16px">'+
                '<p>Jl. Teknik Kimia, Kampus ITS<br>' +
                'Sukolilo, Surabaya</p>' +
                '</div>'+
                '</div>';

            var infowindow = new google.maps.InfoWindow({
              content: contentString,
            });

            var marker = new google.maps.Marker({
              position: uluru,
              map: map,
              title: 'Robotika ITS'
            });
            infowindow.open(map, marker);
            marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
          }   
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc6pcTINhSJDXqrJ_09vrYkTZTKX0_y5c&callback=initMap"></script>
        
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" id="sendMessage" action="{{ route('message.store') }}" method="POST" id="contactForm">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message" required></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="button" class="button button-contactForm confirm">Send Message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Address</h3>
              <p>Laboratorium Workshop Lantai II<br>Sekretariat Robotika ITS</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a>Phone number</a></h3>
              <p>+62 822-3010-4565 </p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a>Email</a></h3>
              <p>iris.krsbi@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

@endsection

@section('script')
<script src="{{ asset('js/bootbox.all.min.js') }}"></script>

<script>
  $('.nav-contact').addClass("active");

  $(document).on('click', '.confirm', function() {
    if( ($('#name').val() == '') || ($('#email').val() == '') ||
        ($('#subject').val() == '') || ($('#message').val() == '') ) {
      bootbox.alert({
        message: "Please fulfill your data/message!",
        centerVertical: 'True',
        size: 'small'
      });
    }
    else {
      bootbox.confirm({
        message: "Are you sure?",
        centerVertical: 'True',
        size: 'small',
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if(result == true)
              $('#sendMessage').submit();
            console.log('This was logged in the callback: ' + result);
        }
      });
    }
  });
</script>
@endsection