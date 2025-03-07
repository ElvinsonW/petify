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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("pet_category_id")->constrained("pet_categories")->onDelete("cascade")->onUpdate("cascade");
            $table->string('name');
            $table->string('breed');
            $table->string("image_1");
            $table->string("image_2")->nullable();
            $table->string("image_3")->nullable();
            $table->enum('gender', ['Male', 'Female']);
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
