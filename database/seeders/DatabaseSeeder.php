<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Yee Chean Chang',
            'email' => 'ycc@gmail.com',
            'contact_number' => '0874088676',
            'access_level' => '2',
            'password' => 'yeecheanchangpassword123'
        ]);
        
        User::factory()->create([
            'name' => 'Jamie Duffy Creagh',
            'email' => 'jdc@gmail.com',
            'contact_number' => '08234567890',
            'access_level' => '2',
            'password' => 'jamieduffycreaghpassword123'
        ]);
    }
}
