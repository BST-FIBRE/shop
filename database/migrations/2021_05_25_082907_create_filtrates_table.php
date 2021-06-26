<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtrates', function (Blueprint $table) {
            $table->string('ref_product')->index();
            $table->string('filter')->index();
            $table->string('product_value');

            $table->foreign('ref_product')->references('ref_product')->on('products')->onDelete('cascade');
            $table->foreign('filter')->references('name')->on('filters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filtrates');
    }
}
