<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class magic_school extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function spell(): BelongsToMany
    {
        return $this->belongsToMany(Spell::class, 'magic_school_spell', 'spell_id', 'magic_school_id');
    }
}
