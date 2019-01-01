<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.metadata')
    
    <title> @yield('title') </title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">

    @yield('css')
</head>
<body>
    @include('layout.navbar')
    @yield('body')

    <script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script>
    @yield('script')

</body>
</html>