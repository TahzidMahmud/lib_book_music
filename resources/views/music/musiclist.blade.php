@extends('layouts.theme')
@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
             <th class="text-center" scope="col">Cover</th>
             <th class="text-center" scope="col">Title</th>
             <th class="text-center" scope="col">Music</th>
             <th class="text-center" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($musics as $music )
            <tr>
                <td scope="row"><img style="height: 10vh;width:10vw;" src="{{ asset('images'.'/'.$music->thumb) }}" alt="cover photo"></td>
                <td>{{ $music->title }}</td>
                <td style="height: 10vh!important;width:10vw!important;">{!! $music->link !!}</td>

                <td>
                  <div class="d-flex justify-content-around">


                  <form action="{{ route('music.delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="music_id" value="{{ $music->id }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="{{ route('admin.musics.edit',$music->id) }}" class="btn btn-warning">Edit</a>
                </div>
                </td>
              </tr>

            @empty
              <h1 class="text-danger text-center"> NO Music Available..!!</h1>
            @endforelse

        </tbody>
      </table>
</div>

@endsection
