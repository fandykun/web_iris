<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IRIS-ITS Robotics Team</title>
    <link rel="icon" href="{{ asset('favicon.ico?v=2') }}" />

    <link rel="stylesheet" href="{{ asset('sneaky/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/vendors/Magnific-Popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('sneaky/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.1') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146577963-1"></script>
    <script>
      var host = window.location.hostname;
      if("localhost" != host) {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-146577963-1');
      }
    </script>
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

        $(window).scroll(function () {
            if ($(this).scrollTop() < 50) { 
                $('.logo_h img').attr('src','{{ asset('iris/logo-header-green.png') }}');
            }
            else { 
                $('.logo_h img').attr('src','{{ asset('iris/logo-header.png') }}');
            }
        });
    </script>
    @yield('script')
</body>
</html>