<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{isset($title) ? $title . ' - ' . config('app.name') : config('app.name') . ' - ' . config('app.slogan') }}</title>
    <link rel="icon" type="image/png" sizes="20x6" href="{{ asset('assets/img/heding-logo.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('dependencies/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/fontawesome/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/swiper/css/swiper.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/wow/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/components-elegant-icons/css/elegant-icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/themify-icons/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/simple-line-icons/css/simple-line-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/feathericons/css/feather.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dependencies/magnific-popup/css/magnific-popup.css') }}" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">

    <!-- Google Web Fonts -->



</head>

<body id="home-version-1" class="home-version-1" data-style="default">
    <!-- 
	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a> -->

    <div id="main_content">
        <section id="content">
            {{ $slot }}
        </section>
    </div><!-- /#site -->

    <!-- Dependency Scripts -->
    <script src="{{ asset('dependencies/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dependencies\bootstrap\js\bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('dependencies/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('dependencies/jquery.appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('dependencies/wow/js/wow.min.js') }}"></script>
    <script src="{{ asset('dependencies/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>