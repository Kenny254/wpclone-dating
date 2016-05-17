<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sent_usr_id');
            $table->integer('received_usr_id');
            $table->string('sent_usr_name');
            $table->string('received_usr_name');
            $table->string('message');
            $table->integer('thread_id');
            $table->integer('reply_msg'); // check 1 as original message and 0 as reply mssage
            $table->integer('reported');
            $table->integer('readed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
