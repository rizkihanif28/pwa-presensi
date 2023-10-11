<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //siswa
        Permission::create([
            'name' => 'create-karyawan'
        ]);
        Permission::create([
            'name' => 'read-karyawan'
        ]);
        Permission::create([
            'name' => 'update-karyawan'
        ]);
        Permission::create([
            'name' => 'delete-karyawan'
        ]);

        //users
        Permission::create([
            'name' => 'create-users'
        ]);
        Permission::create([
            'name' => 'read-users'
        ]);
        Permission::create([
            'name' => 'update-users'
        ]);
        Permission::create([
            'name' => 'delete-users'
        ]);


        //roles
        Permission::create([
            'name' => 'create-roles'
        ]);
        Permission::create([
            'name' => 'read-roles'
        ]);
        Permission::create([
            'name' => 'update-roles'
        ]);
        Permission::create([
            'name' => 'delete-roles'
        ]);

        //permission
        Permission::create([
            'name' => 'create-permissions'
        ]);
        Permission::create([
            'name' => 'read-permissions'
        ]);
        Permission::create([
            'name' => 'update-permissions'
        ]);
        Permission::create([
            'name' => 'delete-permissions'
        ]);

        //seed role 
        $role1 = Role::create([
            'name' => 'admin'
        ]);

        $role1->syncPermissions([
            'create-karyawan', 'read-karyawan', 'update-karyawan', 'delete-karyawan',
            'create-users', 'read-users', 'update-users', 'delete-users',
            'create-roles', 'read-roles', 'update-roles', 'delete-roles',
            'create-permissions', 'read-permissions', 'update-permissions', 'delete-permissions',
        ]);

        $role2 = Role::create([
            'name' => 'karyawan'
        ]);

        // users seed
        $user1 = User::create([
            'username' => 'admin123',
            'email' => 'qikcup@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user1->assignRole('admin');

        $user2 = User::create([
            'username' => 'karyawan1',
            'email' => 'karyawan1@gmail.com',
            'password' => Hash::make('password')
        ]);
        $user2->assignRole('karyawan');
    }
}
