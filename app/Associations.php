<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associations extends Model
{
    // modele de la table
    protected $table = 'associations';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'name', 'image', 'description', 'adresse', 'latitude', 'longitude', 'created_at', 'updated_at'];

}
