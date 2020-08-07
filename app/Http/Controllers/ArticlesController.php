<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as InterventionImage;

class ArticlesController extends Controller
{
    public function index()
    {
        //si l'url continet un tag, on affiche les articles contenant ce tag
        if (request('tag')) {
            //ci-dessous ne marche pas avec pagination
            // $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles()->paginate(3);
        } else {
            //retourne la liste des articles
            //$articles = Article::orderBy("created_at", "desc")->limit(6)->get();
            //$articles = Article::withTrashed()->paginate(3);
            $articles = Article::orderBy("created_at", "desc")->paginate(3);
        }
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Affiche le contenu d'un article
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        $lastArticles = Article::orderBy("created_at", "desc")->limit(6)->get();
        return view('articles.show', compact('article', 'lastArticles'));
    }

    public function create()
    {
        //on a besoin de variables tags et categories pour les afficher tous
        return view('articles.create', [
            'tags' => Tag::all(),
            'categories' => Category::all()
        ]);
    }

    public function store(StoreArticleRequest $request)
    {
        $request->merge(['user_id' => 1]);

        if ($request->file('image')) {
            $imageUrl = $this->saveImages($request);
            $request->merge(['image_url' => $imageUrl]);
        }

        $article = Article::create($request->except('image'));
        $article->tags()->attach(request('tags'));
        return redirect('/blog');
    }

    protected function saveImages($request)
    {
        $image = $request->file('image');
        // Make a image name based on user name and current timestamp
        $name = Str::slug($request->input('titre')) . '_' . time();
        // Define folder path
        $folder = '/uploads/';
        // Make a file path where image will be stored [ folder path + file name + file extension]

        $path = $folder . $name . '.' . $image->getClientOriginalExtension();
        $img = InterventionImage::make($image->path());
        $img->widen(800)->encode();

        Storage::disk('public')->putFileAs($folder, $image, $name, 'private');

        return $path;
    }

    public function edit(Article $article)
    {
        //affiche une view pour éditer un article

        return view('articles.edit', [
            'article' => $article,
            'tags' => Tag::all(),
            'categories' => Category::all()
        ]);
    }


    public function update(Article $article)
    {
        //enregistre l'article édité

        $article->update();

        return redirect($article->path());
    }

    public function destroy(Article $article)
    {
        //supprime l'article

        $article->delete();

        //il faudrait ajouter une confirmation
        return redirect('/blog')->with('info', 'L article a bien été archivé dans la base de données.');
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
