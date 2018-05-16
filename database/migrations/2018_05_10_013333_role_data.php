<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleData extends Migration
{
    /**
     * Run the migrations.
     * 角色数据
     * @return void
     */
    public function up()
    {
        Schema::create('role_data', function (Blueprint $table) {
            $table->increments('rd_id');
            $table->string('role_name', 50)->comment('角色名称');
            $table->string('role_logo', 200)->comment('角色图片');
            $table->integer('order')->default(99);
            $table->timestamps();

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
        Schema::dropIfExists('role_data');
    }
}
