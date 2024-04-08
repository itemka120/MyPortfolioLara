<!DOCTYPE html>
<html
    class="history svg video supports boxshadow csstransforms3d csstransitions backgroundcliptext webkit chrome win js sticky-header-enabled"
    lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/public/storage/img/cv-et-cv.png" type="image/x-icon">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!--Css/Js compiled files-->
    @vite(['resources/js/app.js'])

</head>

<body>

    @include('admin.layout.sidebar')

    @yield('content')

</body>

</html>
