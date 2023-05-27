<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SurgerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surgery')->insert([
            [
                'name' => 'Liposuction',
                'price' => 8000,
                'date' => '2023-04-01'
            ],
            [
                'name' => 'Facelift',
                'price' => 6000,
                'date' => '2023-04-02'
            ],
            [
                'name' => 'Rhinoplasty',
                'price' => 10000,
                'date' => '2023-04-03'
            ],
            [
                'name' => 'Eyelid Surgery',
                'price' => 16000,
                'date' => '2023-04-04'
            ],
            [
                'name' => 'Lip Augmentation',
                'price' => 4000,
                'date' => '2023-04-05'
            ],
            [
                'name' => 'Body Lift',
                'price' => 23000,
                'date' => '2023-04-06'
            ],
            [
                'name' => 'Brow Lift',
                'price' => 3000,
                'date' => '2023-04-07'
            ],
            [
                'name' => 'Liposculpture',
                'price' => 7000,
                'date' => '2023-04-08'
            ],
            [
                'name' => 'Laser Hair Removal',
                'price' => 2000,
                'date' => '2023-04-09'
            ],
            [
                'name' => 'Chemical Peel',
                'price' => 2000,
                'date' => '2023-04-10'
            ],
            [
                'name' => 'Dermal Fillers',
                'price' => 2500,
                'date' => '2023-04-11'
            ],
            [
                'name' => 'Varicose Vein Treatment',
                'price' => 6000,
                'date' => '2023-04-12'
            ],
            [
                'name' => 'Hair Transplantation',
                'price' => 9000,
                'date' => '2023-04-13'
            ],
            [
                'name' => 'Botox Injections',
                'price' => 3000,
                'date' => '2023-04-14'
            ],
            [
                'name' => 'Tummy Tuck',
                'price' => 12000,
                'date' => '2023-04-15'
            ],
            [
                'name' => 'Microdermabrasion',
                'price' => 2500,
                'date' => '2023-04-16'
            ],
            [
                'name' => 'Skin Tightening',
                'price' => 5000,
                'date' => '2023-04-17'
            ],
            [
                'name' => 'Body Contouring',
                'price' => 8000,
                'date' => '2023-04-18'
            ],
            [
                'name' => 'Ear Surgery',
                'price' => 4000,
                'date' => '2023-04-19'
            ],
            [
                'name' => 'Laser Resurfacing',
                'price' => 7000,
                'date' => '2023-04-20'
            ],
            [
                'name' => 'Thigh Lift',
                'price' => 10000,
                'date' => '2023-04-21'
            ],
            [
                'name' => 'Arm Lift',
                'price' => 8000,
                'date' => '2023-04-22'
            ],
            [
                'name' => 'Face Lift',
                'price' => 12000,
                'date' => '2023-04-23'
            ],
            [
                'name' => 'Eye Tattoo',
                'price' => 10000,
                'date' => '2023-04-24'
            ],
        ]);
    }
}
