<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     public function definition()
     {
         return [
           'user_id' => User::inRandomOrder()->first()->id,
           'name' => $this->faker->name(),
           'gender' => $this->faker->randomElement(['male', 'female']),
           'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
           'instrument' => $this->faker->randomElement(['viool', 'piano', 'gitaar', 'harp']),
         ];
     }
}
