<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spell extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'range',
        'casting_time',
        'damage_type_id',
        'components',
        'duration',
        'damage',
        'cantrip',
        'level',
        'school',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function magic_school(): BelongsToMany
    {
        return $this->belongsToMany(magic_school::class, 'magic_school_spell', 'spell_id', 'magic_school_id');
    }

    public function class (): BelongsToMany
    {
        return $this->belongsToMany(classes::class,'classes_spell', 'spell_id', 'class_id');
    }

    public function damageType(): BelongsTo
    {
        return $this->belongsTo(damage_type::class, 'damage_type_id');
    }

}
