<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types_Birdhouses extends Model
{
    // modele de la table
    protected $table = 'types_birdhouses';

    // ce que je peux récuperer
    protected $fillable = ['id', 'name', 'icon', 'created_at', 'updated_at'];

    // creer les liens entre les tables
    public function birdhouses() {
        // cet objet peux appartenir à plusieurs cabanes à oiseaux, mais la cabane à oiseaux ne peux avoir qu'un seul type
        return $this->belongToMany('App\Birdhouses');
    }
}
