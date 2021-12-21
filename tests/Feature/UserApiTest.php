<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    use RefreshDatabase;
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

    public function test_can_register_user()
    {
        $formData = [
              "name" => "test",
              "email" => "test1@gmail.com",
              "password" => "password",
              "role" => "patient"
        ];

        $this->json('POST',route('register'),$formData)->assertStatus(201)->assertJson([
              "name" => "test",
              "email" => "test1@gmail.com",
              "role" => "patient"
        ]);
    }

    public function test_can_login_user()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $formData = [
              "email" => $user->email,
              "password" => 'password'
        ];

        $this->json('POST',route('login'),$formData)->assertStatus(200)->assertJson(["message" => "Success"]);
    }

    public function test_can_logout_user()
    {
        $this->json('POST',route('logout'))->assertStatus(200)->assertJson(["message" => "Success"]);
    }

    public function test_can_show_user()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $this->get(route('user'))->assertStatus(200);
    }
}
