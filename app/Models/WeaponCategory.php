<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeaponCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function weapon():HasMany
    {
        return $this->hasMany(Weapon::class, 'category_id');
    }
}
