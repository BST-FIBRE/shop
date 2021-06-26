<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->string('siret')->primary();
            $table->string('name');
            $table->integer('percentage')->nullable();
            $table->string('domains')->index()->nullable();
            $table->bigInteger('id_adress')->unsigned();
            $table->string('name_wallet')->index();
            $table->timestamps();

            $table->foreign('id_adress')->references('id')->on('adresses');
            $table->foreign('name_wallet')->references('name_wallet')->on('wallets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporations');
    }
}
