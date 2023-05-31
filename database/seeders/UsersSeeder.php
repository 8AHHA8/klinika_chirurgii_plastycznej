<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'surname' => Str::random(10),
        //     'phone_number' => random_int(8, 9),
        //     'pesel' => random_int(11, 12),
        //     'e-mail' => Str::random(10).'@example.com',
        //     'password' => Hash::make('password'),
        //     'wait_time' => random_int(0, 2),
        //     'role' => 1,
            
        // ]);


        DB::table('users')->insert([
            [
                'name' => 'John',
                'surname' => 'Doe',
                'phone_number' => '123456789',
                'pesel' => '12345678900',
                'e-mail' => 'john@example.com',
                'password' => Hash::make('apple'),
                'wait_time' => '2',
                'role' => '2',
            ],
            
            [
                'name' => 'Jane',
                'surname' => 'Smith',
                'phone_number' => '987654321',
                'pesel' => '23456789010',
                'e-mail' => 'jane@example.com',
                'password' => Hash::make('banana'),
                'wait_time' => '3',
                'role' => '2',
            ],
            
            [
                'name' => 'Mike',
                'surname' => 'Johnson',
                'phone_number' => '555555555',
                'pesel' => '34567890123',
                'e-mail' => 'mike@example.com',
                'password' => Hash::make('orange'),
                'wait_time' => '1',
                'role' => '2',
            ],
            
            [
                'name' => 'Sarah',
                'surname' => 'Johnson',
                'phone_number' => '555111222',
                'pesel' => '45678901234',
                'e-mail' => 'sarah@example.com',
                'password' => Hash::make('strawberry'),
                'wait_time' => '4',
                'role' => '2',
            ],
            
            [
                'name' => 'Michael',
                'surname' => 'Brown',
                'phone_number' => '999888777',
                'pesel' => '56789012345',
                'e-mail' => 'michael@example.com',
                'password' => Hash::make('mango'),
                'wait_time' => '5',
                'role' => '2',
            ],
            
            [
                'name' => 'Emily',
                'surname' => 'Davis',
                'phone_number' => '111222333',
                'pesel' => '67890123456',
                'e-mail' => 'emily@example.com',
                'password' => Hash::make('pineapple'),
                'wait_time' => '3',
                'role' => '2',
            ],
            
            [
                'name' => 'David',
                'surname' => 'Wilson',
                'phone_number' => '444555666',
                'pesel' => '78901234567',
                'e-mail' => 'david@example.com',
                'password' => Hash::make('watermelon'),
                'wait_time' => '1',
                'role' => '2',
            ],
            
            [
                'name' => 'Olivia',
                'surname' => 'Taylor',
                'phone_number' => '777888999',
                'pesel' => '89012345678',
                'e-mail' => 'olivia@example.com',
                'password' => Hash::make('grapefruit'),
                'wait_time' => '2',
                'role' => '2',
            ],
            
            [
                'name' => 'Daniel',
                'surname' => 'Anderson',
                'phone_number' => '222333444',
                'pesel' => '90123456789',
                'e-mail' => 'daniel@example.com',
                'password' => Hash::make('blueberry'),
                'wait_time' => '6',
                'role' => '2'
        ]]);
    }
}

