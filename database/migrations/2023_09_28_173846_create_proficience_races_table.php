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
        Schema::create('proficience_race', function (Blueprint $table) {
            $table->foreignId('proficience_id')->constrained();
            $table->foreignId('race_id')->constrained();
            $table->primary(['proficience_id', 'race_id']);
            $table->unsignedBigInteger('creator_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proficience_races');
    }
};
