<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);

        //Permission list as array
        $permissions = [

            //Admin Create

            //User Create

            //Editor Create

            //Dashboard
            'dashboard.view',

            //Admin Permission
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',


            //Role Permission
            'role.create',
            'role.view',
            'role.edit',
            'role.delete',
            'role.approve',

            //Profile Permission
            'profile.view',
            'profile.edit',

            //Blog Permission
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',
        ];

        //Create and Assign permission

       // $permission = Permission::create(['name' => 'dashboard.view']);
       for ($i=0; $i <count($permissions); $i++){
       
        //Create Permission
        $permission = Permission::create(['name' => $permissions[$i]]);

        //Assign Role and Permission
        $roleSuperAdmin->givePermissionTo($permission);
        $permission->assignRole($roleSuperAdmin);
       }
    }
}
