@extends('layout.layout')

@section('content')
  <form action="/book" method="post" class="col-md-4 mx-auto p-3">
    @csrf
    <h1 class="text-center mb-4">Add a new book</h1>
    <input class="form-control m-2" type="text" name="title" placeholder="title" value={{old('title')}}>
    @error('title')
      <p style="color: red">{{$message}}
    @enderror

    <input  class="form-control m-2" type="text" name="author" placeholder="author" value={{old('author')}}>
        @error('author')
         <p style="color: red">{{$message}}
       @enderror
            
    <input  class="form-control m-2" type="text" name="year" placeholder="year" value={{old('year')}}>
      @error('year')
        <p style="color: red">{{$message}}
      @enderror
    <input  class="form-control m-2" type="text" name="description" placeholder="description" value={{old('description')}}>
        @error('description')
        <p style="color: red">{{$message}}
      @enderror
    <button class="btn btn-primary m-2">Send</button>
  </form>
@endsection