<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produces', function (Blueprint $table) {
            $table->string('ref_product')->index();
            $table->string('providers')->index();
            $table->integer('cost_ht');
            $table->integer('cost_ttc');

            $table->foreign('ref_product')->references('ref_product')->on('products')->onDelete('cascade');
            $table->foreign('providers')->references('siret_providers')->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produces');
    }
}
