<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seats_id')->references('id')->on('seats');
            $table->string('user_name');
            $table->dateTime('date');
            $table->time("start_time");
            $table->time("end_time");
            $table->integer("num");
            $table->string("phone_num");
            $table->string("seat_name");
            $table->boolean("delete_flag")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
