@extends('layout.layout')

@section('content')
  <p class="text-center" style="color: red">{{session('error')}}</p>
  <form action="/authenticate" method="POST" class="col-md-4 mx-auto p-3">
    @csrf
    <div>
      <legend>Login</legend>
      <label class="form-label" for="email">Email address</label>
      <input  class="form-control mb-3 " type="text" name="email" id="email"  value={{old('email')}}>
        @error('email')
            <p style="color:red">{{$message}}</p>
        @enderror
    </div>
    <div>
      <label class="form-label" for="password">Password</label>
      <input  class="form-control mb-3" type="password" name="password">
        @error('password')
          <p style="color:red">{{$message}}</p>
        @enderror
    </div>
    <button class="btn btn-primary">Login</button>
  </form>
@endsection