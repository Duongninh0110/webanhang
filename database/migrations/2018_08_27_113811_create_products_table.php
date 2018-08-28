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
            $table->increments('id');
            $table->string('name');
            $table->string('category_id');
            $table->string('subcategory_id');
            $table->text('productdetail');
            $table->text('materialandcare');
            $table->text('sizeandfit');
            $table->text('styledescribe');
            $table->integer('price');
            $table->text('image_one');
            $table->text('image_two');
            $table->text('image_three');
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
        Schema::dropIfExists('products');
    }
}
