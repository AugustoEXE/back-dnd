<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Race extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'speed',
        'ability_bonuses',
        'alignment',
        'size',
        'languages',
        'traits',
        'subraces',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function languages ():BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    public function proficiencies ():BelongsToMany
    {
        return $this->belongsToMany(Proficience::class);
    }


}
