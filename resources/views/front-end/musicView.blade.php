

@extends('layouts.front-end.theme')
@section('section')
<!-- Single Product Section Start -->
<div class="product-section section mt-90 mb-90">
    <br>
    <br>
    <div class="container">
        @if(Session::has('message'))
            <div  class="alert alert-danger">
                <h1 >{{ Session::get('message') }}</h1>
            </div>
        @endif

        <div class="row">
            <div class="col-md-8">
                <div class="mainframe">
                    {!! $music->link !!}

                </div>
                <h5>{{ $music->title }}</h5>
                <p>{{ $music->description }}</p>
            </div>
            <div class="col-md-4" style="max-height: 100vh;overflow:scroll-y;">
                @foreach ($musics as $music )
                    <div class="row" >
                        <div class="card">
                            <div class="card-body">
                                <div class="sideframes card-image" >
                                    {!! $music->link !!}
                                </div><br>
                                <h6>{{ $music->title }}</h6>
                                <p>{{ $music->description }}</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div><!-- Single Product Section End -->

<!-- Related Product Section Start -->




@endsection
