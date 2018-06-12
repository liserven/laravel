<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGangsSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gangs_set', function (Blueprint $table) {

            //公会设置表
            $table->increments('id');
            $table->integer('implement_number')->default(1)->nullable( $value = true )->comment('执行会长人数');
            $table->integer('standing_number')->default(1)->nullable( $value = true )->comment('常务会长人数');
            $table->integer('vice_number')->default(1)->nullable( $value = true )->comment('副会长人数');
            $table->integer('secretary_number')->default(1)->nullable( $value = true )->comment('秘书长人数');
            $table->integer('member_number')->default(1)->nullable( $value = true )->comment('成员人数');
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
        Schema::dropIfExists('gangs_set');
    }
}
