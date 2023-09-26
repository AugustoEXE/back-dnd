<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'weight',
        'type',
        'AC',
        'property',
        'rarity_id',
    ];

    public function rarities(): BelongsTo
    {
        return $this->belongsTo(Rarity::class, 'rarity_id');
    }
}
