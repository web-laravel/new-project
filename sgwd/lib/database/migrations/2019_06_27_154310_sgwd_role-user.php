<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SgwdRoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgwd_role_user', function (Blueprint $table) {
            $table->increments('role_user_id');
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('role_id')
                ->references('role_id')
                ->on('sgwd_roles')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('sgwd_users')
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
        Schema::dropIfExists('sgwd_role_user');
    }
}
