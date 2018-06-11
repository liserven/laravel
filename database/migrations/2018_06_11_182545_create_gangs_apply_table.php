<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_apply', function (Blueprint $table) {
            //商会申请表
            $table->increments('id')->comment('商会申请表');
            $table->string('name', 55)->comment('申请者姓名');
            $table->string('phone', 55)->comment('申请者手机');
            $table->string('company',100)->comment('单位');
            $table->string('resign', 55)->comment('职务');
            $table->string('industry', 55)->comment('行业');
            $table->string('company_address', 100)->comment('公司地址');
            $table->string('native_place', 100)->comment('籍贯');
            $table->tinyInteger('sex')->default(1)->comment('性别1男2女');
            $table->string('message')->comment('介绍');
            $table->tinyInteger('examine_status')->default(2)->comment('审核状态1通过2待审核3审核失败');
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
        Schema::table('gangs_apply', function (Blueprint $table) {
            //
        });
    }
}
