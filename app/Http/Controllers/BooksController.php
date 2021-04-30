<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show($id = '')
    {
        /*return 'BooksController
Просмотр списка всех книг
Добавление / редактирование книги
Просмотр информации о книги
';*/
        $text = 'BooksController
Просмотр списка всех книг
Добавление / редактирование книги
Просмотр информации о книги';
        return view('welcome', ['text' => $text]);
    }

    public function showAllBooks()
    {

    }

    public function addNewBook()
    {

    }

    public function updateBook()
    {

    }

    public function showBookInfo()
    {

    }
}
