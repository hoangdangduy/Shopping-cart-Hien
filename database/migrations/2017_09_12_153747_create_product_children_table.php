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
            $table->text('name');                                                           // ten hang, quy cach
            $table->text('code');                                                           // ma hang
            $table->text('unit');                                                           // don vi tinh
            $table->float('price');                                                         // don gia
            $table->text('packing');                                                        // dong goi
            $table->integer('idProduct')->unsigned();
            $table->foreign('idProduct')->references('id')->on('products');
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
