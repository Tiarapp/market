<?php

namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;
use PhpParser\Node\Expr\FuncCall;

trait HasPermissonTrait
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }


    public function permissions()
    {
        return $this->belongtoMany(Permission::class, 'users_permissions');
    }
}
