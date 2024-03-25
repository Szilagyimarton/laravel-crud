@extends('layout.layout')

@section('content')
@include('layout.search')
<div class="d-flex flex-wrap justify-content-center gap-4">
    @unless(count($books) == 0)
    @foreach ($books as $book)
        <div class="card text-bg-success mb-3" style="max-width: 300px; width:100%">
            <div class="card-header">
                <h1 >{{$book->title}}</h1>
            </div>
            <div class="card-body" style="position: relative">
                <h2 class="card-title mb-2 ">{{$book->author}}</h2>
                <h3 class="card-title mb-2">{{$book->year}}</h3>
                <p class="card-text mb-4">{{$book->description}}</p>
                <a class="card-link" style="position: absolute; bottom:5px; color:white" href="/book/{{$book->id}}">More Info</a>
            </div>
        </div>
    @endforeach
    @else
    <p class="mx-auto">No book found!</p>
    @endunless
</div>
@endsection