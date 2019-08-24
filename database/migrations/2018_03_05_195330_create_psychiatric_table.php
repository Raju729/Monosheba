<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychiatricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychiatrics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city',20);
            $table->string('name',50);
            $table->string('phone_no',20);
            $table->string('speciality',100);
            $table->string('joblocation',100);
            $table->string('designation',100);
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
        Schema::dropIfExists('psychiatrics');
    }
}
