@extends('layouts.theme')
@section('content')
    <div class="container">
        <h4 class="text text-center text-success">Insert The Following Info To Add A Book</h4>
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Book Title</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lord Of The Rings">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Genre</label>
              <select class="form-control" id="exampleFormControlSelect1">
                @foreach ($genres as $genre )
                    <option value="{{ $genre }}">{{ $genre }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Give Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile" class="d-flex justify-content-center display-4">Upload Cover Image</label><br>
                <label for="coverimage" class="d-flex justify-content-center"><h1 class="text-center"><i class="fas fa-image text-primary"></i></h1></label>
                <input style="display: none;cursor:none;" type="file" onchange="cc()" class="form-control-file" id="coverimage"  accept=".png,.jpg,.jpeg,.PNG,.JPG,.JPEG">
                <div style="display:flex;justify-content:center;">
                    <img src="" style="display:none;" id="selectedimage">
                    <span style="display:none;" onclick="cross()" id="crossbutton" class="text-center">x</span>
                </div>


            </div>
            <div class="form-group">
                <label for="exampleFormControlFile" class="d-flex justify-content-center display-4">Upload PDF</label><br>
                <label for="exampleFormControlFile2" class="d-flex justify-content-center"><h1 class="text-center"><i class="fas fa-upload text-primary"></i></h1></label>
                <input style="display: none;cursor:none;" type="file" class="form-control-file" id="exampleFormControlFile2">
            </div>
          </form>
    </div>
@endsection
