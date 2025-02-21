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
        Schema::create('adoption_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("pet_id")->constrained("pets")->onDelete("cascade")->onUpdate("cascade");
            $table->string("name");
            $table->string("slug");
            $table->string("location");
            $table->boolean("vaccinated");
            $table->float("weight");
            $table->integer("age");
            $table->boolean("status")->default(0);
            $table->text("description");
            $table->text("requirement")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_posts');
    }
};
