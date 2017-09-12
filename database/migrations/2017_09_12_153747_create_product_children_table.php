<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_children', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('name');
            $table->text('code');
            $table->float('price');
            $table->foreign('id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_children');
    }
}
