<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'size',
        'type',
        'armor_class',
        'hit_points',
        'hit_dice',
        'speed',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
        'wisdom',
        'charisma',
        'proficiencies',
        'passive_perception',
        'languages',
        'special_abilities',
    ];
}
