@extends('admin.layouts.landing')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="align-items: center;">
        <li class="breadcrumb-item">
        <a href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Slider</li>
        <button type="button" class="btn btn-success float-right ml-auto">Create</button>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Sliders Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{ $slider->name }}</td>
                        <td><img src="{{ asset('storage/slider/'.$slider->image) }}"></td>
                        <td class="text-center">
                            <a href="#" class="badge badge-warning">Edit</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @if(count($sliders))
                <div class="card-footer small text-muted text-center">Last Update : {{ $sliders[0]->updated_at->format('Y-m-d H:i:s') }}</div>
            @endif
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#nav-slider').addClass('active');
</script>
@endsection