<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Pim van der Vlugt',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'therapist',
      ],
      [
        'name' => 'Maikel de Boer',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ],
      [
        'name' => 'Martin Bergsma',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ],
      [
        'name' => 'Roy van der Veen',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ],
      [
        'name' => 'Sandra Nieuwenhuizen',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ],
      [
        'name' => 'Keetje van der Vorst',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ],
      [
        'name' => 'Bridget Ouwehand',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);
    }
}
