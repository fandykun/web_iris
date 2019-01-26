@extends('layouts.app2')

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="contact" class="section-bg">
    <div class="container">
        <header class="section-header">
            <h3>CONTACT US</h3>

        </header>
        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Laboratorium Workshop, Lantai II, Pusat Robotika ITS<br>
                Jl. Teknik Kimia, Kampus ITS Sukolilo, Surabaya, 60111
              </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+6285746658456">+62 857-4665-8456</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:iris.krsbi@gmail.com">iris.krsbi@gmail.com</a></p>
            </div>
          </div>

        </div>
    </div>
</section>
@endsection
