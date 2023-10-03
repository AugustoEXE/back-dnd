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
        Schema::create('creatures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('size');
            $table->json('armor_class');
            $table->integer('hit_points');
            $table->string('hit_dice');
            $table->string('speed');
            $table->integer("strength");
            $table->integer("dexterity");
            $table->integer("constitution");
            $table->integer("intelligence");
            $table->integer("wisdom");
            $table->integer("charisma");
            $table->json('proficiencies');
            $table->integer('passive_perception');
            $table->string('languages');
            $table->text('special_abilities');
            $table->unsignedBigInteger('creator_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creatures');
    }
};

