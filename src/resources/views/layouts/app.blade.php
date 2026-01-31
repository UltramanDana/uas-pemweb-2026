<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="cssAnm/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/plyr.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/nice-select.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="cssAnm/style.css" type="text/css">
</head>

    @include('partials.header')
    @include('partials.hero')
    @include('partials.product')
    @yield('content')
    @include('partials.footer')
    @include('partials.searchmodel')
    @include('partials.script')

</body>