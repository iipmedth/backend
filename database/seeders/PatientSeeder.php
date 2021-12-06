<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        'name' => 'Maikel de Boer',
        'gender' => 'men',
        'date_of_birth' => '1973-04-12',
        'instrument' => 'Viool',
      ]);

      DB::table('patients')->insert([
        'name' => 'Martin Bergsma',
        'gender' => 'men',
        'date_of_birth' => '1965-03-23',
        'instrument' => 'Bas',
      ]);

      DB::table('patients')->insert([
        'name' => 'Roy van der Veen',
        'gender' => 'men',
        'date_of_birth' => '1969-05-10',
        'instrument' => 'Harp',
      ]);

      DB::table('patients')->insert([
        'name' => 'Sandra Nieuwenhuizen',
        'gender' => 'women',
        'date_of_birth' => '1989-11-21',
        'instrument' => 'Viool',
      ]);

      DB::table('patients')->insert([
        'name' => 'Keetje van der Vorst',
        'gender' => 'women',
        'date_of_birth' => '1955-10-24',
        'instrument' => 'Gitaar',
      ]);

      DB::table('patients')->insert([
        'name' => 'Bridget Ouwehand',
        'gender' => 'women',
        'date_of_birth' => '1990-02-02',
        'instrument' => 'Piano',
    }
}
