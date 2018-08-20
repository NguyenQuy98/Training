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
            $table->string('main_image');
            $table->text('description');
            $table->integer('price');
            $table->integer('amount');
            $table->integer('is_featured');
            $table->integer('status');
            $table->integer('category_id')->unsigned();
            $table->integer('flag');
            $table->decimal('new_price');
            $table->datetime('expired_time');
            $table->string('short_description');
            $table->foreign('category_id')->references('id')->on('categories');
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
