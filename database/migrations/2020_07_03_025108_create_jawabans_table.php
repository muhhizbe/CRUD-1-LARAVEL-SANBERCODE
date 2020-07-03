<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertanyaan_id')->constrained('pertanyaans')->onDelete('cascade');;
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');;
            $table->string('isi');
            $table->timestamps();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->integer('vote')->nullable();

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('pertanyaan_id')->references('id')->on('pertanyaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawabans');
    }
}
