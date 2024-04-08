<!DOCTYPE html>
<html class="h-100"
    lang="en">
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="/public/storage/img/cv-et-cv.png" type="image/x-icon">

    <style>
        .font {
            font-family: cursive;
        }

        /*
 * Globals
 */


        /*
         * Base structure
         */

        body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 50em;
        }


        /*
         * Header
         */

        .nav-masthead .nav-link {
            color: rgba(255, 255, 255, .5);
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
            color: #0dcaf0;
        }

        .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }
    </style>

    <!--Css/Js compiled files-->
    @vite(['resources/js/app.js'])

</head>

    <body class="d-flex font text-center h-100 text-bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

            @include('user.layout.header')

            @yield('content')

            @include('user.layout.footer')

        </div>
    </body>

</html>
