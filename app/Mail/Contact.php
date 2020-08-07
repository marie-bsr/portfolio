<?php

namespace App\Mail;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
      * The attributes that are mass assignable.
      *fillable = tout ce qui doit passer dans la requete
      *garded = tout ce qui ne passe pas
      *
      * @var array
      */
     protected $fillable = [
         'name', 'email','secteur', 'mobile_number', 'message','sites','started'
     ];
}
