@extends('layouts.app2')

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="achievement">
        <div class="container">
            <header class="section-header">
                <h3>ACHIEVEMENT</h3>
            </header>
            <div class="description wow bounceInUp" data-wow-duration="1.0s">
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
        </div>
    </section>
@endsection
