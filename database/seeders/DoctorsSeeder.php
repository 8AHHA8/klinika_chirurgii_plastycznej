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
            'image' => 'photos/klaus.jpg',
            'name' => 'Klaus',
            'surname' => 'Lindecker',
            'password' => 'sonnenblume',
            'e-mail' => 'klaus@example.com',
            'speciality' => 'Cosmetic Surgeon',
            'description' => 'Dr. Klaus Lindecker is a renowned cosmetic surgeon known for his exceptional skills in body contouring and aesthetic procedures. 
            He specializes in helping patients enhance their physical appearance and achieve their desired results through personalized care and innovative techniques.',
            'advancement_level' => '4',
            'role' => '1'
        ],
        
        [
            'image' => 'photos/zofia.jpg',
            'name' => 'Zofia',
            'surname' => 'Ratajkowska',
            'password' => 'apfelbaum',
            'e-mail' => 'zofia@example.com',
            'speciality' => 'Plastic Surgeon',
            'description' => 'Dr. Zofia Ratajkowska is a highly skilled plastic surgeon with several years of experience. 
            She specializes in facial reconstruction and has a passion for helping her patients enhance their natural beauty.',
            'advancement_level' => '3',
            'role' => '1'
        ],
        
        [
            'image' => 'photos/zbigniew.jpg',
            'name' => 'Zbigniew',
            'surname' => 'Dąbrowski',
            'password' => 'schokolade',
            'e-mail' => 'zbigniew@example.com',
            'speciality' => 'Plastic Surgeon',
            'description' => 'Dr. Zbigniew Dąbrowski is a skilled facial plastic surgeon with expertise in rhinoplasty and facelift procedures. 
            He is committed to providing personalized care and helping his patients achieve their aesthetic goals.',
            'advancement_level' => '2',
            'role' => '1'
        ],
        
        [
            'image' => 'photos/anna.jpg',
            'name' => 'Anna',
            'surname' => 'Lazarowicz',
            'password' => 'fahrrad',
            'e-mail' => 'anna@example.com',
            'speciality' => 'Plastic Surgeon',
            'description' => 'Dr. Anna Lazarowicz is a board-certified plastic surgeon specializing in reconstructive and aesthetic procedures. 
            She has a gentle and caring approach towards her patients and is dedicated to achieving natural-looking results.',
            'advancement_level' => '1',
            'role' => '1'
        ]]);
    
    }
}
