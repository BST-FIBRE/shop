<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_lines', function (Blueprint $table) {
            $table->id();
            $table->string('ref_bill')->index();
            $table->integer('amount');
            $table->text('description');

            $table->foreign('ref_bill')->references('ref_bill')->on('bills')->onDelete('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_lines');
    }
}
