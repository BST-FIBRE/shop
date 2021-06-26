<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTieInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tie_ins', function (Blueprint $table) {
            $table->bigInteger('id_discount')->unsigned();
            $table->string('name_category');

            $table->foreign('id_discount')->references('id')->on('discounts');
            $table->foreign('name_category')->references('name')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tie_ins');
    }
}
