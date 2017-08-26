<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudioLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('audio_lectures', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->Default('');
          $table->string('description')->Default('');
          $table->string('file_path')->Default('');
          $table->Date('date');
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
      Schema::dropIfExists('audio_lectures');

    }
}
