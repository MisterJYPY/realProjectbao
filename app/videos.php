<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    protected $fillable = [
        'intitule', 'description', 'lien', 'statut','priorite'
    ];
}
