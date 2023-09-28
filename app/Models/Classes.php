<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hit_dice',
        'proficiencies',
        'saving_throws',
    ];

    public function spells():BelongsToMany
    {
        return $this->belongsToMany(spell::class);
    }

    public function proficiencies():BelongsToMany
    {
        return $this->belongsToMany(Proficience::class);
    }

    public function startingEquipment():BelongsToMany
    {
        return $this->belongsToMany(Item::class);
    }

}
