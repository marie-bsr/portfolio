<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    public function index()
    {
        //si l'url continet un tag, on affiche les articles contenant ce tag
        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;

        } else{
//retourne la liste des articles
$articles = Article::orderBy("created_at", "desc")->limit(3)->get();
        }


        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    //retourne un seul article
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {

        return view('articles.create',[
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        //enregistre ce nouvel article
        //dump(request()->all());
        $this->validateArticle();
        $article = new Article(request(['titre','extrait','contenu']));
        $article->user_id =1;
        $article->save();

        $article->tags()->attach(request('tags'));
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

        $article->update($this->validateArticle());

        return redirect($article->path());
    }
    public function destroy()
    {
        //supprime l'article
    }

    protected function validateArticle(){
        return request()->validate([
            'titre' => 'required',

            'extrait' => 'required',
            'contenu' => 'required',
            'tags' =>'exists:tags,id'
        ]);
    }
}
