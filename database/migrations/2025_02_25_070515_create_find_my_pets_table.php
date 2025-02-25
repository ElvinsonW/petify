<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindMyPetsTable extends Migration
{
    public function up()
    {
        Schema::create('find_my_pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('breed');
            $table->string('last_seen');
            $table->date('date_lost');
            $table->string('color');
            $table->string('category_pet');
            $table->string('color_tag');
            $table->string('image');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('find_my_pets');
    }
}
