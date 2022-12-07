<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

         \App\Models\Admin::factory()->create([
             'name' => 'Test Admin',
             'username' => 'admin',
             'email' => 'persionhost@gmail.com',
             'email_verified_at' => now(),
             'password' => bcrypt('12345678'),
             'remember_token' => Str::random(10),
         ]);
    }
}
