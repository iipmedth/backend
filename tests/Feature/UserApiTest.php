<?php

namespace Tests\Feature;

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
    public function test_can_register_user()
    {
        $formData = [
              "name" => "test",
              "email" => "test1@gmail.com",
              "role" => "patient"
        ];

        $this->withoutExceptionHandling();

        $this->json('POST',route('register'),$formData)->assertStatus(201)->assertJson($formData);
    }

    public function test_can_login_user()
    {
        $formData = [
              "email" => "test1@gmail.com",
        ];

        $this->withoutExceptionHandling();

        $this->json('POST',route('login'),$formData)->assertStatus(201)->assertJson($formData);
    }
}
