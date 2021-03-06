@extends('layouts.front-end.theme')
@section( 'section')

 <!-- end header -->
 <section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <img class="first-slide" src="images/banner.jpg" alt="First slide">
             <div class="container">
                <div class="carousel-caption relative">
                   <h1>Educate – Captivate – Connect.<br> Explore the World’s Knowledge.<br> Visit!</h1>
                   <p>There are lots of books present in our bookstore with different types of books<br> such as literature, poetry, fiction, non-fiction and related to every specific topic.</p>
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
 <div>

      </div>

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
               <!-- Product Tab Filter End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">
                    <div class="tab-content">

                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade show active" id="tab-one">

                            <!-- Product Slider Wrap Start -->
                            <div class="product-slider-wrap product-slider-arrow-one">
                                <!-- Product Slider Start -->
                                <div class="product-slider product-slider-4-full">
                                    @foreach ($books as $book )
                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="{{ route('book',$book->id) }}" class="img"><img src="{{ asset('images'.'/'.$book->image) }}" style="height: 40vh;width:100%;" alt="Product Image"></a>




                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="{{ route('book',$book->id) }}" class="cat">{{ $book->genre }}</a>
                                                    <h5 class="title"><a href="{{ route('book',$book->id) }}">{{ $book->title }}</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->

                                            </div>

                                        </div><!-- Product End -->
                                    </div>
                                    @endforeach


                                </div><!-- Product Slider End -->
                            </div><!-- Product Slider Wrap End -->

                        </div><!-- Tab Pane End -->

                        <!-- Tab Pane Start -->
                        <!-- Tab Pane End -->

                    </div>
                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Feature Product Section End -->

    <div class="row">
        <div class="col-md-5 col-sm-12 col-4">

        </div>
     <div  class="btn col-md-2 col-sm-12 col-4" style="background-color:#81256c;color:white;">
        <div class=""  style="z-index:100; ">
           <a style="z-index:100;color:white;" href="{{ url('/books/8/index') }}" >Read More</a>
        </div>
     </div>
  </div>

<!-- Feature Product Section Start -->
<div class="product-section section mb-70">
    <div class="container"><br>
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="FEATURED MUSIC"><h1>FEATURED MUSIC</h1></div>
            </div><!-- Section Title End -->



            <!-- Product Tab Content Start -->
            <div class="col-12">
                <div class="tab-content">

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade show active" id="tab-one">

                        <!-- Product Slider Wrap Start -->
                        <div class="product-slider-wrap product-slider-arrow-one">
                            <!-- Product Slider Start -->
                            <div class="product-slider product-slider-4-full">

                                @foreach ($musics as $music )
                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="{{ route('music',$music->id) }}" class="img">
                                                @if($music->thumb)
                                                <img src="{{ asset('images'.'/'.$music->thumb) }}" style="height: 40vh;width:100%;" alt="Product Image">
                                                @else
                                                <img src="{{ asset('images/thump.jpg') }}" style="height: 40vh;width:100%;" alt="Product Image">
                                                @endif
                                            </a>

                                            {{-- <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div> --}}



                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="{{ route('music',$music->id) }}" class="cat"></a>
                                                <h5 class="title"><a href="{{ route('music',$music->id) }}">{{ $music->title }}</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->

                                        </div>

                                    </div><!-- Product End -->
                                </div>
                                @endforeach

                            </div><!-- Product Slider End -->
                        </div><!-- Product Slider Wrap End -->

                    </div><!-- Tab Pane End -->
                </div>
            </div><!-- Product Tab Content End -->

        </div>
    </div>
</div><!-- Feature Product Section End -->



    <div class="row">
        <div class="col-md-5 col-sm-12 col-4">

        </div>
     <div  class="btn col-md-2 col-sm-12 col-4" style="background-color:#81256c;color:white;">
        <div class=""  style="z-index:100; ">
           <a style="z-index:100;color:white;" href="{{ url('/musics/8/index') }}" > Explore</a>
        </div>
     </div>
  </div>
 </div>
 <!-- end Library -->
 <!-- about -->
 <div class="about" id="about">
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
 <!-- Contact -->
 <div class="Contact" id="Contact">
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
