<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsActivitySignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_activity_sign', function (Blueprint $table) {

            //活动报名数据表
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('activity_id');
            $table->tinyInteger('examine_status')->default(3)->comment('审核状态1通过2未通过3等待中')->nullable( $value = true);
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
        Schema::dropIfExists('gangs_activity_sign');
    }
}
