<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
      ]);

      DB::table('users')->insert([
        'name' => 'Maikel de Boer',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);

      DB::table('users')->insert([
        'name' => 'Martin Bergsma',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);

      DB::table('users')->insert([
        'name' => 'Roy van der Veen',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);

      DB::table('users')->insert([
        'name' => 'Sandra Nieuwenhuizen',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);

      DB::table('users')->insert([
        'name' => 'Keetje van der Vorst',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);

      DB::table('users')->insert([
        'name' => 'Bridget Ouwehand',
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'patient',
      ]);
    }
}
