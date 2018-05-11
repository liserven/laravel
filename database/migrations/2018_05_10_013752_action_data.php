<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActionData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_data', function (Blueprint $table) {
            $table->increments('ad_id');
            $table->string('ad_name', 55)->comment('行为名称');
            $table->string('ad_url', 100)->comment('行为url');
            $table->integer('ad_pid')->comment('父id');
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
        Schema::dropIfExists('action_data');
    }
}
