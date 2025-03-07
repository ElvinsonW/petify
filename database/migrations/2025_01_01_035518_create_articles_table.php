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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->foreignId("user_id")->constrained('users')->onDelete('cascade')->onUpdate("cascade");
            $table->foreignId("article_category_id")->constrained('article_event_categories')->onDelete('cascade')->onUpdate("cascade");
            $table->text("content");
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
