<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sees', function (Blueprint $table) {
            $table->id();
            $table->string('ref_product');
            $table->uuid('id_user');
            $table->integer('duration');
            $table->boolean('details');

            $table->foreign('ref_product')->references('ref_product')->on('products')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sees');
    }
}
