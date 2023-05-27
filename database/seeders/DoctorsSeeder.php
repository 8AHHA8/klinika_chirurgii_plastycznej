<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
        [
            'name' => 'Klaus',
            'surname' => 'Lindecker',
            'e-mail' => 'klaus@example.com',
            'advancement_level' => '4',
        ],
        
        [
            'name' => 'Zofia',
            'surname' => 'Ratajkowska',
            'e-mail' => 'zofia@example.com',
            'advancement_level' => '3',
        ],
        
        [
            'name' => 'Zbigniew',
            'surname' => 'Dąbrowski',
            'e-mail' => 'zbigniew@example.com',
            'advancement_level' => '2',
        ],
        
        [
            'name' => 'Anna',
            'surname' => 'Lazarowicz',
            'e-mail' => 'anna@example.com',
            'advancement_level' => '1',
        ]]);
    
    }
}
