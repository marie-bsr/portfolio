<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    public $timestamps = false;

    public function articles(){
        return $this->belongsToMany(Article::class);
        //$tag->articles() retourne tous les articles associés à ce tag
    }
}
