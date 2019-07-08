<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SgwdImageNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgwd_image-news', function (Blueprint $table) {
            $table->increments('image_news_id');
            $table->string('image');
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')
                ->references('news_id')
                ->on('sgwd_news')
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
        Schema::dropIfExists('sgwd_image-news');
    }
}
