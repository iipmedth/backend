<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      function nrand($mean, $sd){
          $x = mt_rand()/mt_getrandmax();
          $y = mt_rand()/mt_getrandmax();
          return sqrt(-2*log($x))*cos(2*pi()*$y)*$sd + $mean;
      }

      DB::table('measures')->insert([
        'patient_id' => 1,
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
      ]);

      DB::table('measures')->insert([
        'patient_id' => 1,
        'hand' => 'left',
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
      ]);

      DB::table('measures')->insert([
        'patient_id' => 2,
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
      ]);

      DB::table('measures')->insert([
        'patient_id' => 2,
        'hand' => 'left',
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
      ]);

      DB::table('measures')->insert([
        'patient_id' => 3,
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
      ]);

      DB::table('measures')->insert([
        'patient_id' => 3,
        'hand' => 'left',
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
      ]);

      DB::table('measures')->insert([
        'patient_id' => 4,
        'hand' => 'right',
        'gender' => 'female',
        'hand_length' => nrand(182.5, 9.1),
        'hand_breadth' => nrand(78.8, 4.6),
        'height_difference_1_3' => nrand(71.6, 6.4),
        'height_difference_3_5' => nrand(36.0, 4.3),
        'span_1_2' => nrand(149.5, 13.6),
        'span_1_3' => nrand(171.1, 14.5),
        'span_1_4' => nrand(173.6, 17.3),
        'span_1_5' => nrand(185.5, 13.9),
        'span_2_3' => nrand(72.9, 12.8),
        'span_2_4' => nrand(94.2, 16.6),
        'span_2_5' => nrand(129.9, 14.4),
        'span_3_4' => nrand(55.5, 13.7),
        'span_3_5' => nrand(105.9, 13.2),
        'span_4_5' => nrand(68.9, 13.3),
      ]);

      DB::table('measures')->insert([
        'patient_id' => 4,
        'hand' => 'left',
        'gender' => 'female',
        'hand_length' => nrand(182.5, 9.1),
        'hand_breadth' => nrand(78.8, 4.6),
        'height_difference_1_3' => nrand(71.6, 6.4),
        'height_difference_3_5' => nrand(36.0, 4.3),
        'span_1_2' => nrand(149.5, 13.6),
        'span_1_3' => nrand(171.1, 14.5),
        'span_1_4' => nrand(173.6, 17.3),
        'span_1_5' => nrand(185.5, 13.9),
        'span_2_3' => nrand(72.9, 12.8),
        'span_2_4' => nrand(94.2, 16.6),
        'span_2_5' => nrand(129.9, 14.4),
        'span_3_4' => nrand(55.5, 13.7),
        'span_3_5' => nrand(105.9, 13.2),
        'span_4_5' => nrand(68.9, 13.3),
      ]);

      DB::table('measures')->insert([
        'patient_id' => 5,
        'hand' => 'right',
        'gender' => 'female',
        'hand_length' => nrand(182.5, 9.1),
        'hand_breadth' => nrand(78.8, 4.6),
        'height_difference_1_3' => nrand(71.6, 6.4),
        'height_difference_3_5' => nrand(36.0, 4.3),
        'span_1_2' => nrand(149.5, 13.6),
        'span_1_3' => nrand(171.1, 14.5),
        'span_1_4' => nrand(173.6, 17.3),
        'span_1_5' => nrand(185.5, 13.9),
        'span_2_3' => nrand(72.9, 12.8),
        'span_2_4' => nrand(94.2, 16.6),
        'span_2_5' => nrand(129.9, 14.4),
        'span_3_4' => nrand(55.5, 13.7),
        'span_3_5' => nrand(105.9, 13.2),
        'span_4_5' => nrand(68.9, 13.3),
      ]);

      DB::table('measures')->insert([
        'patient_id' => 5,
        'hand' => 'left',
        'gender' => 'female',
        'hand_length' => nrand(182.5, 9.1),
        'hand_breadth' => nrand(78.8, 4.6),
        'height_difference_1_3' => nrand(71.6, 6.4),
        'height_difference_3_5' => nrand(36.0, 4.3),
        'span_1_2' => nrand(149.5, 13.6),
        'span_1_3' => nrand(171.1, 14.5),
        'span_1_4' => nrand(173.6, 17.3),
        'span_1_5' => nrand(185.5, 13.9),
        'span_2_3' => nrand(72.9, 12.8),
        'span_2_4' => nrand(94.2, 16.6),
        'span_2_5' => nrand(129.9, 14.4),
        'span_3_4' => nrand(55.5, 13.7),
        'span_3_5' => nrand(105.9, 13.2),
        'span_4_5' => nrand(68.9, 13.3),
      ]);

      DB::table('measures')->insert([
        'patient_id' => 6,
        'hand' => 'right',
        'gender' => 'female',
        'hand_length' => nrand(182.5, 9.1),
        'hand_breadth' => nrand(78.8, 4.6),
        'height_difference_1_3' => nrand(71.6, 6.4),
        'height_difference_3_5' => nrand(36.0, 4.3),
        'span_1_2' => nrand(149.5, 13.6),
        'span_1_3' => nrand(171.1, 14.5),
        'span_1_4' => nrand(173.6, 17.3),
        'span_1_5' => nrand(185.5, 13.9),
        'span_2_3' => nrand(72.9, 12.8),
        'span_2_4' => nrand(94.2, 16.6),
        'span_2_5' => nrand(129.9, 14.4),
        'span_3_4' => nrand(55.5, 13.7),
        'span_3_5' => nrand(105.9, 13.2),
        'span_4_5' => nrand(68.9, 13.3),
      ]);

      DB::table('measures')->insert([
        'patient_id' => 6,
        'hand' => 'left',
        'gender' => 'female',
        'hand_length' => nrand(182.5, 9.1),
        'hand_breadth' => nrand(78.8, 4.6),
        'height_difference_1_3' => nrand(71.6, 6.4),
        'height_difference_3_5' => nrand(36.0, 4.3),
        'span_1_2' => nrand(149.5, 13.6),
        'span_1_3' => nrand(171.1, 14.5),
        'span_1_4' => nrand(173.6, 17.3),
        'span_1_5' => nrand(185.5, 13.9),
        'span_2_3' => nrand(72.9, 12.8),
        'span_2_4' => nrand(94.2, 16.6),
        'span_2_5' => nrand(129.9, 14.4),
        'span_3_4' => nrand(55.5, 13.7),
        'span_3_5' => nrand(105.9, 13.2),
        'span_4_5' => nrand(68.9, 13.3),
      ]);

      for ($x = 0; $x < 30; $x++) {
        DB::table('measures')->insert([
          'patient_id' => 7,
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
        ]);
      }

      for ($x = 0; $x < 30; $x++) {
        DB::table('measures')->insert([
          'patient_id' => 7,
          'hand' => 'left',
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
        ]);
      }

      for ($x = 0; $x < 30; $x++) {
        DB::table('measures')->insert([
          'patient_id' => 7,
          'hand' => 'right',
          'gender' => 'female',
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
        ]);
      }

      for ($x = 0; $x < 30; $x++) {
        DB::table('measures')->insert([
          'patient_id' => 7,
          'hand' => 'left',
          'gender' => 'female',
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
        ]);
      }

    }
}
