<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->Default('');
            $table->string('last_name')->Default('');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->date('reg_date')->nullable();
            $table->date('res_date')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('file_path')->nullable();
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
        Schema::dropIfExists('Students');
    }
}
