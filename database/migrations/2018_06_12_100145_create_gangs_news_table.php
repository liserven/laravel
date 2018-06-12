<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_news', function (Blueprint $table) {
            //圈子资讯表
            $table->increments('rd_id');
            $table->string('title', 100)->comment('圈子资讯标题');
            $table->string('thumbnail', 200)->comment('缩略图');
            $table->text('message')->comment('简介');
            $table->longText('content')->comment('内容');
            $table->integer('user_id')->comment('发布者id');
            $table->string('gangs_name')->comment('发布公会');
            $table->integer('view_number')->default(0)->nullable($value = true)->comment('浏览量');
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
        Schema::table('gangs_news', function (Blueprint $table) {
            //
        });
    }
}
