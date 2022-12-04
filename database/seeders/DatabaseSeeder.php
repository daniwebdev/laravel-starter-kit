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

            Permission::create(['name' => 'create role']),
            Permission::create(['name' => 'update role']),
            Permission::create(['name' => 'show role']),
            Permission::create(['name' => 'delete role']),

            Permission::create(['name' => 'create article']),
            Permission::create(['name' => 'update article']),
            Permission::create(['name' => 'show article']),
            Permission::create(['name' => 'delete article']),

            Permission::create(['name' => 'create article-category']),
            Permission::create(['name' => 'update article-category']),
            Permission::create(['name' => 'show article-category']),
            Permission::create(['name' => 'delete article-category']),
        ];

        $root_role            = Role::create(['name' => 'Root']);
        $superadmin_role      = Role::create(['name' => 'Super Admin']);

        $root_role->syncPermissions($permissions);
        $superadmin_role->syncPermissions($permissions);

        $root = User::create([
            "name" => "Dani",
            "email" => 'me@dani.work',
            "email_verified_at" => now(),
            "password" => bcrypt('password'),
        ]);
        $root->assignRole($root_role);

        $superadmin = User::create([
            "name" => "Super Admin",
            "email" => 'superadmin@mail.com',
            "email_verified_at" => now(),
            "password" => bcrypt('password'),
        ]);
        $superadmin->assignRole($superadmin_role);
    }
}
