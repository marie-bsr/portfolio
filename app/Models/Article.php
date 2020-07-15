<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protection contre le mass assignment
    protected $fillable = ['titre', 'extrait', 'categorie', 'contenu', 'user_id'];

    public function path(){
        return  route('articles.show',$this);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    //même chose que user mais cela fait plus de sens
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
        //$article->tags() retourne tous les tags associés à cet article
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
