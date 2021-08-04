
@extends('layouts.front-end.theme')
<!-- Product Section Start -->
@section('section')
<div class="product-section section mt-90 mb-90">
    <div class="" style="background-color: white;height:100vh;">
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
                            {{-- <div class="product-short">
                                <p>Short by</p>
                                <select name="sortby" class="nice-select">
                                    <option value="trending">Trending items</option>
                                    <option value="sales">Best sellers</option>
                                    <option value="rating">Best rated</option>
                                    <option value="date">Newest items</option>
                                    <option value="price-asc">Price: low to high</option>
                                    <option value="price-desc">Price: high to low</option>
                                </select>
                            </div> --}}

                            <!-- Product Pages -->
                            {{-- <div class="product-pages">
                                <p>Pages 1 of 25</p>
                            </div> --}}

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
                                <div class="section-title-one" data-title="All BOOKS"><h1>All BOOKS</h1></div><hr>
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
                                                @foreach ($books as $book )
                                                <div class="col pb-20 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="ee-product">

                                                        <!-- Image -->
                                                        <div class="image">

                                                            <a href="{{ route('book',$book->id) }}" class="img"><img src="{{ asset('images'.'/'.$book->image) }}" style="height: 40vh;width:30vw;" alt="Product Image"></a>

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
                                                {{ $books->links() }}


                                            </div><!-- Product Slider End -->
                                        </div><!-- Product Slider Wrap End -->

                                    </div><!-- Tab Pane End -->

                                    <!-- Tab Pane Start -->
                                    <div class="tab-pane fade" id="tab-two">

                                        <!-- Product Slider Wrap Start -->
                                        <div class="product-slider-wrap product-slider-arrow-one">
                                            <!-- Product Slider Start -->
                                            <div class="product-slider product-slider-4">
                                                @foreach ($books as $book )
                                                <div class="col pb-20 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="ee-product">

                                                        <!-- Image -->
                                                        <div class="image">

                                                            <a href="{{ route('book',$book->id) }}" class="img"><img src="{{ asset('images'.'/'.$book->image) }}" style="height: 40vh;width:30vw;" alt="Product Image"></a>

                                                            <div class="wishlist-compare">
                                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                            </div>



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

                                                {{ $books->links() }}

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


                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!-- Feature Product Section End -->


@endsection
