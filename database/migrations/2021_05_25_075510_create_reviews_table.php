<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('note');
            $table->text('comment');
            $table->uuid('id_user')->nullable();
            $table->string('ref_product');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
            $table->foreign('ref_product')->references('ref_product')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
