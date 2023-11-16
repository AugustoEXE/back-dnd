<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function creature_types(): BelongsToMany
    {
        return $this->belongsToMany(creature_type::class);
    }
}
