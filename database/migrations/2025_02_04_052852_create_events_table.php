<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade'); 
        $table->foreignId('event_category_id')->constrained('article_event_categories')->onDelete('cascade')->onUpdate('cascade'); 
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('location');
        $table->integer('ticket');
        $table->date('start_date');
        $table->date('end_date');
        $table->text('image');
        $table->text('description');
        $table->enum('approval_status', ['Pending', 'Accepted', 'Rejected'])->default('Pending');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }

    

};