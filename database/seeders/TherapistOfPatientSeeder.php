<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TherapistOfPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('therapist_of_patients')->insert([
        'therapist_id' => 1,
        'patient_id' => 1,
      ],
      [
        'therapist_id' => 1,
        'patient_id' => 2,
      ],
      [
        'therapist_id' => 1,
        'patient_id' => 3,
      ],
      [
        'therapist_id' => 1,
        'patient_id' => 4,
      ],
      [
        'therapist_id' => 1,
        'patient_id' => 5,
      ],
      [
        'therapist_id' => 1,
        'patient_id' => 6,
      ]);
    }
}
