<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protection contre le mass assignment
    protected $fillable = ['titre', 'extrait', 'categorie', 'contenu' ];

    public function path(){
        return  route('articles.show',$this);
    }

    public function user(){
        //
    }
}
