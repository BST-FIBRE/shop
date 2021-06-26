<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggings', function (Blueprint $table) {
            $table->string('ref_product');
            $table->string('name_tag');

            $table->foreign('ref_product')->references('ref_product')->on('products')->onDelete('cascade');
            $table->foreign('name_tag')->references('name_tag')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggings');
    }
}
