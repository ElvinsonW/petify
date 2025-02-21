<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionRequestForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_requests', function (Blueprint $table) {
            $table->id();
            
            // Menambahkan foreign key user_id yang terhubung dengan users table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('post_id')->constrained('adoption_posts')->onDelete('cascade');
            // Kolom-kolom untuk pertanyaan yang disediakan
            $table->text('Q1'); // Atau bisa menggunakan string jika teks pendek
            $table->text('Q2');
            $table->text('Q3');
            $table->text('Q4');
            $table->text('Q5');

            $table->enum('approval_status',["Pending","Accepted","Rejected"])->default("Pending");
            
            // Kolom timestamp untuk mencatat waktu pembuatan dan pembaruan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoption_requests');
    }
}
