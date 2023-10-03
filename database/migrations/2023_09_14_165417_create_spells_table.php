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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('range');
            $table->string('casting_time')->nullable();
            $table->string('components')->nullable();
            $table->string('duration');
            $table->string('damage');
            $table->foreignId('damage_type_id')->constrained();
            $table->boolean('cantrip');
            $table->integer('level');
            $table->unsignedBigInteger('creator_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
