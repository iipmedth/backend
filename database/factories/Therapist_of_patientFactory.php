<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class Therapist_of_patientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'therapist_id' => User::inRandomOrder()->first()->id,
          'patient_id' => Patient::inRandomOrder()->first()->id,
        ];
    }
}
