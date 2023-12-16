<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AI Trading</title>

    <link rel="icon" type="image/png" sizes="16x16" href="dshb/images/favicon.png">
    <link rel="stylesheet" href="dshb/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dshb/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="dshb/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="dshb/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="dshb/css/style_form.css" />


</head>





@yield('content')


</html>
