<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dam1 extends Model
{
    protected $table = 'modulos';
    protected $fillable = [
        'curso',
        'modulo',
        'descripcion',
        'nHoras'
    ];
    public $timestamps = false;
}
