<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SgwdProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgwd_product-detail', function (Blueprint $table) {
            $table->increments('prod_detail_id');
            $table->string('prod_color');
            $table->string('prod_size');
            $table->string('prod_price');
            $table->string('prod_image');
            $table->integer('prod_id')->unsigned();
            $table->foreign('prod_id')
                ->references('prod_id')
                ->on('sgwd_products')
                ->onDelete('cascade');
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
        Schema::dropIfExists('sgwd_product-detail');
    }
}
