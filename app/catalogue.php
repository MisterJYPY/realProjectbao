<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalogue extends Model
{
    protected $fillable = [
        'statut', 'url', 'description', 'rubrique'
    ];
}
