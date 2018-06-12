<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsOfficialToGangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gangs', function (Blueprint $table) {
            //
            $table->tinyInteger('is_official')->default(2)->nullable( $value = true )->comment('是否是官方1是2不是');
            $table->integer('nature_id')->nullable( $value = true )->comment('工会性质');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gangs', function (Blueprint $table) {
            //
        });
    }
}
