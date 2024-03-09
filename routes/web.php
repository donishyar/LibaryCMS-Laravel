<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('book');
});


Route::get('/category', function () {
    return view('category');
});


Route::get('/author', function () {
    return view('author');
});




// controller

//category
Route::get('/category',[CategoryController::class,'index'] );
Route::post('/category',[CategoryController::class,'store'] );
Route::post('/category/{id}',[CategoryController::class,'destroy']);
Route::get('/category/{id}',[CategoryController::class,'editCategory']);
Route::put('/category{id}',[CategoryController::class,'saveCategory']);
Route::post('/searchCategory',[CategoryController::class,'searchCategory']);


//author
Route::get('/author',[AuthorController::class,'index'] );
Route::post('/author',[AuthorController::class,'store'] );
Route::post('/author/{id}',[AuthorController::class,'destroy']);
Route::get('/author/{id}',[AuthorController::class,'editAuthor']);
Route::put('/author{id}',[AuthorController::class,'saveAuthor']);
Route::post('/searchAuthor',[AuthorController::class,'searchAuthor']);


//book

Route::get('/book',[BookController::class,'index'] );
Route::post('/book',[BookController::class,'store'] );
Route::post('/book/{id}',[BookController::class,'destroy']);
Route::get('/book/{id}',[BookController::class,'editBook']);
Route::put('/book{id}',[BookController::class,'saveBook']);
Route::post('/searchBook',[BookController::class,'searchBook']);