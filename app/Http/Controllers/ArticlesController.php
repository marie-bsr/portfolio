<?php

namespace App\Http\Controllers;

use App\Models\Article;


class ArticlesController extends Controller
{
    public function index()
    {
        //retourne la liste des articles
        $articles = Article::orderBy("created_at", "desc")->limit(3)->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    //retourne un seul article
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        //enregistre ce nouvel article
        //dump(request()->all());
        $validatedAttributes = request()->validate([
            'titre' => 'required',
            'categorie' => 'required',
            'extrait' => 'required',
            'contenu' => 'required'
        ]);

        Article::create($validatedAttributes);
        return redirect('/blog');
    }


    public function edit(Article $article)
    {
        //affiche une view pour éditer un article

        return view('articles.edit', ['article' => $article]);
    }



    public function update(Article $article)
    {
        //enregistre l'article édité
        $validatedAttributes = request()->validate([
            'titre' => 'required',
            'categorie' => 'required',
            'extrait' => 'required',
            'contenu' => 'required'
        ]);

        $article->update($validatedAttributes);

        return redirect($article->path());
    }
    public function destroy()
    {
        //supprime l'article
    }
}
