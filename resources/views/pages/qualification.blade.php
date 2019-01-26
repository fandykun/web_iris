@extends('layouts.app2')

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="qualification">
    <div class="container">
        <header class="section-header wow fadeInDown">
            <h3>QUALIFICATION</h3>
            <p class="garis">Here you can find all the qualification materials regarding our <strong>Middle Size League</strong> participation in Robocup 2019</p>
            
        </header>
        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Team Description Paper</h3>
            <p>The team description paper can be downloaded from <a href="">here.</a></p>
        </div>

        <div class="description wow bounceInUp">
            <h3 class="title">Papers in Recent 5 Years</h3>
            <ul>
                <li>Artificial Neural Network untuk Pengukuran Posisi Bola Menggunakan Kamera Omnidireksional Pada Robot Sepak Bola Beroda. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2017, Universitas Pendidikan Indonesia Bandung.</li>
                <li>Penggunaan Kamera Global untuk Menentukan Posisi Robot pada Lapangan. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2018, Universitas Muhammadiyah Yogyakarta.</li>
                
            </ul>
        </div>

        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Qualification Video</h3>
            <p>This video shows all the basic abilities of our robots.</p>
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/kKfPtkb797g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
        </div>

        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Achievements</h3>
            <strong>2017</strong>
            <ul>
                <li>Third Place Kontes Robot Indonesia (KRI) Regional IV</li>
                <li>Best Design Kontes Robot Indonesia (KRI) Regional IV</li>
                <li>Best Design Kontes Robot Indonesia (KRI) Nasional</li>
                <li>Best Innovation Kontes Robot Indonesia (KRI) Nasional</li>
            </ul>
            <strong>2018</strong>
            <ul>
                <li>First Place Kontes Robot Indonesia (KRI) Regional IV</li>
                <li>Best Strategy Kontes Robot Indonesia (KRI) Regional IV Kontes Robot Indonesia (KRI) Nasional</li>
            </ul>
            <strong>FIRA RoboWorld Cup 2018</strong>
            <ul>
                <li>First Place Passing Challenge</li>
                <li>Third Place Obstacle Avoidance Challenge</li>
                <li>Third Place Localization Challenge</li>
            </ul>
        </div>

        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Mechanical and Electrical Description </h3>
            <p>The mechanical and electrical design of IRIS team can be found on the following links.<br>
            <a href="">Mechanical and Electrical Design</a></p>
        </div>
        
        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Software Flow Charts</h3>
            <p>A detailed software and vision of IRIS team can be found on the following links.<br>
            <a href="">Software Flow Charts</a> | <a href="">Vision</a></p>
    </div>
</section>
@endsection
