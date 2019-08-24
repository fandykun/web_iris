@extends('admin.layouts.landing')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Gallery</li>
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
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($galleries as $gallery)
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->description }}</td>
                        <td><img src="{{ asset('storage/gallery/'.$message->image)}}"></td>
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
@endsection

@section('script')
<script>
    $('#nav-gallery').addClass('active');
</script>
@endsection