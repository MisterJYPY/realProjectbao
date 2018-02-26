<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galerie extends Model
{
    protected $fillable = [
        'intitule', 'description', 'lienPhoto', 'priorite', 'statut', 'categories'
    ];

    public function categories()
    {
        return $this->belongsTo(\App\categories::class);
    }
}
