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
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('payment_status', 100)->default('waiting')->after('category');
            $table->string('midtrans_url')->nullable()->after('payment_status');
            $table->string('booking_code')->nullable()->after('midtrans_url');
            $table->text('qrcode')->nullable()->after('booking_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropColumn(['payment_status', 'midtrans_url', 'booking_code']);
        });
    }
};
