<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>lib_book_music
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> --}}

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
     <!-- style css -->
     <link rel="stylesheet" href={{ asset("css/style2.css") }}>

    <!-- Modernizer JS -->
    <script src={{ asset("js/vendor/modernizr-2.8.3.min.js") }}></script>

</head>

<body>
    <header>
        <!-- header inner -->
        <div class="header">
           <div class="container">
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">

                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                       <div class="limit-box">
                          <nav class="main-menu">
                             <ul class="menu-area-main">
                                <li class="active"> <a href="{{ url('/books')}}">Home</a> </li>
                                <li> <a  href="{{ url('/books')}}">About us</a> </li>
                                <li><a  href="{{ url('/books')}}">Our Books</a></li>

                                <li><a href="contact.html">Contact us</a></li>
                                <li class="mean-last"> <a href="#"><img src={{ asset("images/search_icon.png") }} alt="#" /></a> </li>
                                <li class="mean-last"> <a href="#"><img src={{ asset("images/top-icon.png") }} alt="#" /></a> </li>
                             </ul>
                          </nav>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>

        <!-- end header inner -->
     </header>
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
