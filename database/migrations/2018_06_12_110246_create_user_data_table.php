<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->increments('ud_id')->comment('用户');
            $table->char('password');
            $table->string('name', 55)->comment('姓名');
            $table->string('phone', 55)->comment('手机');
            $table->string('company',100)->comment('单位');
            $table->string('resign', 55)->comment('职务');
            $table->string('industry', 55)->comment('行业');
            $table->string('company_address', 100)->comment('公司地址');
            $table->string('native_place', 100)->comment('籍贯');
            $table->tinyInteger('sex')->default(1)->comment('性别1男2女');
            $table->string('logo', 200)->comment('logo');
            $table->string('open_id', 200);
            $table->integer('pre_at')->comment('上次登陆时间')->nullable( $value = true);
            $table->string('message')->comment('介绍');
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
        Schema::dropIfExists('user_data');
    }
}
