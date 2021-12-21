<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Patient;
use App\Models\TherapistOfPatient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TherapistOfPatientApiTest extends TestCase
{
  use RefreshDatabase;
  protected $user;
  protected $therapist_of_patient;
  protected $patient;
  /**
   * A basic feature test example.
   *
   * @return void
   */

   public function setUp():void{
     parent::setUp();

     $this->user = User::factory()->create();
     $this->patient = Patient::factory()->create();
     $this->therapist_of_patient = TherapistOfPatient::factory()->create();

     $this->actingAs($this->user);
   }

   public function test_can_show_therapist_of_patients()
   {
      $this->get(route('patients'))->assertStatus(200);
   }
}
