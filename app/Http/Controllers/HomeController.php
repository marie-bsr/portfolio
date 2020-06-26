<?php

namespace App\Http\Controllers;

use App\Models\Article;


class HomeController
{
    public function index()
    {
        $articles = Article::orderBy("created_at","desc")->limit(3)->get();

        return view('welcome', ['articles' => $articles]);
    }

    public function welcome()
    {
        $articles = Article::orderBy("created_at","desc")->limit(3)->get();

        return view('welcome', ['articles' => $articles]);
    }
}
