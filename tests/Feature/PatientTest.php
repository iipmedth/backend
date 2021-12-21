<?php

namespace Tests\Feature;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function setUp():void{
       parent::setUp();

       $user = User::factory()->create();

       $this->actingAs($user);
     }

     // public function test_can_register_user()
     // {
     //
     //     $this->json('POST',route('register'),$formData)->assertStatus(201)->assertJson([
     //           "name" => "test",
     //           "email" => "test1@gmail.com",
     //           "role" => "patient"
     //     ]);
     // }
     //
     // public function test_can_login_user()
     // {
     //     $formData = [
     //           "email" => $user->email,
     //           "password" => 'password'
     //     ];
     //
     //     $this->json('POST',route('login'),$formData)->assertStatus(200)->assertJson(["message" => "Success"]);
     // }
     // 
     // public function test_can_show_patient()
     // {
     //    $patient = Patient::factory()->create();
     //
     //    $this->user->patient()->save($patient);
     //
     //    $this->get(route('patient.show', $patient->id))->assertStatus(200);
     // }
}
