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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id')->index();
            $table->integer('range');
            $table->json('cost')->nullable();
            $table->string('damage_dice');
            $table->foreignId('damage_type_id')->constrained();
            $table->integer('weight');
            $table->json('properties');

            $table->foreign('category_id')->references('id')->on('weapon_categories')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
