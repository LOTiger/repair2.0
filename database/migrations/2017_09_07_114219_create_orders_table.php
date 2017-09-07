<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * you can visit the database designation of repair system to learn it
     * @return void
     */
    public function up()
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->unsignedInteger('user_id');
            $table->text('order_message');
            $table->char('order_state',1)->default(0);
                /*state 0 means that the order is free ,
                        state 1 means that someone get this order,
                        state 2 means that the order has finished'
                */
            $table->integer('operator_id');
            $table->timestamps();      //this method can crate two col,one is 'create_at',anther is 'update_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
