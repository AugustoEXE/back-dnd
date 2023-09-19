<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'range',
        'cost',
        'damage_dice',
        'damage_type',
        'weight',
        'properties',
    ];

}
