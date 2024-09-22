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
        Schema::create('l_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('lc_number')->unique();
            $table->integer('user_id');
            $table->string('lc_size');
            $table->string('lc_status'); // On progress, Delivering, Done

            // Enter Value after "lc_status" is set to delivering
            $table->string('lc_delivering_approx_time')->nullable();
            $table->string('lc_delivering_driver_name')->nullable();
            $table->string('lc_delivering_driver_contact_no')->nullable();
            $table->string('lc_deivering_truck_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_c_s');
    }
};
