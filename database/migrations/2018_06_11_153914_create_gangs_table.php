<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs', function (Blueprint $table) {
            //商会信息表
            $table->increments('id')->comment('商会信息id');
            $table->string('name', 55)->comment('名称');
            $table->string('city', 55)->comment('区域');
            $table->string('license_img',255)->comment('执照图片');
            $table->string('logo',255)->comment('执照图片');
            $table->string('contact',55)->comment('联系人');
            $table->string('contact_phone',55)->comment('联系人电话');
            $table->text('message')->comment('商会简介');
            $table->tinyInteger('examine_status')->default(2)->comment('审核状态');
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
        Schema::table('gangs', function (Blueprint $table) {
            //
        });
    }
}
