@extends('layouts.front-end.theme')
@section( 'section')

<!-- Feature Product Section Start -->
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

                            <li> <a href="{{ url('/books')}}">About us</a> </li>
                            <li><a href="{{ url('/books')}}">Our Books</a></li>
                            <li><a href="{{ url('/books')}}">library</a></li>
                            <li><a href="{{ url('/books')}}">Contact us</a></li>
                            <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                            <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
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




   <!-- header -->

 <!-- end header -->
 <section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <img class="first-slide" src="images/banner.jpg" alt="First slide">
             <div class="container">
                <div class="carousel-caption relative">
                   <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                   <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                   <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>

                </div>
             </div>
          </div>
          <div class="carousel-item">
             <img class="second-slide" src="images/banner.jpg" alt="Second slide">
             <div class="container">
                <div class="carousel-caption relative">
                   <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                   <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                   <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>
                   <ul class="locat_icon">
                      <li> <a href="#"><img src="icon/facebook.png"></a></li>
                      <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                      <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                      <li> <a href="#"><img src="icon/instagram.png"></a></li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <img class="third-slide" src="images/banner.jpg" alt="Third slide">
             <div class="container">
                <div class="carousel-caption relative">
                   <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                   <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </p>
                   <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>
                   <ul class="locat_icon">
                      <li> <a href="#"><img src="icon/facebook.png"></a></li>
                      <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                      <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                      <li> <a href="#"><img src="icon/instagram.png"></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
       </a>
    </div>
 </section>
 <!-- about -->
 <div class="about">
    <div class="container">
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="aboutheading">
                <h2>About <strong class="black">Us</strong></h2>
                <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
             </div>
          </div>
       </div>
       <div class="row border">
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
             <div class="about-box">
                <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                <a href="#">Read More</a>
             </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
             <div class="about-box">
                <figure><img src="images/about.png" alt="img" /></figure>
             </div>
          </div>
       </div>
    </div>
 </div>

 <!-- end about -->
 <!-- Library -->
 <div class="Library">
    <div class="container">
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="titlepage">
                <h2>Our <strong class="black">Library </strong></h2>
             </div>
          </div>

       </div>

    </div>
    <div class="bg">
       <div class="container">
          <div class="row">
             <div class="col-md-10 offset-md-1">
                <div class="Library-box">
                   <figure><img src="images/Library-.jpg" alt="#"/></figure>
                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="product-section section mb-70">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40 mt-4">
                    <div class="section-title-one" data-title="FEATURED BOOKS"><h1>FEATURED BOOKS</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Filter Start -->
                <div class="col-12 mb-30">
                    <div class="product-tab-filter">

                        <!-- Tab Filter Toggle -->
                        <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>



                    </div>
                </div><!-- Product Tab Filter End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">
                    <div class="tab-content">

                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade show active" id="tab-one">

                            <!-- Product Slider Wrap Start -->
                            <div class="product-slider-wrap product-slider-arrow-one">
                                <!-- Product Slider Start -->
                                <div class="product-slider product-slider-4">

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-1.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Laptop</a>
                                                    <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$295.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label sale">sale</span>

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-2.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Drone</a>
                                                    <h5 class="title"><a href="single-product.html">Aquet Drone D 420</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price"><span class="old">$350</span>$275.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-3.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Games</a>
                                                    <h5 class="title"><a href="single-product.html">Game Station X 22</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$295.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-4.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Accessories</a>
                                                    <h5 class="title"><a href="single-product.html">Roxxe Headphone Z 75</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$110.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-5.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$110.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                </div><!-- Product Slider End -->
                            </div><!-- Product Slider Wrap End -->

                        </div><!-- Tab Pane End -->

                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade" id="tab-two">

                            <!-- Product Slider Wrap Start -->
                            <div class="product-slider-wrap product-slider-arrow-one">
                                <!-- Product Slider Start -->
                                <div class="product-slider product-slider-4">

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label sale">sale</span>

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-6.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product.html">Axor Digital camera</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price"><span class="old">$265</span>$199.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-7.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product.html">Silvex DSLR Camera T 32</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$580.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label new">new</span>

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-8.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product.html">Necta Instant Camera</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$320.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label sale">sale</span>

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-9.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Watch</a>
                                                    <h5 class="title"><a href="single-product.html">Mascut Smart Watch</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product.html" class="img"><img src="assets/images/product/product-10.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Watch</a>
                                                    <h5 class="title"><a href="single-product.html">Z Bluetooth Headphone</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$189.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                </div><!-- Product Slider End -->
                            </div><!-- Product Slider Wrap End -->

                        </div><!-- Tab Pane End -->

                    </div>
                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Feature Product Section End -->


    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="read-more">
                <a href="#">Read More</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end Library -->

 <!-- Contact -->
 <div class="Contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage3">
                <h2>Contact</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
             <form>
                <div class="row">
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                      <input class="form-control" placeholder="Name" type="Name">
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                      <input class="form-control" placeholder="Phone Number" type="Phone Number">
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                      <input class="form-control" placeholder="Email" type="Email">
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                      <textarea class="textarea" placeholder="Message">Message</textarea>
                   </div>
                </div>
             </form>
          </div>
          <button class="send-btn">Send</button>
       </div>
    </div>
 </div>
 <!-- end Contact -->
 <!-- footer -->
 <footer>
    <div class="footer">
       <div class="container">
          <div class="row pdn-top-30">
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="Follow">
                   <h3>Follow Us</h3>
                </div>

             </div>
             <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="Follow">
                   <h3>Newsletter</h3>
                </div>
                <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                <button class="Subscribe">Subscribe</button>
             </div>
          </div>
       </div>
    </div>

 </footer>






@endsection
