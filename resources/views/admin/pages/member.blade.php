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
            <i class="fas fa-table"></i> Members Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Division</th>
                        <th>Description</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Linkedin</th>
                        <th>Instagram</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Division</th>
                        <th>Description</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Linkedin</th>
                        <th>Instagram</th>
                        <th>Image</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->division }}</td>
                    <td>{{ $member->description }}</td>
                    <td>{{ $member->facebook }}</td>
                    <td>{{ $member->twitter }}</td>
                    <td>{{ $member->linkedin }}</td>
                    <td>{{ $member->instagram }}</td>
                    <td><img class="img-thumbnail" src="{{ asset('iris/member/'.$member->name.'.jpg') }}"></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            @if(count($members))
                <div class="card-footer small text-muted text-center">Last Update : {{ $members[0]->updated_at->format('Y-m-d H:i:s') }}</div>
            @endif
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#nav-member').addClass('active');
</script>
@endsection