<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class creature_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function Creature(): BelongsToMany
    {
        return $this->belongsToMany(Creature::class);
    }
}
