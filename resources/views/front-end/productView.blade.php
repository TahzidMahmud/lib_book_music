

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
<br><br>

        <div class="row mb-90">

            <div class="col-lg-6 col-12 mb-50">

                <!-- Image -->
                <div class="single-product-image thumb-right">

                    <div class="tab-content">
                             {{-- product images --}}
                        <div id="single-image-0" class="tab-pane fade show active big-image-slider">
                            <div class="big-image"><img src="{{ asset('images'.'/'.$book->image) }}" alt="Big Image"><a href="{{ asset('images'.'/'.$book->image) }}"  class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>


                    </div>
                    {{-- thumb nails --}}
                    <div class="thumb-image-slider nav" data-vertical="true">


                        <a class="thumb-image active" data-toggle="tab" href="#single-image-0"><img src={{ asset('images'.'/'.$book->image) }} alt="Thumbnail Image"></a>




                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-12 mb-50">

                <!-- Content -->
                <div class="single-product-content">

                    <!-- Category & Title -->
                    <div class="head-content">

                        <div class="category-title">
                            <a href="#" class="cat">{{ $book->genre }}</a>
                            <h5 class="title">{{ $book->title }}</h5>
                        </div>


                    </div>

                    <div class="single-product-description">

                        {{-- <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div> --}}

                        <div class="desc">
                            <p>this is a book of {{ $book->genre }} and one of the best sellers </p>
                        </div>



                        <div class="actions">


                            <a href={{ route('download',$book->id)}}><button class="btn ml-2" style="color:black;background-color:rgb(255, 208, 0);">Download</button></a>
                            <a href="#"><button onclick="read()" class="btn ml-2" id="read-btn" style="color:rgb(255, 255, 255);background-color:rgb(197, 11, 11);">Read Now</button></a>

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
            {{-- <iframe id="iframepdf" style="display: none;" src="{{ asset('pdfs'.'/'.$book->path) }}" width="100%" height="900px"></iframe> --}}
            <object id="iframepdf" data="{{ asset('pdfs'.'/'.$book->path) }}" style="display: none;" type="application/pdf" width="100%" height="800px">
                <embed src="{{ asset('pdfs'.'/'.$book->path) }}" type="application/pdf" width="100%" height="800px"/>
            </object>
        </div>
        <br><br><br>

    </div>
</div><!-- Single Product Section End -->

<!-- Related Product Section Start -->




@endsection
