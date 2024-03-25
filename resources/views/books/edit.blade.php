@extends('layout.layout')

@section('content')
  <form action="/book/{{$book->id}}" method="post"  class="col-md-4 mx-auto p-3">
    @method('put')
    @csrf
    <input type="text" name="title" placeholder="title" value={{$book->title}} class="form-control mb-2">
    @error('title')
      <p style="color: red">{{$message}}
    @enderror

    <input type="text" name="author" placeholder="author" value={{$book->author}} class="form-control mb-2">
        @error('author')
         <p style="color: red">{{$message}}
       @enderror
            
    <input type="text" name="year" placeholder="year" value={{$book->year}} class="form-control mb-2">
      @error('year')
        <p style="color: red">{{$message}}
      @enderror
    <input type="text" name="description" placeholder="description" value={{$book->description}} class="form-control mb-2">
        @error('description')
        <p style="color: red">{{$message}}
      @enderror
    <button class="btn btn-success">Send</button>
    <button class="btn btn-success"><a href="/book/manage" style="color: white; text-decoration:none">Back</a></button>
  </form>
@endsection