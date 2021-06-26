<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoldOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hold_ons', function (Blueprint $table) {
            $table->string('name_category');
            $table->bigInteger('id_familly')->unsigned();

            $table->foreign('name_category')->references('name')->on('categories')->onDelete('cascade');
            $table->foreign('id_familly')->references('id')->on('famillies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hold_ons');
    }
}
