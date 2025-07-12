<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            DivisionSeeder::class,
            EmployeeSeeder::class,
        ]);

        User::factory()->create([
            'username' => 'admin',
            'password' => Hash::make('pastibisa'),
            'email' => 'admin@example.com',
            'name' => 'admin',
            'phone' => '08123645212'
        ]);
    }
}
