@extends('layouts.theme')
@section('content')
    <div class="container">
        <h4 class="text text-center text-success">Insert The Following Info To Add A Book</h4>
        <form  action="{{ route('admin.updatebook') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $book->id }}">
            <div class="form-group">
              <label for="exampleFormControlInput1">Book Title</label>
              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lord Of The Rings" value="{{ $book->title }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Genre</label>
              <select name="genre" class="form-control" id="exampleFormControlSelect1">
                  <option value="{{ $book->genre }}" selected >{{ $book->genre }} </option>
                @foreach ($genres as $genre )
                    <option value="{{ $genre }}">{{ $genre }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Give Description</label>
              <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">
                  {{ $book->description }}
              </textarea>
            </div>
            <div class="form-group">
                <label for="prevselectedimage" class="d-flex justify-content-center display-4"> Current Cover</label>
                <div style="display:flex;justify-content:center;">
                    <img src="{{asset('images'.'/'.$book->image)}}"  style="height: 30vh;width:30vw;" id="prevselectedimage">
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
