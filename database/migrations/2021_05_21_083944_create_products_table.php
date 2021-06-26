<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('ref_product')->primary();
            $table->text('name');
            $table->text('description');
            $table->text('characteristic');
            $table->text('tech_review');
            $table->boolean('inStock');
            $table->boolean('occasion');
            $table->date('restock_at')->nullable();
            $table->integer('quantity');
            $table->string('name_category')->nullable();
            $table->timestamps();

            $table->foreign('name_category')->references('name')->on('categories')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
