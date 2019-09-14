<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    // modele de la table
    protected $table = 'messages';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'message', 'created_at', 'updated_at'];
}
