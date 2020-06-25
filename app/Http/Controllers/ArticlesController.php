<?php

namespace App\Http\Controllers;

use App\Models\Article;


class ArticlesController
{
    public function index()
    {

        $articles = Article::orderBy("created_at","desc")->limit(3)->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {

        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
}
