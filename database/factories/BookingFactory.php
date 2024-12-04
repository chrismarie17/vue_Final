<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'flight_number' => $this->faker->bothify('??-####'),
            'departure_date' => $this->faker->date(),
            'seat_class' => $this->faker->randomElement(['Economy', 'Business', 'First']),
        ];
    }
}
