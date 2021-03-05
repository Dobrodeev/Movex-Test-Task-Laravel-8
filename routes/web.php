<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/authors', function () {
    return 'AuthorsContoller содержит информацию об авторах, должен обрабатывать след. страницы
Просмотр списка авторов
Добавление / редактирование автора 
Просмотр информации автора
';
});
Route::get('/books', function () {
    return 'BooksController
Просмотр списка всех книг
Добавление / редактирование книги
Просмотр информации о книги
';
});
