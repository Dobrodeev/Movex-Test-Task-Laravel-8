<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorsController extends Controller
{
    public function show()
    {
        /*return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);*/
        return 'AuthorsContoller содержит информацию об авторах, должен обрабатывать след. страницы
Просмотр списка авторов
Добавление / редактирование автора 
Просмотр информации автора';
    }

    public function showAllAuthors()
    {
        $authors = DB::select('SELECT * FROM CreateAuthorssTable');
        return view('welcome', ['authors' => $authors]);
    }

    public function addAuthor($author_name, $birth_year, $rating)
    {
        DB::insert('INSERT INTO CreateAuthorssTable (author_name, birth_year, rating) VALUES (?, ?, ?)',
            [$author_name, $birth_year, $rating]);
    }

    public function updateAuthor($author_name, $birth_year, $rating)
    {
        $affected = DB::update(
            'update CreateAuthorssTable set birth_year = $birth_year where name = ?', [$author_name]
        );
    }

    public function showAuthorInfo($author_name)
    {
        $authors = DB::select('SELECT * FROM CreateAuthorssTable WHERE author_name ?', [$author_name]);
        return view('welcome', ['authors' => $authors]);
    }
}
