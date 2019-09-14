<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    // modele de la table
    protected $table = 'notifications';

    // Ce que je peux récuperer
    protected $fillable = ['id', 'name', 'date', 'notification_message', 'created_at', 'updated_at'];

}
