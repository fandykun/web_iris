@extends('layouts.app2')

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="qualification" class="preloader">
    <div class="container">
        <header class="section-header wow fadeInDown">
            <h3>QUALIFICATION</h3>
            <p class="garis">Here you can find all the qualification materials regarding our <strong>Middle Size League</strong> participation in Robocup 2019</p>
            
        </header>
        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Team Description Paper</h3>
            <p>The team description paper can be downloaded from <a href="{{asset('/storage/Team_Description_Paper_IRIS_2019.pdf')}}">here.</a></p>
        </div>

        <div class="description wow bounceInUp">
            <h3 class="title">Papers in Recent 3 Years</h3>
            <ul style="list-style: none;">
                <li>Artificial Neural Network untuk Pengukuran Posisi Bola Menggunakan Kamera Omnidireksional Pada Robot Sepak Bola Beroda. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2017, Universitas Pendidikan Indonesia Bandung.</li>
                    <a href="{{asset('/storage/Artificial _Neural_Network_Untuk_Pengukuran _Posisi_Bola_Menggunakan_Kamera _Omnidireksional_Pada_Robot_Sepak_Bola_Beroda.pdf')}}">Download</a>
                <li>Penggunaan Kamera Global untuk Menentukan Posisi Robot pada Lapangan. Published in Indonesian Symposium on Robotic Systems and Control - ISRSC 2018, Universitas Muhammadiyah Yogyakarta.</li>
                    <a href="{{asset('/storage/Penggunaan_Kamera_Global_untuk_Menentukan_Posisi_Robot_pada_Lapangan.pdf')}}">Download</a>
                <li>Dikairono, R., Rachman, A. A., Setiawardhana, Sardjono, T. A., & Purwanto, D. (2017). Motion Planning Simulator for Holonomic Robot Soccer Platform. 2017 International Seminar on Intelligent Technology and Its Applications (ISITIA).</li>
                    <a href="{{asset('/storage/Motion_Planning_Simulator_for_Holomic_Robot_Soccer_Platform.pdf')}}">Download</a>
                <li>Setiawardhana, Dikariono, R., Sardjono, T. A., & Purwanto, D. (2017). Visual Ball Tracking and Prediction with Unique Segmented Area on Soccer Robot. 2017 International Seminar on Intelligent Technology and Its Applications (ISITIA).</li>
                    <a href="{{asset('/storage/Visual_Ball_Tracking_and_Prediction_with_Unique_Segmented_Area_on_Soccer_Robot.pdf')}}">Download</a>
                                
            </ul>
        </div>

        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Qualification Video</h3>
            <p>This video shows all the basic abilities of our robots.</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/kKfPtkb797g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Achievements</h3>
            <strong>KRI 2017</strong>
            <ul style="list-style: none;">
                <li>Third Place Kontes Robot Indonesia (KRI) Regional IV</li>
                <li>Best Design Kontes Robot Indonesia (KRI) Regional IV</li>
                <li>Best Design Kontes Robot Indonesia (KRI) Nasional</li>
                <li>Best Innovation Kontes Robot Indonesia (KRI) Nasional</li>
            </ul>
            <strong>KRI 2018</strong>
            <ul style="list-style: none;">
                <li>First Place Kontes Robot Indonesia (KRI) Regional IV</li>
                <li>Best Strategy Kontes Robot Indonesia (KRI) Regional IV</li>
            </ul>
            <strong>FIRA RoboWorld Cup 2018</strong>
            <ul style="list-style: none;">
                <li>First Place Passing Challenge</li>
                <li>Third Place Obstacle Avoidance Challenge</li>
                <li>Third Place Localization Challenge</li>
            </ul>
        </div>

        <div class="description wow bounceInUp" data-wow-duration="1.0s">
            <h3 class="title">Mechanical and Electrical Description with Software Flowchart </h3>
            <p>The mechanical and electrical design and detailed software flowchart of IRIS team can be found on the following links.<br>
            <a href="{{asset('/storage/Mechanical_and_Electrical_Description_with_Software_Flow_Chart.pdf')}}">Mechanical and Electrical Design with Software Flowchart</a></p>
        </div>

        <div class="description wow bounceInUp">
            <h3 class="title">Misscellanous</h3>
            <p>Declaration of mixed teams : <strong>NO</strong> <br>
                Team requires 802.11b access point: <strong>NO</strong>
            </p>
        </div>

        <div class="description wow bounceInUp">
            <h3 class="title">List MAC Address</h3>
            <table class="table table-responsive-md table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th><strong>PC Robot</strong></th>
                        <th><strong>Username</strong></th>
                        <th><strong>MAC Address</strong></th>
                    </tr>
                </thead>
                <tr>
                    <td>Robot 1</td>
                    <td>iris</td>
                    <td>9c:da:3e:cb:87:11</td>
                </tr>
                <tr>
                    <td>Robot 2</td>
                    <td>iris</td>
                    <td>00:c2:c6:f1:8d:3f</td>
                </tr>
                <tr>
                    <td>Robot 3</td>
                    <td>iris</td>
                    <td>00:c2:c6:f1:8c:04</td>
                </tr>
                <tr>
                    <td>Robot 4</td>
                    <td>iris</td>
                    <td>00:c2:c6:fa:0e:9c</td>
                </tr>
                <tr class="table-danger">
                    <td>Robot 5</td>
                    <td>-</td>
                    <td>Update soon</td>
                </tr>
            </table>

        </div>

    </div>
</section>
@endsection
