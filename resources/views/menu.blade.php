<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        /* menu */
        .menu-wrapper,
        .menu a {
            width: 100%;
        }

        .menu::after {
            content: '';
            clear: both;
            display: block;
        }

        .menu a {
            display: block;
            padding: 10px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-decoration: none;
            font-size: 20px;
        }

        .menu li {
            position: relative;
        }

        .menu>li {
            float: left;
        }

        .menu,
        .menu ul {
            display: inline-block;
            padding: 0;
            margin: 0;
            list-style-type: none;
            background: gold;
        }

        .menu ul li+li {
            border-top: 1px solid #fff;
        }

        .menu ul {
            position: absolute;
            box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.5);
        }

        .menu>li ul,
        .menu ul ul {
            opacity: 0;
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            z-index: -1;
            visibility: hidden;
        }

        .menu>li ul {
            top: 130%;
            left: 0;
        }

        .menu ul ul {
            left: 130%;
            top: 0;
        }

        .menu ul a {
            width: 250px;
        }

        .menu>li:hover>ul {
            top: 100%;
            opacity: 1;
            z-index: 1;
            visibility: visible;
        }

        .menu ul>li:hover>ul {
            left: 100%;
            opacity: 1;
            z-index: 1;
            visibility: visible;
        }

        .menu-gold,
        .menu-gold a {
            color: #000;
        }

        .menu-gold a:hover {
            background-color: #e6c300;
            color: #000;
        }

        body {
            background-image: url("http://recruit.framgia.vn/wp-content/themes/framgia-vn/css/images/bg/banner.jpg");
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-size: 40px;
        }

        /* ends */
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <h1>Menu ngang đơn giản với HTML & CSS</h1>
    <div class="menu-wrapper menu-gold">

        <ul class="menu">
            @foreach ($categories as $categorieParent)
                <li>
                    <a href=""> {{ $categorieParent->title }}</a>
                    @include('child_menu', ['categorieParent'=>$categorieParent])
                </li>
            @endforeach
        </ul>
    </div>
</body>



</html>
