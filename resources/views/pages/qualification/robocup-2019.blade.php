@extends('layouts.landing')

@section('style')
<style>
.mb-3px {
  margin-bottom: 3px !important;
}

.content p, .content ul {
  font-size: 17px;
}

.content a, .content ul li a {
  font-size: 19px;
  color: #1cc3b2;
}
.content a:hover, .content ul li a:hover {
  color: #0e2737;
}

.content ul li {
  text-align: justify;
  margin-bottom: 12px;
}

.embed-responsive-16by9 {
  width: 75%;
}

.shadow {
  -webkit-box-shadow: 10px 10px 47px -5px rgba(0,0,0,0.7);
  -moz-box-shadow: 10px 10px 47px -5px rgba(0,0,0,0.7);
  box-shadow: 10px 10px 47px -5px rgba(0,0,0,0.7);
}

.tengah {
  padding: 0 180px;
}

table {
  font-size: 16px;
}
</style>
@endsection

@section('content')
<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Qualification</h1>
    <p>Here you can find all the qualification materials regarding our<br class="d-none d-xl-block"><strong>Middle Size League</strong> participation in Robocup 2019</p>
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
      <li><a href="mailto:iris.krsbi@gmail.com"><i class="ti-email"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCOmBeTiru1hFtOiGXneI_Gw" target="_blank"><i class="ti-youtube"></i></a></li>
      <li><a href="https://www.instagram.com/iris.itsrobotic" target="_blank"><i class="ti-instagram"></i></a></li>
    </ul>
    
</div>
</section>

<section class="section-margin">
  <div class="container">
    <div class="section-intro mb-3px">
      <h4 class="intro-title">Team Description Paper</h4>
    </div>
    <div class="content mb-75px">
      <p>The team description paper can be downloaded from <a href="{{ asset('document/qualification_2019/Team_Description_Paper_IRIS_2019.pdf') }}">here.</a></p>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Papers in Recent 3 Years</h4>
    </div>
    <div class="content mb-75px">
      <ul>
        <li>Artificial Neural Network untuk Pengukuran Posisi Bola Menggunakan Kamera Omnidireksional Pada Robot Sepak Bola Beroda. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2017, Universitas Pendidikan Indonesia Bandung.
          <br><a href="{{ asset('document/Artificial _Neural_Network_Untuk_Pengukuran _Posisi_Bola_Menggunakan_Kamera _Omnidireksional_Pada_Robot_Sepak_Bola_Beroda.pdf') }}" target="_blank">Download</a></li>
        <li>Penggunaan Kamera Global untuk Menentukan Posisi Robot pada Lapangan. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2018, Universitas Muhammadiyah Yogyakarta.
          <br><a href="{{ asset('document/Penggunaan_Kamera_Global_untuk_Menentukan_Posisi_Robot_pada_Lapangan.pdf') }}" target="_blank">Download</a></li>
        <li>Dikairono, R., Rachman, A. A., Setiawardhana, Sardjono, T. A., & Purwanto, D. (2017). Motion Planning Simulator for Holonomic Robot Soccer Platform. 2017 International Seminar on Intelligent Technology and Its Applications (ISITIA).
          <br><a href="{{ asset('document/Motion_Planning_Simulator_for_Holomic_Robot_Soccer_Platform.pdf') }}" target="_blank">Download</a></li>
        <li>Setiawardhana, Dikariono, R., Sardjono, T. A., & Purwanto, D. (2017). Visual Ball Tracking and Prediction with Unique Segmented Area on Soccer Robot. 2017 International Seminar on Intelligent Technology and Its Applications (ISITIA).
          <br><a href="{{ asset('document/Visual_Ball_Tracking_and_Prediction_with_Unique_Segmented_Area_on_Soccer_Robot.pdf') }}" target="_blank">Download</a></li>
      </ul>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Qualification Video</h4>
    </div>
    <div class="content mb-75px">
      <p>This video shows all the basic abilities of our robots.</p>
      <div class="embed-responsive embed-responsive-16by9 col-sm-8 offset-md-2 shadow">
          <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/kKfPtkb797g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Achievements</h4>
    </div>
    <div class="content mb-75px">
      <p>All achievements can be seen 
        <a href="{{ ('/achievement') }}" target="_blank">here.</a></p>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Mechanical and <br>Electrical Description</h4>
    </div>
    <div class="content mb-75px">
      <p>The mechanical and electrical design and detailed software flowchart of IRIS team can be found on the following links 
        <a href="{{ asset('document/qualification_2019/Mechanical_and_Electrical_Description_with_Software_Flow_Chart.pdf') }}" target="_blank">here.</a></p>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Miscellaneous</h4>
    </div>
    <div class="content mb-75px">
      <ul>
        <li>Declaration of mixed teams : <strong>NO</strong></li>
        <li>Team requires <strong>802.11b</strong> access point : <strong>NO</strong></li>
      </ul>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">List MAC Address</h4>
    </div>
    <div class="content mb-75px">
      <div class="tengah">
        <table class="table table-hover">
          <thead class="thead-dark text-center">
            <tr>
              <th scope="col">PC Robot</th>
              <th scope="col">MAC Address</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Robot 1</td>
              <td>9c:da:3e:cb:87:11</td>
            </tr>
            <tr>
              <td>Robot 2</td>
              <td>ac:ed:5c:f1:65:b2</td>
            </tr>
            <tr>
              <td>Robot 3</td>
              <td>00:c2:c6:f1:8d:3f</td>
            </tr>
            <tr>
              <td>Robot 4</td>
              <td>00:c2:c6:f1:8c:04</td>
            </tr>
            <tr>
              <td>Robot 4</td>
              <td>00:c2:c6:fa:0e:9c</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-hover">
          <thead class="thead-dark text-center">
            <tr>
              <th scope="col">Development Computers</th>
              <th scope="col">MAC Address</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Basestation (LAN)</td>
              <td>60:45:cb:c3:0f:27</td>
            </tr>
            <tr>
              <td>Basestation (WiFi)</td>
              <td>f4:8c:50:6f:b9:68</td>
            </tr>
            <tr>
              <td>Revo</td>
              <td>f0:03:8c:09:2c:ff</td>
            </tr>
            <tr>
              <td>Dhiaul</td>
              <td>5c:93:a2:a6:b9:91</td>
            </tr>
            <tr>
              <td>Pandu</td>
              <td>ac:b5:7d:31:7a:6a</td>
            </tr>
            <tr>
              <td>Azhar</td>
              <td>28:c2:dd:c8:6b:45</td>
            </tr>
            <tr>
              <td>Dwiki</td>
              <td>74:c6:3b:c9:bd:05</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--================Hero Banner Section end =================-->
@endsection

@section('script')
<script>
  $('.nav-qualification').addClass("active");
</script>
@endsection