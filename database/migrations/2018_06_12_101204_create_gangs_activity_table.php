<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100)->comment('会议名称');
            $table->string('thumbnail', 200)->comment('缩略图');
            $table->text('message', 200)->comment('会议介绍');
            $table->tinyInteger('is_charge')->default(2)->nullable( $value = true)->comment('是否收费1收2不收');
            $table->integer('start_at')->comment('开始时间');
            $table->integer('over_at')->comment('结束时间');
            $table->integer('view_number')->default(0)->nullable( $value = true)->comment('浏览量');
            $table->string('host', 100)->comment('主办方');
            $table->text('content')->comment('活动主要内容');
            $table->text('bright')->comment('亮点');
            $table->string('province', 55)->comment('省');
            $table->string('city', 55)->comment('市');
            $table->string('address', 200)->comment('地址');
            $table->integer('release_at')->comment('发布时间');
            $table->integer('user_id');
            $table->integer('gangs_id');
            $table->integer('order')->default(99)->nullable($value = true);
            $table->integer('created_at')->nullable($value = true);
            $table->integer('updated_at')->nullable($value = true);
            $table->tinyInteger('status')->default(1)->nullable($value = true);
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
        Schema::dropIfExists('gangs_activity');
    }
}
