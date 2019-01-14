@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar2')
@endsection

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="about">
        <div class="container">
            <header class="section-header">
                <h3>ABOUT</h3>
                <p>Coming Soon</p>
            </header>
        </div>
    </section>
@endsection
