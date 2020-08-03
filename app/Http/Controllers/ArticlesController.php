<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    public function index()
    {
        //si l'url continet un tag, on affiche les articles contenant ce tag
        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;

        } else{
//retourne la liste des articles
//$articles = Article::orderBy("created_at", "desc")->limit(6)->get();
//$articles = Article::withTrashed()->paginate(3);
$articles = Article::orderBy("created_at", "desc")->paginate(3);

        }


        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    //retourne un seul article
    {

        return view('articles.show', [
        //  'article' => $article::withTrashed()->first(),
        'article' => $article,
'lastArticles' => Article::orderBy("created_at", "desc")->limit(6)->get(),


            ]);
    }

    public function create()
    {
//on a besoin de variables tags et categories pour les afficher tous
        return view('articles.create',[
            'tags' => Tag::all(),
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        //enregistre ce nouvel article
        //dump(request()->all());
        $this->validateArticle();
        $article = new Article(request(['titre',
        'extrait',
        'contenu',
        'image'

        ]));

       // $article->image->store(config('images.path'), 'public');



        $article->user_id =1;
        $article->save();
        $article->tags()->attach(request('tags'));
        return redirect('/blog');
    }



    public function edit(Article $article)
    {
        //affiche une view pour éditer un article

        return view('articles.edit', ['article' => $article,
        'tags' => Tag::all(),
        'categories' => Category::all()]
    );
    }



    public function update(Article $article)
    {
        //enregistre l'article édité

        $article->update($this->validateArticle());

        return redirect($article->path());
    }
    public function destroy(Article $article)
    {
        //supprime l'article

    $article->delete();

//il faudrait ajouter une confirmation
        return redirect('/blog')->with('info', 'L article a bien été archivé dans la base de données.');

    }

    protected function validateArticle(){
        return request()->validate([
            'titre' => 'required',

            'extrait' => 'required',
            'contenu' => 'required',
            'tags' =>'exists:tags,id',
           // 'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
        ]);
    }

    public function forceDestroy($id)
{
    Article::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
    return redirect('/blog')->with('info', "L'article a bien été supprimé définitivement dans la base de données.");
}
public function restore($id)
{
    Article::withTrashed()->whereId($id)->firstOrFail()->restore();
    return redirect('/blog')->with('info', "L'article a bien été restauré.");
}



}
