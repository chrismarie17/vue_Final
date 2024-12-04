<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')      // Foreign key to users table
                  ->constrained('users')     // Explicitly define the reference table
                  ->onDelete('cascade');    // Cascade delete on user deletion
            $table->string('flight_number');
            $table->date('departure_date');
            $table->string('seat_class');
            $table->timestamps();
            
            // Optionally, add a unique index for flight_number, assuming you want to ensure uniqueness
            $table->unique('flight_number');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
