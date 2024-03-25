@extends('layout.layout')

@section('content')
  <form action="/users" method="POST"  class="col-md-4 mx-auto p-3">
    @csrf
    <legend>Registration</legend>
    <div>
      <label for="name" class="form-label">User name</label>
      <input class="form-control mb-2" type="text" name="name" id="name" value={{old('name')}}>
      @error('name')
          <p style="color:red">{{$message}}</p>
      @enderror
    </div>
    <div>
      <label for="email" class="form-label">Email address</label>
      <input class="form-control mb-2" type="text" name="email" id="email"  value={{old('email')}}>
        @error('email')
            <p style="color:red">{{$message}}</p>
        @enderror
    </div>
    <div>
      <label for="password" class="form-label">Password</label>
      <input class="form-control mb-2" type="password" name="password">
        @error('password')
          <p style="color:red">{{$message}}</p>
        @enderror
    </div>
    <div>
      <label for="password" class="form-label">Confirm password</label>
      <input class="form-control mb-2" type="password" name="password_confirmation">
          @error('password_confirmation')
           <p style="color:red">{{$message}}</p>
          @enderror
    </div>
    <button class="btn btn-primary">Register</button>
  </form>
@endsection