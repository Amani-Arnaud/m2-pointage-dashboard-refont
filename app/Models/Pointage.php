<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    //
    protected $primaryKey = 'id_pointage';
    public $timestamps = false;

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agents_id_agent');
    }
}
