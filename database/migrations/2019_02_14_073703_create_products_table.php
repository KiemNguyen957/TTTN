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
            $table->string('slug')->nullable();
            $table->string('image');
            $table->string('price');
            $table->integer('sale')->nullable();
            $table->string('promotion')->nullable();
            $table->string('screen');
            $table->string('operating_system');
            $table->string('camera');
            $table->string('cpu');
            $table->string('ram');
            $table->string('memory');
            $table->string('memory_card');
            $table->string('pin');
            $table->longText('description')->nullable();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categorylist')->onDelete('cascade');
            
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
