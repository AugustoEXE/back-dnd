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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->unsignedBigInteger('rarity_id')->index();
            $table->text('description')->nullable();
            $table->string('price');
            $table->float('weight');
            $table->enum('type', ['item', 'armor', 'magic_item']);
            $table->integer('AC');
            $table->string('property');
            $table->foreign('rarity_id')->references('id')->on('rarities')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
