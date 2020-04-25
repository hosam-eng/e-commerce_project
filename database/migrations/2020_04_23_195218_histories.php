<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Histories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table)
        {
            $table->id();
            $table->string('U_email');
            $table->string("prod_code");
            $table->string("prod_image");
            $table->string("prod_name");
            $table->integer("prod_price");
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
        //
    }
}
