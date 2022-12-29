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
        Schema::create('events_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id')->unsigned();
            $table->string('artist');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->text('image'); // image tipe data text
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_detail');
    }
};
