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
        Schema::create('find_my_pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('breed');
            $table->string('last_seen');
            $table->date('date_lost');
            $table->string('color');
            $table->foreignId('pet_category_id')->constrained('pet_categories')->onDelete('cascade')->onUpdate('cascade'); // Correct foreign key to pet_categories
            $table->string('color_tag');
            $table->string('image');
            $table->text('description');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
