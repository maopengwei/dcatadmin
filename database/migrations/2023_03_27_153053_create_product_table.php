<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort')->default('99');
            $table->string('introduction')->default('');
            $table->string('pic')->default('');
            $table->string('name')->default('');
            $table->string('cryptocurrencies')->default('');
            $table->string('games')->default('');
            $table->string('sports')->default('');
            $table->string('overall')->default('');
            $table->string('rating')->default('');
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
        Schema::dropIfExists('product');
    }
}
