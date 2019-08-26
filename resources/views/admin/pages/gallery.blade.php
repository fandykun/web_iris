@extends('admin.layouts.landing')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb " style="align-items: center;">
        <li class="breadcrumb-item">
        <a href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Gallery</li>
        <button type="button" class="btn btn-success float-right ml-auto" data-toggle="modal" data-target="#exampleModalCenter">Create</button>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Galleries Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($galleries as $gallery)
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->description }}</td>
                        <td class="text-center"><img src="{{ asset('storage/gallery/'.$gallery->image)}}" class="img-thumbnail img-fluid" style="height: 144px;"></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning mb-2" data-toggle="modal" data-target="#modal-edit" data-id="{{ $gallery->id }}">Edit</button><br>
                            <button type="button" class="btn btn-danger delete" data-id="{{ $gallery->id }}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @if(count($galleries))
                <div class="card-footer small text-muted text-center">Last Update : {{ $galleries[0]->updated_at->format('Y-m-d H:i:s') }}</div>
            @endif
        </div>
    </div>

    @include('admin.pages.galleryCreate');
    @include('admin.pages.galleryEdit');
    <form method="post" id="deleteGallery" action="{{route('gallery.delete')}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="hidden" name="id" id="idGallery" name="id">
    </form> 
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('#nav-gallery').addClass('active');
    $(document).on('click', ".delete", async function() {
        const dataId = $(this).attr('data-id');
        swal({
          title: "Are you sure?",
          text: "Data yang telah dihapus tidak dapat dikembalikan!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $('#idGallery').val(dataId);
            $('#deleteGallery').submit();
          } else {
            return false;
          }
        });
    });
</script>
@endsection