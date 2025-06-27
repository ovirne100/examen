<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class president extends Model
{

    //relasion con uno a uno con equipo
    public function team(){
        return $this->hasOne(Team::class, 'president_dni');
    }


}
