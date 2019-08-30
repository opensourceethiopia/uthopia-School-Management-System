<?php

namespace Modules\User\Tests\Unit;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginController extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $password = "1234455";
        $user = factory("Modules\User\Entities\User")->create([
            "password" => Hash::make($password)
        ]);
        $credentials = [
            "username" => $user->email,
            "password" => $password,
            "remember" => true
        ];

        $response = $this->post("/login", $credentials);

        $this->assertEquals(200, $response->status());
    }

    public function testLoginFail(){
        $password = "1234455";
        $user = factory("Modules\User\Entities\User")->create([]);
        $credentials = [
            "username" => $user->worker_id,
            "password" => $password,
            "remember" => true
        ];

        $response = $this->post("/login");

        $this->assertEquals(403, $response->status());
    }
}
