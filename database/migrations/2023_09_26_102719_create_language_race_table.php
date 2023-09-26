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
        Schema::create('language_race', function (Blueprint $table) {
            $table->foreignId('language_id')->constrained();
            $table->foreignId('race_id')->constrained();
            $table->primary(['language_id','race_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_race');
    }
};
