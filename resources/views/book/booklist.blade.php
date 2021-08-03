@extends('layouts.theme')
@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
             <th class="text-center" scope="col">Cover</th>
             <th class="text-center" scope="col">Title</th>
             <th class="text-center" scope="col">File</th>
             <th class="text-center" scope="col">Download(times)</th>
             <th class="text-center" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($books as $book )
            <tr>
                <td scope="row"><img style="height: 10vh;width:10vw;" src="{{ asset('images'.'/'.$book->image) }}" alt="cover photo"></td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->title.'pdf' }}</td>
                <td class="text-center">{{ $book->download_count }}</td>
                <td>
                  <div class="d-flex justify-content-around">


                  <form action="{{ route('book.delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a  href="{{ route('admin.books.edit',$book->id) }}" class="btn btn-warning">Edit</a>
                </div>
                </td>
              </tr>

            @empty
              <h1 class="text-danger text-center"> NO Books Available..!!</h1>
            @endforelse

        </tbody>
      </table>
</div>

@endsection
