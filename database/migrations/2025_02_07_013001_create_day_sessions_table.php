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
        Schema::create('day_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('day_id')->constrained('days')->onDelete('cascade')->onUpdate('cascade');
            $table->time('time');
            $table->string('title');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_sessions');
    }
};