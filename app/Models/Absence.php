<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    //
    protected $primaryKey = 'id_absence';
    public $timestamps = false;

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agents_id_agent');
    }
}
