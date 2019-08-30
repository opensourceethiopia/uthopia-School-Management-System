<?php

namespace Modules\User\Tests\Unit\Entities;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class User extends TestCase
{
    public function testAddRole(){
        $user = factory("Module\User\Entities\User")->create();
        $user_role_id = 1;

        $user->addRole($user_role_id);

        $this->assertDatabaseHas("role_users", [
            "user_id" => $user,
            "role_id" => $user_role_id
        ]);
    }

}
