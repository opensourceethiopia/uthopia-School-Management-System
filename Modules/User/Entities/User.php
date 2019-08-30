<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [];

    public function addRole($role_id){
        RoleUser::create([
            "user_id" => $this->id,
            "role_id" => $role_id
        ]);
        return $this;
    }
}
