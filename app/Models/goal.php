<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goal extends Model
{
    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
