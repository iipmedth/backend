<?php

namespace Tests\Feature;

use App\Models\Patient;
use App\Models\User;
use App\Models\Measure;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MeasureApiTest extends TestCase
{
     use RefreshDatabase;
     protected $user;
     protected $patient;
     protected $measures;
     /**
      * A basic feature test example.
      *
      * @return void
      */

      public function setUp():void{
        parent::setUp();

        $this->user = User::factory()->create();
        $this->patient = Patient::factory()->create();
        $this->measures = Measure::factory()->count(3)->create();

        $this->actingAs($this->user);

        $this->user->patient()->save($this->patient);
        $this->patient->measures()->saveMany($this->measures);
      }

      public function test_can_show_total_measures()
      {
         $this->get(route('totalMeasures', ["patient_id"=>$this->measures[0]->patient_id, "hand"=>$this->measures[0]->hand]))
         ->assertStatus(200);
      }

      public function test_can_show_percentiles()
      {
         $this->get(route('percentiles', ["patient_id"=>$this->measures[0]->patient_id, "hand"=>$this->measures[0]->hand]))
         ->assertStatus(200)
         ->assertJsonStructure([
           'height_difference_1_3',
           'height_difference_3_5',
           'span_1_2',
           'span_1_3',
           'span_1_4',
           'span_1_5',
           'span_2_3',
           'span_2_4',
           'span_2_5',
           'span_3_4',
           'span_3_5',
           'span_4_5',
         ]);
      }
}
