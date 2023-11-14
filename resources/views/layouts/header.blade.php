<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Carousel custom css -->
    <link rel="stylesheet" href="utils/banner_carousel/banner_carousel.css">
    <link rel="stylesheet" href="utils/teachers_carousel/teachers_carousel.css">

    <!-- <link rel="stylesheet" href="src/assests/css/nav.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet"><!--  -->

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Noto+Sans+Bengali&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
        /* Default styles for larger screens */
        body {
            font-family: 'Nanum Pen Script', cursive;
            font-family: 'Noto Sans Bengali', sans-serif;
        }

        .mapouter {
            position: relative;
            text-align: right;
            width: 100%;
            height: 400px;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 100%;
            height: 400px;
        }

        .gmap_iframe {
            width: 100% !important;
            height: 400px !important;
        }

        #menu1::after {
            display: none;
        }

        #menu2::after {
            display: none;
        }

        #menu3::after {
            display: none;
        }

        #menu4::after {
            display: none;
        }

        #menu5::after {
            display: none;
        }
    </style>
</head>

<body>
    @include('components.nav.nav')
    @include('components.nav.nav_two')
    @include('components.nav.reponsive_nav')
    @include('components.nav.responsive_nav_two')
