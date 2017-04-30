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
		Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('product_code');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
		});

        /*Adding Many-to-Many*/
        Schema::create('category_product', function (Blueprint $table){
            $table->integer('category_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('product_id')->references('id')->on('products');
            //primary
            $table->primary(['category_id', 'product_id']);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_product');
		Schema::drop('products');
	}

}
