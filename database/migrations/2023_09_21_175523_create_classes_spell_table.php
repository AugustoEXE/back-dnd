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
        Schema::create('classes_spell', function (Blueprint $table) {
            $table->foreignId('spell_id')->constrained();
            $table->foreignId('class_id')->constrained();
            $table->primary(['spell_id', 'class_id']);
            $table->unsignedBigInteger('creator_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes_spell');
    }
};
