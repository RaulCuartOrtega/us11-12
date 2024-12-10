<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dam extends Model
{
    protected $fillable = [
        'name',
        'airline',
        'type',
    ];
}
