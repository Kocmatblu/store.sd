<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->bigIncrements('product_id');
            $table->char('category_id');
            $table->char('product_name');
            $table->char('product_brand');
            $table->text('product_description');
            $table->integer('product_price');
            $table->char('product_size');
            $table->char('product_color');
            $table->text('images_path');
            $table->integer('product_rating');
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
