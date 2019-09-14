<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_Badges extends Model
{
    // modele de la table
    protected $table = 'status_badges';

    // ce que je peux récuperer
    protected $fillable = ['id', 'name', 'created_at', 'updated_at'];

    // creer les liens entre les tables
    public function badges() {
        // cet objet peux appartenir à plusieurs Badges, mais le badges ne peux avoir qu'un seul status (validé ou non)
        return $this->belongToMany('App\Badges');
    }
}
