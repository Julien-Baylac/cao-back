<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birdhouses extends Model
{
    // modele de la table
    protected $table = 'birdhouses';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'name', 'image', 'description', 'id_type','adresse', 'latitude', 'longitude', 'created_at', 'updated_at'];

    // creer les liens entre les tables
    public function types_birdhouses() {
        // Cet objet a 1 type
        return $this->hasOne('App\Type_Birdhouses');
    }
}

