<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Show all
Route::get('/',[BookController::class, 'index']);
//Add new form
Route::get('/book/create', [BookController::class, 'create'])->middleware('auth');
//Manage user's books

Route::get('/book/manage',[BookController::class, 'manage'])->middleware('auth');
//Show one
Route::get('/book/{book}',  [BookController::class, 'show']);
//Save new to database
Route::post('/book',  [BookController::class, 'store'])->middleware('auth');
//Show edit form
Route::get('/book/{book}/edit',[BookController::class, 'edit'])->middleware('auth');
//Update edited book
Route::put('/book/{book}',[BookController::class, 'update'])->middleware('auth');

//Destroy
Route::delete('/book/{book}', [BookController::class, 'destroy'])->middleware('auth');

//Show register
Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//Add new user

Route::post('/users',[UserController::class, 'store']);

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login

Route::post('/authenticate', [UserController::class, 'authenticate']);


//Logout

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

