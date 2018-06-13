<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToSuperActionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_data', function (Blueprint $table) {
            //
            $table->tinyInteger('super')->default(2)->nullable($value=true)->comment('是否只有超级管理员能修改1是2不能');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('action_data', function (Blueprint $table) {
            //
        });
    }
}
