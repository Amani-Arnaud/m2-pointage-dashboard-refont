<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $primaryKey = 'id_agent';
    public $timestamps = false;

    protected $fillable = [
        'Nom', 'Prenom', 'Matricule', 'date_naissance', 'sexe',
        'nationalite', 'parcours', 'grade', 'mot_de_passe',
        'categorie', 'email', 'date_entree'
    ];

    public function absences()
    {
        return $this->hasMany(Absence::class, 'agents_id_agent');
    }

    public function pointages()
    {
        return $this->hasMany(Pointage::class, 'agents_id_agent');
    }

    public function statistiques()
    {
        return $this->hasMany(Statistique::class, 'agents_id_agent');
    }
}
