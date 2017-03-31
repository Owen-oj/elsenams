<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attributes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
		});


		Schema::create('attribute_product',function (Blueprint $table){
		   $table->integer('attribute_id')->unsigned()->index();
		   $table->integer('product_id')->unsigned()->index();
		   $table->foreign('attribute_id')->references('id')->on('attributes')
           ->onDelete('cascade');
		   $table->foreign('product_id')->references('id')->on('products');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attributes');
	}

}
