<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $permissions = [
            Permission::create(['name' => 'create user']),
            Permission::create(['name' => 'update user']),
            Permission::create(['name' => 'show user']),
            Permission::create(['name' => 'delete user']),
        ];

        $superadmin_role = Role::create(['name' => 'Super Admin']);

        $superadmin_role->syncPermissions($permissions);

        $superadmin = User::create([
            "name" => "Super Admin",
            "email" => 'superadmin@mail.com',
            "email_verified_at" => now(),
            "password" => bcrypt('password'),
        ]);

        $superadmin->assignRole($superadmin_role);
    }
}
