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
        Schema::create('lc_details', function (Blueprint $table) {
            $table->id();
            $table->integer('lc_id');
            $table->string('lc_indian_position')->nullable(); // Text input
            $table->string('lc_petral_parking')->nullable(); // Yes, No, Pending
            $table->string('lc_indian_custom')->nullable(); // Yes, No, Pending
            $table->string('lc_indian_border_continental')->nullable(); // Yes, No, Pending
            $table-> string('lc_goods_unload_sheild_no')->nullable(); // Number of the sheild
            $table->string('lc_manifist')->nullable(); // Yes, No, Pending
            $table->string('lc_bill_ok_entry')->nullable(); // Yes, No, Pending
            $table->string('lc_examine')->nullable(); // R/O, AR/O
            $table->string('lc_assesment')->nullable(); // R/O, AR/O
            $table->string('lc_assesment_notice')->nullable(); // Green, Yellow, Red
            $table->string('lc_after_duty')->nullable(); // Yes, No, Pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lc_details');
    }
};
