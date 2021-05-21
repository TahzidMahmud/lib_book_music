@extends('layouts.theme')
@section('content')
    <div class="container">
        <h4 class="text text-center text-success">Insert The Following Info To Add A Book</h4>
        <form  action="{{ route('admin.storebook') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Book Title</label>
              <input required name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lord Of The Rings">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Genre</label>
              <select name="genre" class="form-control" id="exampleFormControlSelect1">
                @foreach ($genres as $genre )
                    <option value="{{ $genre }}">{{ $genre }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Give Description</label>
              <textarea required name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile" class="d-flex justify-content-center display-4">Upload Cover Image</label><br>
                <label for="coverimage" class="d-flex justify-content-center"><h1 class="text-center"><i class="fas fa-image text-primary"></i></h1></label>
                <input  style="display: none;cursor:none;" type="file" onchange="cc()" class="form-control-file" id="coverimage"  name="image" accept=".png,.jpg,.jpeg,.PNG,.JPG,.JPEG">
                <div style="display:flex;justify-content:center;">
                    <img src="" style="display:none;" id="selectedimage">
                    <span style="display:none;" onclick="cross()" id="crossbutton" class="text-center">x</span>
                </div>


            </div>
            <div class="form-group">
                <label for="exampleFormControlFile" class="d-flex justify-content-center display-4">Upload PDF</label><br>
                <label for="exampleFormControlFile2" class="d-flex justify-content-center"><h1 class="text-center"><i class="fas fa-upload text-primary"></i></h1></label>
                <input  style="display: none;cursor:none;"  onchange="fs()" type="file" class="form-control-file" id="exampleFormControlFile2" accept=".pdf" name="pdf">
                <h4 id="prevf" class="text text-primary text-center"></h4>
            </div>
            <br>
            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="padding: 10px;font-size:20px;"> Submit</button>
            </div>

          </form>
    </div>
@endsection
