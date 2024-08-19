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
        Schema::create('room-days', function (Blueprint $table) {
            $table->id();
            $table->string('start-time');
            $table->string('end-time');
            $table->foreignId('room-id')->constrained('rooms')->cascadeOnDelete();
            $table->foreignId('days-id')->constrained('days')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room-days');
    }
};
