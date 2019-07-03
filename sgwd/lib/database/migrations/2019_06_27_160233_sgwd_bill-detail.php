<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SgwdBillDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgwd_bill-detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prod_id')->unsigned();
            $table->integer('bill_id')->unsigned();
            $table->integer('quantity');
            $table->foreign('prod_id')
                ->references('id')
                ->on('sgwd_products')
                ->onDelete('cascade');
            $table->foreign('bill_id')
                ->references('id')
                ->on('sgwd_bills')
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
        Schema::dropIfExists('sgwd_bill-detail');
    }
}
