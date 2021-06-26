<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDedicatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedicates', function (Blueprint $table) {
            $table->bigInteger('id_discount')->unsigned();
            $table->string('siret');

            $table->foreign('siret')->references('siret')->on('corporations');
            $table->foreign('id_discount')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedicates');
    }
}
