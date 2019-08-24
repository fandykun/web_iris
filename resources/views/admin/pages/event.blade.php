@extends('admin.layouts.landing')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Members</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Events Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @if(count($events))
                <div class="card-footer small text-muted text-center">Last Update : {{ $events[0]->updated_at->format('Y-m-d H:i:s') }}</div>
            @endif
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#nav-event').addClass('active');
</script>
@endsection