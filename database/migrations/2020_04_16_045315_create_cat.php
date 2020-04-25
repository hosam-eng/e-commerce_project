<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCat extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cat_name");
            $table->string("cat_image");
            $table->string("cat_code")->unique();
            $table->integer("num")->default(0);
            $table->timestamps(0);
        });
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
