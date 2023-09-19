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
            $table->boolean('cantrip');
            $table->integer('level');
            $table->string('school')->nullable();
            $table->string('classes')->nullable();
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
