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
           'gender' => 'male',
           'date_of_birth' => '01-01-1980',
           'instrument' => 'viool',
         ];
     }
}
