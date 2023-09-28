<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Proficience extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'attribute'
    ];

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(Classes::class);
    }
}
