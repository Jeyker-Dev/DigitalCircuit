<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Roles To Users
        $adminRole = Role::firstOrCreate(['name' => "admin"]);
        $userRol = Role::firstOrCreate(["name" => "user"]);

        // Create A Permission to Admin
        $productPermission = Permission::firstOrCreate(["name" => "manage products"]);
        $seeProductsPermission = Permission::firstOrCreate(["name" => "see products"]);

        // Assign Permission To a Role
        $adminRole->givePermissionTo($productPermission);
        $userRol->givePermissionTo($seeProductsPermission);

        // Create Admin User
        $adminUser = User::where("name", "admin")->first();

        // Verify is The User Exist
        if( $adminUser )
        {
            $adminUser->assignRole($adminRole);
        }   // Here End If
        else
        {
            $users = User::where('name', '!=', 'admin')->get();

            foreach( $users as $user)
            {
                $user->assignRole($userRol);
            }   // Here End Foreach
        }   // Here End Else

    }   // Here End Function Run
}   // Here End Class RolesAndPermissionsSeeder
