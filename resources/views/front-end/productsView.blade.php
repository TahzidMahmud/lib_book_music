
@extends('layouts.front-end.theme')
<!-- Product Section Start -->
@section('section')
<div class="product-section section mt-90 mb-90">
    <div class="container">
        @if(Session::has('message'))
            <div  class="alert alert-danger">
                <h1 >{{ Session::get('message') }}</h1>
            </div>
        @endif


        <div class="row">

            <div class="col-12">

                <div class="row mb-50">
                    <div class="col">

                        <!-- Shop Top Bar Start -->
                        <div class="shop-top-bar">

                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                            </div>

                            <!-- Product Showing -->
                            <div class="product-showing">
                                <p>Showing</p>
                                <select name="showing" class="nice-select">
                                    <option value="1">8</option>
                                    <option value="2">12</option>
                                    <option value="3">16</option>
                                    <option value="4">20</option>
                                    <option value="5">24</option>
                                </select>
                            </div>

                            <!-- Product Short -->
                            <div class="product-short">
                                <p>Short by</p>
                                <select name="sortby" class="nice-select">
                                    <option value="trending">Trending items</option>
                                    <option value="sales">Best sellers</option>
                                    <option value="rating">Best rated</option>
                                    <option value="date">Newest items</option>
                                    <option value="price-asc">Price: low to high</option>
                                    <option value="price-desc">Price: high to low</option>
                                </select>
                            </div>

                            <!-- Product Pages -->
                            <div class="product-pages">
                                <p>Pages 1 of 25</p>
                            </div>

                        </div><!-- Shop Top Bar End -->

                    </div>
                </div>

                <!-- Shop Product Wrap Start -->
                <!-- Shop Product Wrap Start -->
                <div class="shop-product-wrap grid row">

                    <div class="row">
                        <!-- Product List Start -->
                        <div class="ee-product-list">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="assets/images/product/product-1.jpg" alt="Product Image"></a>

                            </div>



                        </div><!-- Product List End -->

                    </div>


                </div><!-- Shop Product Wrap End -->

                <div class="product-section section mb-70">
                    <div class="container">
                        <div class="row">

                            <!-- Section Title Start -->
                            <div class="col-12 mb-40 mt-4">
                                <div class="section-title-one" data-title="All BOOKS"><h1>All BOOKS</h1></div>
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
                                        <div class="">
                                            <!-- Product Slider Start -->
                                            <div class="product-slider product-slider-4">

                                                <div class="col pb-20 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="ee-product">

                                                        <!-- Image -->
                                                        <div class="image">

                                                            <a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}" class="img"><img src="assets/images/product/product-1.jpg" alt="Product Image"></a>

                                                            <div class="wishlist-compare">
                                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                            </div>



                                                        </div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Category & Title -->
                                                            <div class="category-title">

                                                                <a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}" class="cat">Thriller</a>
                                                                <h5 class="title"><a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}">Game Of Thrones</a></h5>

                                                            </div>

                                                            <!-- Price & Ratting -->

                                                        </div>

                                                    </div><!-- Product End -->
                                                </div>

                                                <div class="col pb-20 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="ee-product">

                                                        <!-- Image -->
                                                        <div class="image">


                                                            <a href="{{ route('book',['product_name'=>'Harry Potter and the Sorcerer Stone','cat'=>'Science Fiction & Fantasy']) }}" class="img"><img src="assets/images/product/product-1.jpg" alt="Product Image"></a>

                                                            <div class="wishlist-compare">
                                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                            </div>



                                                        </div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Category & Title -->
                                                            <div class="category-title">

                                                                <a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}" class="cat">Science Fiction & Fantasy</a>
                                                                <h5 class="title"><a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}">Harry Potter </a></h5>

                                                            </div>

                                                            <!-- Price & Ratting -->

                                                        </div>

                                                    </div><!-- Product End -->
                                                </div>

                                                <div class="col pb-20 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="ee-product">

                                                        <!-- Image -->
                                                        <div class="image">

                                                            <a href="{{ route('book',['product_name'=>'The 48 Laws of Power','cat'=>'Business & Money']) }}" class="img"><img src="assets/images/product/product-1.jpg" alt="Product Image"></a>

                                                            <div class="wishlist-compare">
                                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                            </div>



                                                        </div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Category & Title -->
                                                            <div class="category-title">

                                                                <a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}" class="cat">Business & Money</a>
                                                                <h5 class="title"><a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}">The 48 Laws of Power</a></h5>

                                                            </div>

                                                            <!-- Price & Ratting -->


                                                        </div>

                                                    </div><!-- Product End -->
                                                </div>

                                                <div class="col pb-20 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="ee-product">

                                                        <!-- Image -->
                                                        <div class="image">

                                                            <a href="{{ route('book',['product_name'=>'Dare to Lead','cat'=>'Business Management & Leadership']) }}" class="img"><img src="assets/images/product/product-1.jpg" alt="Product Image"></a>
                                                            <div class="wishlist-compare">
                                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                            </div>



                                                        </div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Category & Title -->
                                                            <div class="category-title">

                                                                <a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}" class="cat">Business Management</a>
                                                                <h5 class="title"><a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}">Dare to Lead</a></h5>

                                                            </div>

                                                            <!-- Price & Ratting -->

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



                                                        </div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Category & Title -->
                                                            <div class="category-title">

                                                                <a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}" class="cat">Camera</a>
                                                                <h5 class="title"><a href="{{ route('book',['product_name'=>'Game Of Thrones','cat'=>'Thriller']) }}">Mony Handycam Z 105</a></h5>

                                                            </div>

                                                            <!-- Price & Ratting -->
                                                            <div class="price-ratting">


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
                </div>
                <div class="row mt-30">
                    <div class="col">

                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i>Back</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> - - - - - </li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">18</a></li>
                            <li><a href="#">20</a></li>
                            <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!-- Feature Product Section End -->


@endsection
