<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->string('character_name');
            $table->foreignId('classes_id')->constrained();
            $table->integer('level');
            $table->string('background');
            $table->string('player_name');
            $table->foreignId('race_id')->constrained();
            $table->string('alignment');
            $table->integer('XP')->nullable();
            $table->boolean('inspiration')->default(false);
            $table->integer('proficience_bonus');
            $table->integer('armor_class');
            $table->integer('initiative');
            $table->integer('max_HP');
            $table->integer('current_HP');
            $table->integer('temporary_HP')->default(0)->nullable();
            $table->float('speed');
            $table->string('total_hit_dice');
            $table->string('current_hit_dice');
            $table->int('strength_points');
            $table->int('strength_modifier');
            $table->int('dexterity_points');
            $table->int('dexterity_points');
            $table->int('constitution_modifier');
            $table->int('constitution_modifier');
            $table->int('intelligence_modifier');
            $table->int('intelligence_modifier');
            $table->int('wisdom_modifier');
            $table->int('wisdom_modifier');
            $table->int('charisma_modifier');
            $table->int('charisma_modifier');
            $table->integer('strength_saving_throw')->nullable();
            $table->integer('dexterity_saving_throw')->nullable();
            $table->integer('constitution_saving_throw')->nullable();
            $table->integer('intelligence_saving_throw')->nullable();
            $table->integer('wisdom_saving_throw')->nullable();
            $table->integer('charisma_saving_throw')->nullable();
            $table->integer('acrobatics_skill')->nullable();
            $table->integer('animal_handling_skill')->nullable();
            $table->integer('arcana_skill')->nullable();
            $table->integer('athletics_skill')->nullable();
            $table->integer('deception_skill')->nullable();
            $table->integer('history_skill')->nullable();
            $table->integer('insight_skill')->nullable();
            $table->integer('intimidation_skill')->nullable();
            $table->integer('investigation_skill')->nullable();
            $table->integer('medicine_skill')->nullable();
            $table->integer('nature_skill')->nullable();
            $table->integer('perception_skill')->nullable();
            $table->integer('performance_skill')->nullable();
            $table->integer('persuasion_skill')->nullable();
            $table->integer('religion_skill')->nullable();
            $table->integer('sleight_of_hand_skill')->nullable();
            $table->integer('stealth_skill')->nullable();
            $table->integer('survival_skill')->nullable();
            $table->string('death_saves');
            $table->string('attacks_spellcasting');
            $table->integer('CP');
            $table->integer('SP');
            $table->integer('EP');
            $table->integer('GP');
            $table->integer('PP');
            $table->string('personality_taits');
            $table->string('ideals');
            $table->string('bonds');
            $table->string('flaws');
            $table->string('features_traits');
            $table->integer('age');
            $table->float('height');
            $table->float('weight');
            $table->string('eyes');
            $table->string('skin');
            $table->string('hair');
            $table->string('appearance');
            $table->string('allies_organizations');
            $table->string('character_backstory');
            $table->string('aditional_features_traits');
            $table->string('treasure');
            $table->string('spellcasting_class');
            $table->string('spellcasting_ability');
            $table->integer('spell_save_dc');
            $table->integer('spell_attack_bonus');
            $table->json('first_level');
            $table->json('second_level');
            $table->json('third_level');
            $table->json('fourth_level');
            $table->json('fifth_level');
            $table->json('sixth_level');
            $table->json('seventh_level');
            $table->json('eighth_level');
            $table->json('ninth_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
