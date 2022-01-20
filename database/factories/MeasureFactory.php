<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeasureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
          'patient_id' => Patient::inRandomOrder()->first()->id,
          'hand' => $this->faker->randomElement(['right', 'left']),
          'gender' => $this->faker->randomElement(['male', 'female']),
          'hand_length' => $this->faker->randomFloat(2, 30, 200),
          'hand_breadth' => $this->faker->randomFloat(2, 30, 200),
          'height_difference_1_3' => $this->faker->randomFloat(2, 30, 200),
          'height_difference_3_5' => $this->faker->randomFloat(2, 30, 200),
          'span_1_2' => $this->faker->randomFloat(2, 30, 200),
          'span_1_3' => $this->faker->randomFloat(2, 30, 200),
          'span_1_4' => $this->faker->randomFloat(2, 30, 200),
          'span_1_5' => $this->faker->randomFloat(2, 30, 200),
          'span_2_3' => $this->faker->randomFloat(2, 30, 200),
          'span_2_4' => $this->faker->randomFloat(2, 30, 200),
          'span_2_5' => $this->faker->randomFloat(2, 30, 200),
          'span_3_4' => $this->faker->randomFloat(2, 30, 200),
          'span_3_5' => $this->faker->randomFloat(2, 30, 200),
          'span_4_5' => $this->faker->randomFloat(2, 30, 200),
        ];
    }
}
