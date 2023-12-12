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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('provider');
            $table->string('provider_id')->unique()->nullable();
            $table->string('role');
            // $table->string('jeniskelamin')->nullable();
            // $table->string('alamat')->nullable();
            // $table->unsignedBigInteger('city_id')->nullable();
            // $table->unsignedBigInteger('province_id')->nullable();
            // $table->string('kode_pos')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('city_id')->references('id')->on('cities');
            // $table->foreign('province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
