<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilliesDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famillies_discounts', function (Blueprint $table) {
            $table->bigInteger('id_family')->unsigned()->index();
            $table->bigInteger('id_discount')->unsigned()->index();

            $table->foreign('id_family')->references('id')->on('famillies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_discount')->references('id')->on('discounts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('famillies_discounts');
    }
}
