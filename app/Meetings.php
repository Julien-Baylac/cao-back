<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    // modele de la table
    protected $table = 'meetings';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'date', 'created_at', 'updated_at'];
}
