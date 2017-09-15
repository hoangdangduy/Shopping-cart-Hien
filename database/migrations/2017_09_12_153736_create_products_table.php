<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->text('name');                                                   // ten san pham
            $table->text('origin');                                                 // xuat xu
            $table->text('trademark');                                              // thuong hieu
            $table->text('status');                                                 // trang thai
            $table->integer('rating');                                              // danh gia: 9/10
            $table->text('description');                                            // Ghi chu san pham
            $table->text('imageAvatar');                                            // Anh san pham chinh (avatar)
            $table->text('imageInDescription');                                     // Anh san pham trong phan ghi chu
            $table->integer('idCategory')->unsigned();
            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
