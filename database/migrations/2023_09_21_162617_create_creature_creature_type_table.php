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
        Schema::create('creature_creature_type', function (Blueprint $table) {
            $table->foreignId('creature_id')->constrained();
            $table->foreignId('creature_type_id')->constrained();
            $table->primary(['creature_id', 'creature_type_id']);
            $table->unsignedBigInteger('creator_id')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creature_creature_type');
    }
};
