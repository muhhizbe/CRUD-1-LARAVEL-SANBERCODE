<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');;
            $table->string('judul');
            $table->string('isi');
            $table->timestamps();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->integer('vote')->nullable();
            $table->foreignId('jawaban_tepat_id');

            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('jawaban_tepat_id')->references('id')->on('jawabans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaans');
    }
}
