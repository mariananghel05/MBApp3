<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Role::factory()->create([
            'id'=>1,
            'name' => 'Admin'
        ]);
        \App\Models\Role::factory()->create([
            'id'=>2,
            'name' => 'Director'
        ]);
        \App\Models\Role::factory()->create([
            'id'=>3,
            'name' => 'Accounting'
        ]);
        \App\Models\Role::factory()->create([
            'id'=>4,
            'name' => 'Secretary'
        ]);
        \App\Models\Role::factory()->create([
            'id'=>5,
            'name' => 'Teacher'
        ]);
        \App\Models\Role::factory()->create([
            'id'=>6,
            'name' => 'Student'
        ]);



   

        \App\Models\User::factory()->create([
            'name' => 'Student',
            'role_id' => 6,
            'email' => 'student@student',
            'password'=>bcrypt('1234')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teacher',
            'role_id' => 5,
            'email' => 'teacher@teacher',
            'password'=>bcrypt('1234')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@admin',
            'password'=>bcrypt('1234')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Secretary',
            'role_id' => 3,
            'email' => 'secretary@secretary',
            'password'=>bcrypt('1234')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Director',
            'role_id' => 2,
            'email' => 'director@director',
            'password'=>bcrypt('1234')
        ]);

    }
}
