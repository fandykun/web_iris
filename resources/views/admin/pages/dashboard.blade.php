@extends('admin.layouts.landing')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Page Content -->
    <h1>Dashboard</h1>
    <hr>
    <p>gatau nanti diisi apa dah</p>
@endsection

@section('script')
<script>
    $('#nav-dashboard').addClass('active');
</script>
@endsection