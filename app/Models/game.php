<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    public function teams(){
        return $this->belongsToMany(Team::class, 'team_game', 'game_id', 'team_id');
    }
}
