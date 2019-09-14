<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Badges extends Model
{
    // modele de la table
    protected $table = 'badges';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'name', 'icon', 'description', 'created_at', 'updated_at'];

}
