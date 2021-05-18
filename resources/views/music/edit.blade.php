@extends('layouts.theme')
@section('content')
    <div class="container">
        <h4 class="text text-center text-success">Insert The Following Info To Edit A Music</h4>
        <form  action="{{ route('admin.updatemusic') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $music->id }}">
            <div class="form-group">
              <label for="exampleFormControlInput1">Song Title</label>
              <input name="title" value="{{ $music->title }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lord Of The Rings">
            </div>
            <div class="form-group "  >
                <div class="d-flex justify-content-center display-4">
                    <label for="" class="row">Current Song </label>
                </div>
               <div class="d-flex justify-content-center ">
                {!! $music->link !!}
               </div>


            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">New Song Link</label>
                <input name="link" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Give Description</label>
              <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $music->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="prevselectedimage" class="d-flex justify-content-center display-4"> Current Cover</label>
                <div style="display:flex;justify-content:center;">
                    <img src="{{asset('images'.'/'.$music->thumb)}}"  style="height: 30vh;width:30vw;" id="prevselectedimage">
                </div>
                <label for="exampleFormControlFile" class="d-flex justify-content-center display-4">Upload New Cover Image</label><br>
                <label for="coverimage" class="d-flex justify-content-center"><h1 class="text-center"><i class="fas fa-image text-primary"></i></h1></label>
                <input style="display: none;cursor:none;" type="file" onchange="cc()" class="form-control-file" id="coverimage"  name="image" accept=".png,.jpg,.jpeg,.PNG,.JPG,.JPEG">
                <div style="display:flex;justify-content:center;">
                    <img src="" style="display:none;" id="selectedimage">
                    <span style="display:none;" onclick="cross()" id="crossbutton" class="text-center">x</span>
                </div>
            </div>

            <br>
            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="padding: 10px;font-size:20px;"> Submit</button>
            </div>

          </form>
    </div>
@endsection

