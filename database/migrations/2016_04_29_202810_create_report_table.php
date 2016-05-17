<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reported_by_id'); // reported user auth::user id
            $table->integer('reported_user_id'); // reported user
            $table->string('reported_by'); // reported user auth::user id
            $table->string('reported_user'); // reported user
            $table->string('reason');
            $table->integer('resolved'); // resovled as 1 and not resolved as 0
            $table->integer('readed'); // read as 1 and not read as 0
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
        Schema::drop('report');
    }
}
