@extends('layouts.theme')
@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Cover</th>
            <th scope="col">Title</th>
            <th scope="col">File</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($books as $book )
            <tr>
                <td scope="row"><img style="height: 10vh;width:10vw;" src="{{ asset('images'.'/'.$book->image) }}" alt="cover photo"></td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->title.'pdf' }}</td>
                <td>
                  <button class="btn btn-danger">Delete</button>
                  <button class="btn btn-warning">Edit</button>

                </td>
              </tr>

            @empty
              <h1 class="text-danger text-center"> NO Books Available..!!</h1>
            @endforelse

        </tbody>
      </table>
</div>

@endsection
