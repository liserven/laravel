<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('news_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50)->comment('标题');
            $table->integer('sort_id');
            $table->string('source')->comment('来源');
            $table->longText('content')->comment('内容');
            $table->string('message')->comment('简介');
            $table->integer('user_id');
            $table->tinyInteger('is_hot')->default(1);
            $table->string('sm_img', 200);
            $table->tinyInteger('is_comment')->default(1)->comment('是否可以评论1可以2不可以');
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
        Schema::drop('news_data');
    }
}
