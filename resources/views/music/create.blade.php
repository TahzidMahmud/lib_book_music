@extends('layouts.theme')
@section('content')
    <div class="container">
        <h4 class="text text-center text-success">Insert The Following Info To Add A Music</h4>
        <form  action="{{ route('admin.storemusic') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Song Title</label>
              <input  required name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lord Of The Rings">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Song Link</label>
                <input  required name="link" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lord Of The Rings">
              </div>
            <div class="form-group">

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Give Description</label>
              <textarea required name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile" class="d-flex justify-content-center display-4">Upload Cover Image</label><br>
                <label for="coverimage" class="d-flex justify-content-center"><h1 class="text-center"><i class="fas fa-image text-primary"></i></h1></label>
                <input  required style="display: none;cursor:none;" type="file" onchange="cc()" class="form-control-file" id="coverimage"  name="image" accept=".png,.jpg,.jpeg,.PNG,.JPG,.JPEG">
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
