@extends('layouts.app2')

@section('content')
<section id="gallery">
    <div class="container">
        <form action="{{'/gallery'}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="galleryName">Nama</label>
                <input type="text" name="name" class="form-control" id="galleryName" placeholder="Isi deskripsi singkat" required>
            </div>
            <div class="form-group">
                <label for="galleryYear">Tahun</label>
                <input type="text" name="year" class="form-control" id="galleryYear" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="galleryCover">Gambar</label>
                <input type="file" name="cover_image" class="form-control-file" id="galleryCover">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
                <a href="/gallery" class="btn btn-outline-success">Back</a>
            </div>
        </form>
    </div>
</section>
@endsection