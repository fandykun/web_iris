@extends('admin.layouts.landing')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="align-items: center;">
        <li class="breadcrumb-item">
        <a href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Oprec</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Oprecs Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>NRP</th>
                        <th>Department</th>
                        <th>Division</th>
                        <th>CV</th>
                        <th>KTM</th>
                        <th>Essay General</th>
                        <th>Essay Division</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>NRP</th>
                        <th>Department</th>
                        <th>Division</th>
                        <th>CV</th>
                        <th>KTM</th>
                        <th>Essay General</th>
                        <th>Essay Division</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($oprecs as $oprec)
                    <tr>
                        <td>{{ $oprec->name }}</td>
                        <td>{{ $oprec->NRP }}</td>
                        <td>{{ $oprec->department }}</td>
                        <td>{{ $oprec->division }}</td>
                        <td><a href="{{ asset('storage/oprec/' . $oprec->CV) }}" target="_blank">CV</a></td>
                        <td><a href="{{ asset('storage/oprec/' . $oprec->KTM) }}" target="_blank">KTM</a></td>
                        <td><a href="{{ asset('storage/oprec/' . $oprec->essay_general) }}" target="_blank">Essay General</a></td>
                        <td><a href="{{ asset('storage/oprec/' . $oprec->essay_division) }}" target="_blank">Essay Division</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @if(count($oprecs))
                <div class="card-footer small text-muted text-center">Last Update : {{ $oprecs[0]->updated_at->format('Y-m-d H:i:s') }}</div>
            @endif
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#nav-message').addClass('active');
</script>
@endsection