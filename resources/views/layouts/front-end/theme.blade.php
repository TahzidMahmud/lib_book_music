<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gaan_Ar_Boi
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> --}}

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{  asset('css/icon-font.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <!-- style css -->
     <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body style="background-color: white;height:100vh;">
<style>
a{
   background-color:transparent !important;
}
</style>
    <header>
        <!-- header inner -->
        <div class="header" style="background-color:rgba(0,0,0,0.2);">
           <div class="container" style="background-color:transparent !important;">
              <div class="row" style="background-color:transparent !important;">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section" style="background-color:transparent !important;">
                    <div class="full" style="background-color:transparent !important;">

                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" style="background-color:transparent !important;">
                    <div class="menu-area" style="background-color:transparent !important;">
                       <div class="limit-box" style="background-color:transparent !important;">
                          <nav class="main-menu" style="background-color:transparent !important;">
                          <ul class="menu-area-main" style="background-color:transparent !important;">
                            <li style="background-color:transparent !important;"> <a href="{{ url('/')}}">Home</a> </li>
                            <li style="background-color:transparent !important;"> <a href="#about">About us</a> </li>
                            <li style="background-color:transparent !important;"><a href={{ url('/books/8/index') }}>Our Books</a></li>
                            <li style="background-color:transparent !important;"><a href={{ url('/musics/8/index') }} >Music</a></li>
                            <li style="background-color:transparent !important;"><a href="#Contact">Contact us</a></li>
                            {{-- <li style="background-color:transparent !important;" class="mean-last"> <a href="#"><img src={{asset("images/search_icon.png")}} alt="#" /></a> </li> --}}
                            @auth
                                @if(auth()->user()->email == "admin@admin.com")
                                <li style="background-color:transparent !important;" class="mean-last"> <a  href={{ route('admin.dashboard') }}><img src={{asset("images/top-icon.png")}} alt="#" /></a> </li>
                                @endif
                            @endauth

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



<style>

    .sideframes > iframe{
        height: 30vh!important;
        width: 26vw!important;
    }
    .mainframe > iframe{
        height: 80vh!important;
        width: 100%!important;
    }
</style>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>

<script>
     function read(id){
                    document.getElementById("iframepdf").style.display="block";

                    window.axios.get(`/books/${id}/read`).then((res)=>{
                        console.log("red");
                    })
                }
</script>
<script>
    $("#paginate").change(function(){

        var val=document.getElementById("paginate").value;
        // var url = window.location.href;
        // // let temp=url.slice(0, -1);
        // let temp=url.substring(0, url.lastIndexOf("/") + 1);
        // let f=temp.concat($val);
        location.replace(`/books/${val}/index`);


    })

</script>



</body>

</html>
