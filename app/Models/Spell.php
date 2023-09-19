<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'range',
        'casting_time',
        'components',
        'duration',
        'damage',
        'cantrip',
        'level',
        'school',
        'classes'
    ];
}
