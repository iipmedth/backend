<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class TherapistOfPatientFactory extends Factory
{
  use RefreshDatabase;
  protected $user;
  protected $therapist_of_patient;
  protected $patients;
  /**
   * A basic feature test example.
   *
   * @return void
   */

   public function setUp():void{
     parent::setUp();

     $this->user = User::factory()->create();
     $this->patients = Patient::factory()->create();
     $this->therapist_of_patient = TherapistOfPatient::factory()->create();

     $this->actingAs($this->user);

     $this->therapist_of_patient->therapist->save($this->patient);
     $this->therapist_of_patient->patient->save($this->patient);
   }

   public function test_can_show_therapist_of_patients()
   {
      $this->get(route('patients'))->assertStatus(200);
   }

}
