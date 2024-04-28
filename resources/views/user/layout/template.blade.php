<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="/public/storage/img/curriculum-vitae.png" type="image/x-icon">

    <!--Css/Js compiled files-->
    @vite('resources/js/app.js')

</head>
<body>

    @include('user.layout.header')

    <main class="flex">

        @include('user.layout.navbar')

        @yield('content')

    </main>


    @include('user.layout.footer')

</body>
</html>
