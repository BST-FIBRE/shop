<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_user');
            $table->bigInteger('id_adress')->unsigned()->nullable();
            $table->bigInteger('id_suborder')->unsigned()->nullable();
            $table->string('ref_bill')->nullable();
            $table->integer('status')->default(0);
            $table->boolean('closed')->default(false);
            $table->boolean('canceled')->default(false);
            $table->boolean('paid')->default(false);
            $table->integer('total_ht');
            $table->integer('total_ttc');
            $table->date('ordered_at')->nullable();
            $table->string('ref_relay')->nullable();
            $table->string('ref_store')->nullable();
            $table->timestamps();

            $table->foreign('id_adress')->references('id')->on('adresses')->onDelete('set null')->onUpdate('set null');
            $table->foreign('id_suborder')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ref_bill')->references('ref_bill')->on('bills')->onDelete('set null')->onUpdate('set null');
            $table->foreign('ref_relay')->references('ref_point')->on('relay_points')->onDelete('set null')->onUpdate('set null');
            $table->foreign('ref_store')->references('ref_point')->on('store_points')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
