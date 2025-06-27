<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_codigo', 'codigo');
    }

    //relasion con uno a muchos con goles
    public function goals()
    {
        return $this->hasMany(Goal::class, 'player_id');
    }
}
