<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_admin', function (Blueprint $table) {
            //工会管理关联表
            $table->increments('id');
            $table->integer('gang_id');
            $table->integer('member_id');
            $table->integer('order')->default(99);
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->tinyInteger('status')->default(1)->comment('状态1启用2停用');
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
        Schema::dropIfExists('gangs_admin');
    }
}
