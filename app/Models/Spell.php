<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spell extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'range',
        'casting_time',
        'damage_type',
        'components',
        'duration',
        'damage',
        'cantrip',
        'level',
        'school',
        'classes'
    ];

    public function magic_school(): BelongsToMany
    {
        return $this->belongsToMany(magic_school::class, 'magic_school_spell', 'spell_id', 'magic_school_id');
    }

}
