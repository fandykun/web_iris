@extends('layouts.app2')

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="qualification">
    <div class="container">
        @guest
        @else
            <a href="/gallery/create" class="btn btn-warning my-3">Create Gallery</a>
        @endguest
        <header class="section-header">
            <h3>GALLERY</h3>
            <p>Coming Soon</p>
        </header>
    </div>
</section>
@endsection
