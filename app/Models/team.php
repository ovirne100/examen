<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    //relasion con uno a muchos con jugadores
    public function players(){
        return $this->hasmany(Player::class,'team_codigo');
    }

    //relasion con uno a uno con presidente
public function president(){
    return $this->belongsTo(President::class, 'president_dni');
}

//relasion con muchos a muchos con partidos
public function game(){
    return $this->belongsToMany(game::class, 'team_game', 'team_codigo', 'game_id');
}
}
