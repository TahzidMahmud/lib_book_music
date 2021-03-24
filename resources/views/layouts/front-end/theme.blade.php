<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Take a Scroll</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href={{  asset("css/icon-font.min.css") }}>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href={{ asset("css/plugins.css") }}>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href={{ asset("css/style.css") }}>

    <!-- Modernizer JS -->
    <script src={{ asset("js/vendor/modernizr-2.8.3.min.js") }}></script>

</head>

<body>

@yield('section')






<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src={{ asset("js/vendor/jquery-1.12.4.min.js") }}></script>
<!-- Popper JS -->
<script src={{ asset("js/popper.min.js") }}></script>
<!-- Bootstrap JS -->
<script src={{ asset("js/bootstrap.min.js") }}></script>
<!-- Plugins JS -->
<script src={{ asset("js/plugins.js") }}></script>

<!-- Main JS -->
<script src={{ asset("js/main.js") }}></script>






</body>

</html>
