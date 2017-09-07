<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('operator_id');
            $table->char('operator_name')->default(null);
            $table->bigInteger('operator_phone')->default(0);
            $table->string('operator_password')->default('');
            $table->char('jurisdiction_level',5)->default(1);
            $table->timestamp('login_time');
            $table->integer('finish_num')->default(0);
            $table->string('remember')->default('');//this col use to remember your state of login
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('operators');
    }
}
