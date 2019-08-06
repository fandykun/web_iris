<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IRIS-ITS Robotics Team</title>
    <link rel="icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('sneaky/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/Magnific-Popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('style')
</head>
<body onload="loadOn()">
    <div id="loader">
        <div class="box">
            <div class="shadow"></div>
            <div class="gravity">
                <div class="ball"></div>
            </div>
        </div>
    </div>
    <div id="body" style="display: none;" class="animate">

    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    </div>
    <script src="{{ asset('sneaky/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('sneaky/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sneaky/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('sneaky/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('sneaky/vendors/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('sneaky/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('sneaky/js/mail-script.js') }}"></script>
    <script src="{{ asset('sneaky/js/main.js') }}"></script>
    <script>
        function loadOn() {
            myVar = setTimeout(showPage, 1000);
        }
        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("body").style.display = "block";
        }
    </script>
    @yield('script')
</body>
</html>