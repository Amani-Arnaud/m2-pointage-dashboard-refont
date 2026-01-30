<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    //
    protected $table = 'parametres';

    protected $primaryKey = 'id_parametre';

    public $timestamps = false;

    protected $fillable = [
        'nom_entreprise',
        'heure_arrivee',
        'heure_depart',
        'marge_arrivee',
        'latitude_entreprise',
        'longitude_entreprise',
        'rayon',
        'updated_at'
    ];
}
