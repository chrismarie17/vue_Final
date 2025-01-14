<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('flights', function (Blueprint $table) {
        $table->id();
        $table->string('flight_number');
        $table->string('departure');
        $table->string('destination');
        $table->dateTime('departure_time');
        $table->integer('seats_available');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
