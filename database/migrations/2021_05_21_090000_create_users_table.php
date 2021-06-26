<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email')->unique()->index();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->integer('percentage')->nullable();
            $table->string('ref_role')->default('user')->nullable();
            $table->string('name_wallet')->default('Petit compte');
            $table->string('siret')->nullable();
            $table->boolean('verified_corpo')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('ref_role')->references('ref_role')->on('roles')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('name_wallet')->references('name_wallet')->on('wallets');
            $table->foreign('siret')->references('siret')->on('corporations')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
