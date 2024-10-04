<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_name',
        'classes_id',
        'level',
        'background',
        'player_name',
        'race_id',
        'alignment',
        'XP',
        'inspiration',
        'proficience_bonus',
        'armor_class',
        'initiative',
        'max_HP',
        'current_HP',
        'temporary_HP',
        'speed',
        'total_hit_dice',
        'current_hit_dice',
        'strength_points',
        'strength_modifier',
        'dexterity_points',
        'dexterity_modifier',
        'constitution_points',
        'constitution_modifier',
        'intelligence_points',
        'intelligence_modifier',
        'wisdom_points',
        'wisdom_modifier',
        'charisma_points',
        'charisma_modifier',
        'strength_saving_throw',
        'dexterity_saving_throw',
        'constitution_saving_throw',
        'intelligence_saving_throw',
        'wisdom_saving_throw',
        'charisma_saving_throw',
        'acrobatics_skill',
        'animal_handling_skill',
        'arcana_skill',
        'athletics_skill',
        'deception_skill',
        'history_skill',
        'insight_skill',
        'intimidation_skill',
        'investigation_skill',
        'medicine_skill',
        'nature_skill',
        'perception_skill',
        'performance_skill',
        'persuasion_skill',
        'religion_skill',
        'sleight_of_hand_skill',
        'stealth_skill',
        'survival_skill',
        'death_saves',
        'attacks_spellcasting',
        'CP',
        'SP',
        'EP',
        'GP',
        'PP',
        'personality_traits',
        'ideals',
        'bonds',
        'flaws',
        'features_traits',
        'age',
        'height',
        'weight',
        'eyes',
        'skin',
        'hair',
        'appearance',
        'allies_organizations',
        'character_backstory',
        'additional_features_traits',
        'treasure',
        'spellcasting_class',
        'spellcasting_ability',
        'spell_save_dc',
        'spell_attack_bonus',
        'first_level',
        'second_level',
        'third_level',
        'fourth_level',
        'fifth_level',
        'sixth_level',
        'seventh_level',
        'eighth_level',
        'ninth_level',
    ];

    public function race(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }
}
