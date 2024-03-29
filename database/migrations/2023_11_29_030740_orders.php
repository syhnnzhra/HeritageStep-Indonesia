<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('telephone');
            $table->string('alamat');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('province_id')->on('provinces');
            $table->string('kode_pos');
            $table->string('rincian_opsional')->nullable();
            $table->string('bank');
            $table->unsignedBigInteger('subtotal');
            $table->string('postal_fee');
            $table->string('no_resi');
            $table->string('status');
            $table->string('payment_status')->nullable();
            $table->string('payment_token')->nullable();
            $table->string('payment_url')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
