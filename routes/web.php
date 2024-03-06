<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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




// controllers


Route::get('/category',[CategoryController::class,'index'] );
Route::post('/category',[CategoryController::class,'store'] );
