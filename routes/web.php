<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
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
    return view('library');
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
