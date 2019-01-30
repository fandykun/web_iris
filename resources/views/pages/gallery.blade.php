@extends('layouts.app2')

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<section id="gallery" class="section-bg">
    <div class="container">
        @guest
        @else
            <a href="{{asset('/gallery/create')}}" class="btn btn-warning my-3">Create Gallery</a>
            {{-- <form action="/gallery/{{$gallery->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-md btn-danger" type="submit">Delete Product</button>
            </form> --}}
        @endguest
        <header class="section-header">
            <h3>GALLERY</h3>
        </header>

        <div class="row gallery-container">
        @foreach($galleries as $gallery)
            <div class="col-lg-3 col-md-6 gallery-item filter-app wow fadeInUp">
                <div class="gallery-wrap">
                    <figure>
                        <img src="/storage/gallery/cover_images/{{$gallery->cover_image}}" class="img-fluid" alt="">
                    </figure>
                    <div class="gallery-info">
                        <h4><a>{{$gallery->name}}</a></h4>
                    </div>
                </div>
            </div>
        @endforeach 
        </div>
</section>

@endsection
