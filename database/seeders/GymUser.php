<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert data into gym_users table
        DB::table('gym_users')->insert([
            [
                'Email_address' => 'ycc529@gmail.com',
                'First_name' => 'Yee Chean',
                'Last_name' => 'Chang',
                'Contact_number' => '0874088676',
                'Access_level' => '2'
            ],
            [
                'Email_address' => 'jdc@gmail.com',
                'First_name' => 'Jamie Duffy',
                'Last_name' => 'Creagh',
                'Contact_number' => '0823638736',
                'Access_level' => '2'
            ],
            [
                'Email_address' => 'alkali@gmail.com',
                'First_name' => 'Raphael',
                'Last_name' => 'Frogoso',
                'Contact_number' => '0357392054',
                'Access_level' => '1'
            ],
            [
                'Email_address' => 'martin@gmail.com',
                'First_name' => 'Martin',
                'Last_name' => 'Macicha',
                'Contact_number' => '0592348423',
                'Access_level' => '0'
            ],
            [
                'Email_address' => 'yukang@gmail.com',
                'First_name' => 'Yu Kang',
                'Last_name' => 'Ong',
                'Contact_number' => '0233536752',
                'Access_level' => '0'
            ]
        ]);
    }
}
