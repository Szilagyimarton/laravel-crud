@extends('layout.layout')

@section('content')
<div class="card mx-auto" style="max-width: 500px; width:100% ">
  <div class="card-body">
      <h1 class="card-title">Title: {{$book->title}}</h1>
      <h2 class="card-subtitle mb-2 text-body-secondary">Author: {{$book->author}}</h2>
      <h3 class="card-subtitle mb-2 text-body-secondary">Published: {{$book->year}}</h3>
      <p class="card-text">{{$book->description}}</p>
        <a href="/" class="card-link" style="color: black">Back</a>
      </div>
@endsection