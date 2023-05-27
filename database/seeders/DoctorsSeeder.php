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
            'password' => 'sonnenblume',
            'e-mail' => 'klaus@example.com',
            'advancement_level' => '4',
            'role' => '1'
        ],
        
        [
            'name' => 'Zofia',
            'surname' => 'Ratajkowska',
            'password' => 'apfelbaum',
            'e-mail' => 'zofia@example.com',
            'advancement_level' => '3',
            'role' => '1'
        ],
        
        [
            'name' => 'Zbigniew',
            'surname' => 'Dąbrowski',
            'password' => 'schokolade',
            'e-mail' => 'zbigniew@example.com',
            'advancement_level' => '2',
            'role' => '1'
        ],
        
        [
            'name' => 'Anna',
            'surname' => 'Lazarowicz',
            'password' => 'fahrrad',
            'e-mail' => 'anna@example.com',
            'advancement_level' => '1',
            'role' => '1'
        ]]);
    
    }
}
