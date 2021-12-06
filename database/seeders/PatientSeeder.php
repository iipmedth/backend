<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('patients')->insert([
        'user_id' => 2,
        'name' => 'Maikel de Boer',
        'gender' => 'men',
        'date_of_birth' => '1973-04-12',
        'instrument' => 'viool',
      ]);

      DB::table('patients')->insert([
        'user_id' => 3,
        'name' => 'Martin Bergsma',
        'gender' => 'men',
        'date_of_birth' => '1965-03-23',
        'instrument' => 'bas',
      ]);

      DB::table('patients')->insert([
        'user_id' => 4,
        'name' => 'Roy van der Veen',
        'gender' => 'men',
        'date_of_birth' => '1969-05-10',
        'instrument' => 'harp',
      ]);

      DB::table('patients')->insert([
        'user_id' => 5,
        'name' => 'Sandra Nieuwenhuizen',
        'gender' => 'women',
        'date_of_birth' => '1989-11-21',
        'instrument' => 'viool',
      ]);

      DB::table('patients')->insert([
        'user_id' => 6,
        'name' => 'Keetje van der Vorst',
        'gender' => 'women',
        'date_of_birth' => '1955-10-24',
        'instrument' => 'gitaar',
      ]);

      DB::table('patients')->insert([
        'user_id' => 7,
        'name' => 'Bridget Ouwehand',
        'gender' => 'women',
        'date_of_birth' => '1990-02-02',
        'instrument' => 'piano',
      ]);
    }
}
