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
    <p>Here you can find all the qualification materials regarding our<br class="d-none d-xl-block"><strong>Middle Size League</strong> participation in Robocup 2020</p>
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

<section class="section-margin">
  <div class="container">
    <div class="section-intro mb-3px">
      <h4 class="intro-title">Team Description Paper</h4>
    </div>
    <div class="content mb-75px">
      <p>The team description paper can be downloaded from <a href="{{ asset('document/qualification_2020/Team_Description_Paper_IRIS_2020.pdf') }}">here.</a></p>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Papers in Recent 4 Years</h4>
    </div>
    <div class="content mb-75px">
      <ul>
        <li>Artificial Neural Network untuk Pengukuran Posisi Bola Menggunakan Kamera Omnidireksional Pada Robot Sepak Bola Beroda. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2017, Universitas Pendidikan Indonesia Bandung.
          <br><a href="{{ asset('document/Artificial _Neural_Network_Untuk_Pengukuran _Posisi_Bola_Menggunakan_Kamera _Omnidireksional_Pada_Robot_Sepak_Bola_Beroda.pdf') }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-download"></i> Download</a></li>
        <li>Penggunaan Kamera Global untuk Menentukan Posisi Robot pada Lapangan. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2018, Universitas Muhammadiyah Yogyakarta.
          <br><a href="{{ asset('document/Penggunaan_Kamera_Global_untuk_Menentukan_Posisi_Robot_pada_Lapangan.pdf') }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-download"></i> Download</a></li>
        <li>Sistem Pengenalan Suara untuk Perintah pada Robot Sepak Bola Beroda. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2019, Universitas Dian Nuswantoro Semarang.
          <br><a href="{{ asset('document/Sistem_Pengenalan_Suara_untuk_Perintah_pada_Robot_Sepak_Bola_Beroda.pdf') }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-download"></i> Download</a></li>
        <li>Dikairono, R., Rachman, A. A., Setiawardhana, Sardjono, T. A., & Purwanto, D. (2017). Motion Planning Simulator for Holonomic Robot Soccer Platform. 2017 International Seminar on Intelligent Technology and Its Applications (ISITIA).
          <br><a href="{{ asset('document/Motion_Planning_Simulator_for_Holomic_Robot_Soccer_Platform.pdf') }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-download"></i> Download</a></li>
        <li>Setiawardhana, Dikariono, R., Sardjono, T. A., & Purwanto, D. (2017). Visual Ball Tracking and Prediction with Unique Segmented Area on Soccer Robot. 2017 International Seminar on Intelligent Technology and Its Applications (ISITIA).
          <br><a href="{{ asset('document/Visual_Ball_Tracking_and_Prediction_with_Unique_Segmented_Area_on_Soccer_Robot.pdf') }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-download"></i> Download</a></li>
      </ul>
    </div>

    <div class="section-intro mb-3px">
      <h4 class="intro-title">Qualification Video</h4>
    </div>
    <div class="content mb-75px">
      <!-- <p>This video shows all the basic abilities of our robots.</p> -->
      <div class="embed-responsive embed-responsive-16by9 col-sm-8 offset-md-2 shadow">
          <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/eVzmdgtdG2c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        <a href="{{ asset('document/qualification_2020/Mechanical_and_Electrical_Description_with_Software_Flow_Chart_2020.pdf') }}" target="_blank">here.</a></p>
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
        <table class="table table-hover text-center">
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
              <td>Robot 5</td>
              <td>00:c2:c6:fa:0e:9c</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-hover">
          <thead class="thead-dark">
          <tr>
              <th class="text-center"scope="col">Development Computers</th>
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
              <td>Fandy</td>
              <td>48:89:E7:C3:1C:BB</td>
            </tr>
            <tr>
              <td>Ayik</td>
              <td>64:5D:86:E8:DF:41</td>
            </tr>
            <tr>
              <td>Habib</td>
              <td>24:FD:52:46:1D:6A</td>
            </tr>
            <tr>
              <td colspan="2" class="text-center font-weight-bold">Will be updated soon.</td>
              <!-- <td></td> -->
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