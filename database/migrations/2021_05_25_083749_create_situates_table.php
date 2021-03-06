<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situates', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->uuid('id_user');
            $table->bigInteger('id_adress')->unsigned();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_adress')->references('id')->on('adresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situates');
    }
}
