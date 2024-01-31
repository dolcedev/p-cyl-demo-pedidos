<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan db:seed
     *   ó php artisan migrate:fresh --seed
     */
    public function run(): void
    {
        User::create([
            'name' => "Aratz",
            'email' => "aratz@email.com",
            'password' => Hash::make(env('ADMIN_PASS')),
            'email_verified_at' => now(),
            'role_id' => User::ROLES['admin'],
        ]);

    }
}
