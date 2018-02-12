<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles_img extends Model
{

    protected $fillable = [
        'nom', 'url', 'type', 'articles'
    ];
}
