<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $fillable = [
        'intitule', 'description', 'categories', 'lienImage', 'priorite', 'statut'
    ];

    public function categories()
    {
        return $this->belongsTo(\App\categories::class);
    }

}
