<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleAction extends Migration
{
    /**
     * Run the migrations.
     *  行为
     * @return void
     */
    public function up()
    {
        Schema::create('role_action', function (Blueprint $table) {
            $table->increments('ra_id');
            $table->integer('action_id')->comment('行为');
            $table->integer('role_id')->comment('角色');
            $table->integer('order')->default(99);
            $table->integer('create_at');
            $table->integer('update_at');
            $table->tinyInteger('status')->default(1);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_action');
    }
}
