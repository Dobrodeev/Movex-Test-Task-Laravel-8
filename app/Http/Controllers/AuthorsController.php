<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

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
}
