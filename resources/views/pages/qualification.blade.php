@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar2')
@endsection

@section('title')
    <title>{{$title}} - {{ config('app.name') }}</title>
@endsection

@section('content')
<div class="container">
    
</div>
@endsection
