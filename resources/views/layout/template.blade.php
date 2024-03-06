<!DOCTYPE html>
<html class="history svg video supports boxshadow csstransforms3d csstransitions backgroundcliptext webkit chrome win js sticky-header-enabled" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/public/storage/img/cv-et-cv.png" type="image/x-icon">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link id="googleFonts"
              href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap"
              rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="/resources/Porto/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/resources/Porto/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/resources/Porto/vendor/animate/animate.compat.css">
        <link rel="stylesheet" href="/resources/Porto/vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="/resources/Porto/vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="/resources/Porto/vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="/resources/Porto/vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="/resources/Porto/css/theme.css">
        <link rel="stylesheet" href="/resources/Porto/css/theme-elements.css">
        <link rel="stylesheet" href="/resources/Porto/css/theme-blog.css">
        <link rel="stylesheet" href="/resources/Porto/css/theme-shop.css">

        <!-- Skin CSS -->
        <link id="skinCSS" rel="stylesheet" href="/resources/Porto/css/skins/default.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="/resources/Porto/css/custom.css">
    </head>

    <body>
    <div class="body">

        @include('layout.header')

        @yield('content')

    </div>

        @include('layout.footer')

    </body>
    <!-- Vendor -->
    <script src="/resources/Porto/vendor/jquery/jquery.min.js"></script>
    <script src="/resources/Porto/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="/resources/Porto/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/resources/Porto/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="/resources/Porto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/resources/Porto/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="/resources/Porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="/resources/Porto/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="/resources/Porto/vendor/lazysizes/lazysizes.min.js"></script>
    <script src="/resources/Porto/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="/resources/Porto/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/resources/Porto/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/resources/Porto/vendor/vide/jquery.vide.min.js"></script>
    <script src="/resources/Porto/vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="/resources/Porto/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="/resources/Porto/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="/resources/Porto/js/theme.init.js"></script>
</html>
