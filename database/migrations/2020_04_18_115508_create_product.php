<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("image");
            $table->string("name");
            $table->integer("price");
            $table->integer("quantity");
            $table->timestamps(0);
            $table->integer("cat_id")->unsigned();
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');

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
