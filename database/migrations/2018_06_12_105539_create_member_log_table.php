<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_log', function (Blueprint $table) {
            //管理员操作日志表
            $table->increments('id');
            $table->integer('member_id')->comment('管理员id');
            $table->text('content', 55)->comment('操作内容');
            $table->string('ip')->default('0.0.0.0')->nullbale( $value=true );
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
        Schema::dropIfExists('member_log');
    }
}
