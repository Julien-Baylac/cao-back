<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    // modele de la table
    protected $table = 'cities';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'name', 'zip_code', 'created_at', 'updated_at'];
}
