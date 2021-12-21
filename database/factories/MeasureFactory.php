<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeasureFactory extends Factory
{

    function nrand($mean, $sd){
        $x = mt_rand()/mt_getrandmax();
        $y = mt_rand()/mt_getrandmax();
        return sqrt(-2*log($x))*cos(2*pi()*$y)*$sd + $mean;
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'patient_id' => Patient::inRandomOrder()->first()->id,
          'hand' => 'right',
          'gender' => 'male',
          'hand_length' => nrand(198.5, 8.5),
          'hand_breadth' => nrand(88.1, 4.4),
          'height_difference_1_3' => nrand(78.6, 7.2),
          'height_difference_3_5' => nrand(36.1, 3.9),
          'span_1_2' => nrand(159.9, 20.9),
          'span_1_3' => nrand(186.5, 18.0),
          'span_1_4' => nrand(195.4, 22.4),
          'span_1_5' => nrand(205.9, 18.3),
          'span_2_3' => nrand(77.1, 15.6),
          'span_2_4' => nrand(101.2, 15.5),
          'span_2_5' => nrand(140.6, 16.4),
          'span_3_4' => nrand(64.8, 13.0),
          'span_3_5' => nrand(114.2, 14.4),
          'span_4_5' => nrand(76.0, 14.4),
        ];
    }
}
