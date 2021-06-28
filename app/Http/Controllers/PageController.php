<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class PageController extends Controller
{
    public function mypage()
    {
        $blogs = Blogs::paginate(3);
        // вместо get() paginate(20)
        return view('myview', compact('blogs'));
    }
}
