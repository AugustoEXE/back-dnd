<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'range',
        'cost',
        'damage_dice',
        'damage_type_id',
        'weight',
        'properties',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(WeaponCategory::class, 'category_id');
    }
    public function damageType(): BelongsTo
    {
        return $this->belongsTo(damage_type::class, 'damage_type_id');
    }
}
