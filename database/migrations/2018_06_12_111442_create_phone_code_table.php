<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_code', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 55);
            $table->string('code');
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
        Schema::dropIfExists('phone_code');
    }
}
