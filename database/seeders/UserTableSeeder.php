<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@it.com',
                'password' => bcrypt('admin'),
            ]
        ]);

        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'display_name' => 'Quản trị hệ thống'
            ]
        ]);


        DB::table('roles')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ]
        ]);

        DB::table('permissions')->insert([
            [
                'id' => 1,
                'name' => 'Role',
                'display_name' => 'Role',
                'parent_id' => 0,
            ]
            [
                'name' => 'list',
                'display_name' => 'list',
                'parent_id' => 1,
                'key_code'=>'Role_list'
            ]
            [
                'name' => 'add',
                'display_name' => 'add',
                'parent_id' => 1,
                'key_code'=>'Role_add'
            ]
            [
                'name' => 'edit',
                'display_name' => 'edit',
                'parent_id' => 1,
                'key_code'=>'Role_edit'
            ]
            [
                'name' => 'delete',
                'display_name' => 'delete',
                'parent_id' => 1,
                'key_code'=>'Role_delete'
            ]
            
        ]);

        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ]
        ]);


        DB::table('permission_role')->insert([
            [
                'role_id' => 1,
                'permission_id' => 1
            ]
            [
                'role_id' => 1,
                'permission_id' => 2
            ]
            [
                'role_id' => 1,
                'permission_id' => 3
            ]
            [
                'role_id' => 1,
                'permission_id' => 4
            ]
        ])


    }
}
