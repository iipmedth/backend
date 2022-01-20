<?php

namespace Tests\Feature;

use App\Models\Patient;
use App\Models\User;
use App\Models\Measure;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientApiTest extends TestCase
{
    use RefreshDatabase;
    protected $user;
    protected $patient;
    protected $measure;
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function setUp():void{
       parent::setUp();

       $this->user = User::factory()->create();
       $this->patient = Patient::factory()->create();
       $this->measure = Measure::factory()->create();

       $this->actingAs($this->user);

       $this->user->patient()->save($this->patient);
       $this->patient->measures()->save($this->measure);
     }

     public function test_can_show_patient_measure()
     {
        $this->get(route('measure', ["id"=>$this->patient->id, "hand"=>$this->measure->hand]))->assertStatus(200);
     }

     public function test_can_show_patient()
     {
        $this->get(route('patient'))->assertStatus(200);
     }
}
