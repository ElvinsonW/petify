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
        Schema::create('adoption_post_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("pet_category_id")->constrained("pet_categories")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("pet_id")->default(0);
            $table->string("name");
            $table->string("slug");
            $table->string("breed");
            $table->string("location");
            $table->boolean("vaccinated");
            $table->float("weight");
            $table->integer("age");
            $table->enum('gender', ['Male', 'Female']);
            $table->boolean("adoption_status")->default(0);
            $table->string("image_1")->nullable();
            $table->string("image_2")->nullable();
            $table->string("image_3")->nullable();
            $table->text("description");
            $table->text("requirement")->nullable();
            $table->enum('approval_status', ['Pending', 'Accepted', 'Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_post_requests');
    }
};
