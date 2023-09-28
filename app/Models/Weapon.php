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
        'damage_type',
        'weight',
        'properties',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(WeaponCategory::class, 'category_id');
    }
}
