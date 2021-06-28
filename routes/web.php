<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/authors', 'App\Http\Controllers\AuthorsController@show');
Route::get('/books', 'App\Http\Controllers\BooksController@show');*/
Route::get('/authors', [AuthorsController::class, 'show']);
Route::get('/mypage', [PageController::class, 'mypage']);
Route::get('/books', [BooksController::class, 'show']);
