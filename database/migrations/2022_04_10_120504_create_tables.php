<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
        });

        Schema::create('flvs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('quantidade');
        });
        Schema::create('mers', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('flvs');
        Schema::dropIfExists('mers');
        Schema::dropIfExists('links');
    }
};
