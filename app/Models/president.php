<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class president extends Model
{
    protected $table = 'presidents'; // Nombre de la tabla
    protected $primaryKey = 'dni'; // Clave primaria
    public $incrementing = false; // La clave primaria no es autoincremental
    protected $keyType = 'string'; // Tipo de la clave primaria

    protected $fillable = [
        'dni',
        'name',
        'last_name',
        'birth_date',
        'year'
    ];


    //relasion con uno a uno con equipo
    public function team(){
        return $this->hasOne(Team::class, 'president_dni');
    }


}
