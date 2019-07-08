<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SgwdProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgwd_products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_code');
            $table->string('prod_name');
            $table->text('prod_description');
            $table->string('prod_status');
            $table->string('prod_unit');
            $table->string('prod_warranty');
            $table->string('prod_price');
            $table->string('prod_img');
            $table->tinyInteger('prod_doororwindow');
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')
                ->references('cate_id')
                ->on('sgwd_categories')
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
        Schema::dropIfExists('sgwd_products');
    }
}
