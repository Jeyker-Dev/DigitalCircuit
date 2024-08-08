<?php

namespace App\Services;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionService
{
    public function createRolesPermissions()
    {
        // Create Roles
        $adminRole = Role::firstOrCreate([ "name" => "admin"]);
        $userRole = Role::firstOrCreate(["name" => "user"]);

        // Create Permissions
        $adminPermissions = Permission::firstOrCreate(["name" => "manage products"]);
        $userPermissions = Permission::firstOrCreate(["name" => "see products"]);

        // Give Permission To a Role
        $adminRole->givePermissionTo($adminPermissions);
        $userRole->givePermissionTo($userPermissions);

        // Create Admin User
        $adminUser = User::where("name", "admin")->first();

        // Create Users
        $users = User::where('name', '!=', 'admin')->get();

        if( $adminUser )
        {
            $adminUser->assignRole($adminRole);
        }   // Here End If
        if( $users )
        {
            foreach( $users as $user)
            {
                $user->assignRole($userRole);
            }   // Here End Foreach
        }   // Here End If
    }
}   // Here End Class