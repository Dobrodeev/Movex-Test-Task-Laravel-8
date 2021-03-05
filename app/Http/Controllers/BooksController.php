<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show($id = '')
    {
        return 'BooksController
Просмотр списка всех книг
Добавление / редактирование книги
Просмотр информации о книги
';
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
