@extends('layout.layout')

@section('content')
  @unless($books->isEmpty())
  <div class="table-responsive p-1">
    <h1 class="text-center mb-3">Your books:</h1>
    <table class="table table-striped ">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
    
        <tr>
          <td>{{$book->title}}</td>
          <td><a href="/book/{{$book->id}}/edit" style="color: black">Edit</a></td>
          <td> <form method="post" action="/book/{{$book->id}}">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
    
          </form>
        </td>
      </tr>
    
          @endforeach
      </tbody>
    </table>
  </div>
  @else
  <p>No books found</p>
  @endunless
@endsection