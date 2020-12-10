<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('promotion')->default(0);
            $table->string('image');
            $table->string('cpu');
            $table->string('ram');
            $table->string('disk');
            $table->string('vga');
            $table->string('screen');
            $table->string('resolution');
            $table->string('video');
            $table->integer('view')->default(0);
            $table->integer('buy_count')->default(0);
            $table->integer('status')->default(0);
            $table->string('tags_id')->nullable();
            $table->integer('brand_id');
            $table->integer('productline_id');
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
