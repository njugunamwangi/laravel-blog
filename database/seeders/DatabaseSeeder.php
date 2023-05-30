<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /** @var \App\Models\User $adminUser */
        // \App\Models\User::factory(10)->create();
        // $adminUser = User::factory()->create([
        //     'email' => 'admin@ndachi.dev',
        //     'name' => 'Admin',
        //     'password' => bcrypt('admin123')
        // ]);

        // $adminRole = Role::create(['name' => 'admin']);
        // $adminUser->assignRole($adminRole);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
