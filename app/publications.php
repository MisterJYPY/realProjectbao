<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publications extends Model
{
    protected $fillable = [
        'intitule', 'description', 'nom', 'statut'
    ];
}
