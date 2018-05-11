<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member extends Migration
{
    /**
     * Run the migrations.
     * 管理员表结构数据
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('md_phone',55)->comment('管理员手机号');
            $table->char('md_password', 32);
            $table->tinyInteger('is_super')->default(2)->comment("是否是超级管理员1是2否");
            $table->ipAddress('ip')->default('0.0.0.0');
            $table->string('email',55);
            $table->integer('pre_time')->comment('上次登录时间');
            $table->string('logo');
            $table->string('md_name', 55);
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
        Schema::dropIfExists('member_data');
    }
}
