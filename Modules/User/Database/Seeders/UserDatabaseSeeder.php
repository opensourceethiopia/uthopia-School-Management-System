<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->createRoles();
        // $this->call("OthersTableSeeder");
    }

    public function createRoles()
    {
        $roles = ["Admin", "Registrar", "Teacher", "Principal"];
        for ($i = 0; $i < count($roles); $i++) {
            \Modules\User\Entities\Role::create([
                "id" => $i,
                "name" => $roles[$i]
            ]);
        }
    }
}
