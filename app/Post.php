<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // in maniera del tutto automatica 
    // la classe parent Model, crea tutte le 
    // proprietà interne alla class Post,
    // che corrispondono alle singole colonne
    // della nostra tabella

    protected $fillable = [ // ridefiniamo come devono essere salvati i dati nel db con update 
        'title',
        'content',
        'img',
        'name',
    ];
}
