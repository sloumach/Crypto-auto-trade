<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigInteger('id')->unique()->autoIncrement();
            $table->bigInteger('id_client');
            $table
                ->foreign('id_client')
                ->references('id')
                ->on('users');
            $table->integer('duration');
            $table->integer('range_trade');
            $table->string('crypto');
            $table->integer('status')->default('0');
            $table->float('income')->default('0');
            $table->float('profit')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
