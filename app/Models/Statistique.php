<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistique extends Model
{
    //
    protected $primaryKey = 'id_statistique';
    public $timestamps = false;

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agents_id_agent');
    }
}
