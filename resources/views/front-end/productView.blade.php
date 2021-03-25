

@extends('layouts.front-end.theme')
@section('section')
<!-- Single Product Section Start -->
<div class="product-section section mt-90 mb-90">
    <div class="container">
        @if(Session::has('message'))
            <div  class="alert alert-danger">
                <h1 >{{ Session::get('message') }}</h1>
            </div>
        @endif
        <div class="row mb-90">

            <div class="col-lg-6 col-12 mb-50">

                <!-- Image -->
                <div class="single-product-image thumb-right">

                    <div class="tab-content">

                             {{-- product images --}}
                        <div id="single-image-0" class="tab-pane fade show active big-image-slider">
                            <div class="big-image"><img src={{ asset("assets/images/product/product-1.jpg" ) }} alt="Big Image"><a href={{ asset("assets/images/product/product-1.jpg" ) }}  class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>


                    </div>
                    {{-- thumb nails --}}
                    <div class="thumb-image-slider nav" data-vertical="true">


                        <a class="thumb-image active" data-toggle="tab" href="#single-image-0"><img src={{ asset("assets/images/product/product-1.jpg" ) }} alt="Thumbnail Image"></a>




                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-12 mb-50">

                <!-- Content -->
                <div class="single-product-content">

                    <!-- Category & Title -->
                    <div class="head-content">

                        <div class="category-title">
                            <a href="#" class="cat">{{ $cat }}</a>
                            <h5 class="title">{{ $product_name }}</h5>
                        </div>


                    </div>

                    <div class="single-product-description">

                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                        <div class="desc">
                            <p>this is a book of {{ $cat }} and one of the best sellers </p>
                        </div>

                        <span class="availability">Availability:
                           <span>In Stock</span>

                        </span>

                        <div class="quantity-colors">

                            <div class="quantity">
                                <h5>Quantity</h5>
                                <div class="pro-qty"><input type="text" value="1"></div>
                            </div>



                        </div>

                        <div class="actions">


                            <a href={{ route('download') }}><button class="btn ml-2" style="color:black;background-color:rgb(255, 208, 0);">Download</button></a>

                             <div class="wishlist-compare">
                                 {{-- <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a> --}}
                                     <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                             </div>




                         </div>


                        <div class="tags">


                            {{-- @if($product->product_tags)
                                @forelse($product->product_tags as $value)
                                <h5>Tags:</h5>
                                    <a href="#">{{ $value }}</a>
                                @empty

                                @endforelse
                            @endif --}}



                        </div>

                        <div class="share">

                            <h5>Share: </h5>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

        </div>

    </div>
</div><!-- Single Product Section End -->

<!-- Related Product Section Start -->




@endsection
