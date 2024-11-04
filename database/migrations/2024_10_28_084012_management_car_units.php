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
        Schema::create('management_cars_unit', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->UnsignedBigInteger('unit');
            $table->UnsignedBigInteger('location_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('location_id')->references('id')->on('management_locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
