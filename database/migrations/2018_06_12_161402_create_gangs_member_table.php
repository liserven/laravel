<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_member', function (Blueprint $table) {
            //工会成员信息
            $table->increments('id');
            $table->integer('user_id');
            $table->string('post_id')->comment('职务id');
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
        Schema::dropIfExists('gangs_member');
    }
}
