<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class damage_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'form_of_damage'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function spell(): HasMany
    {
        return $this->hasMany(Spell::class, 'damage_type_id');
    }

    public function weapon(): HasMany
    {
        return $this->hasMany(Weapon::class, 'damage_type_id');
    }

}

