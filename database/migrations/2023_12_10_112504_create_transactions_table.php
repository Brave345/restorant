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
        Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('reservation_id');
        $table->string('name');
        $table->date('date');
        $table->time('time');
        $table->integer('total_pembayaran');
        $table->timestamps();

        $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
