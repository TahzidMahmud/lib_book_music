
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



                <!-- Shop Product Wrap Start -->
                <!-- Shop Product Wrap Start -->
                <div class="shop-product-wrap grid row m-4" id="perp" style="margin-top:18vh!important;">
                    <p>Showing Per-page</p>
                    <select id="paginate" name="showing" class="nice-select">
                        @if($qty==8)
                            <option selected value="8">8</option>

                        @else
                            <option  value="8">8</option>
                        @endif
                            @if($qty==12)
                                <option selected value="12">12</option>

                            @else
                                <option value="12">12</option>
                            @endif
                            @if($qty==16)
                                <option selected value="16">16</option>

                            @else
                                <option value="16">16</option>
                            @endif
                            @if($qty==20)
                                <option selected value="20">20</option>

                            @else
                                <option value="20">20</option>
                            @endif
                            @if($qty==24)
                                <option selected value="24">24</option>

                            @else
                                <option value="24">24</option>
                            @endif

                    </select>

                    <div class="row">

                        @foreach ($books as $book )
                                                <div class="ee-product col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                                                    <!-- Product Start -->
                                                    <div class="">

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


                    </div>


                </div><!-- Shop Product Wrap End -->

                <div class="row mt-30">
                    <div class="col">

                        <ul class="pagination">

                            {{ $books->links() }}
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!-- Feature Product Section End -->


@endsection
