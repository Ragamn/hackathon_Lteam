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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("seats_id")->references("id")->on("seats");
            $table->foreignId("product_id")->references("id")->on("products");
            $table->integer("group_id");
            $table->integer("price");
            $table->integer("quantity");
            $table->boolean("delete_flag")->default(0);
            $table->string("order_status");
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
        //
    }
};
