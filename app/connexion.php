<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class connexion extends Model
{
    protected $fillable = [
        'ip', 'fin','code'
    ];
}
