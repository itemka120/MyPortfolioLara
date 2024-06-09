<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('/public/storage/img/curriculum-vitae.png')}}" type="image/x-icon">

    <!--Css/Js compiled files-->
    @vite('resources/js/app.js')

</head>
<body>

<div class="flex sm:flex-row flex-col">
    @include('admin.layout.sidebar')

    @yield('content')
</div>


</body>
</html>
