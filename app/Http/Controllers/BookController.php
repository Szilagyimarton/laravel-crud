<?php

namespace App\Http\Controllers;

use App\Models\Book;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('books.index',[
            'books' => Book::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Book $book){
        return view('books.show',[
            'book' => $book
        ]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $userId = auth()->id();
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required' ,
            'year' => ['required', 'integer']
        ]);

        $formFields['user_id'] = $userId;
        Book::create($formFields);
        return redirect("/")->with('success', $formFields['title']  . " is added to database!");
    }

    public function edit(Book $book){
        return view('books.edit',[
            'book' => $book
        ]);
    }

    public function update(Request $request, Book $book){
        //Logged in user is ownre?
        if($book->user_id != auth()->id()){
            abort(403,'Unauthorized action!');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required' ,
            'year' => ['required', 'integer']
        ]);
        $book->update($formFields);
        return redirect("/")->with('success', 'Edited data is saved!');
    }

    public function destroy(Book $book){
          //Logged in user is owner?
          if($book->user_id != auth()->id()){
            abort(403,'Unauthorized action!');
        }

        $book->delete();
        return redirect('/')->with('success', "$book->title ". 'is deleted! ');
    }

    public function manage(){
       
        return view('books.manage',[
            'books' => auth()->user()->book()->get()
        ]);
    }
}
