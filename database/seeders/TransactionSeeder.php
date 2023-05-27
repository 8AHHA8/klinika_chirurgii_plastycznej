<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Doktorzy: 1, 2, 3, 4
        // Klienci: 1, 2, 3, 4, 5, 6, 7, 8, 9
        // Troje klientów przeszło po 2 zabiegi, 1 przeszedł 3 zabiegi, a reszta po jednym.

        // Zabiegi wykonywane przez klientów

        // Klient 1 (id: 1)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 1,
                'doctor_id' => 1,
                'user_id' => 1,
                'date' => '2023-04-01',
                'price' => 8000, // Cena dla Liposuction
            ],
            [
                'surgery_id' => 2,
                'doctor_id' => 2,
                'user_id' => 1,
                'date' => '2023-04-02',
                'price' => 6000, // Cena dla Facelift
            ],
        ]);

        // Klient 2 (id: 2)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 3,
                'doctor_id' => 3,
                'user_id' => 2,
                'date' => '2023-04-03',
                'price' => 10000, // Cena dla Rhinoplasty
            ],
            [
                'surgery_id' => 4,
                'doctor_id' => 4,
                'user_id' => 2,
                'date' => '2023-04-04',
                'price' => 16000, // Cena dla Eyelid Surgery
            ],
        ]);

        // Klient 3 (id: 3)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 5,
                'doctor_id' => 1,
                'user_id' => 3,
                'date' => '2023-04-05',
                'price' => 4000, // Cena dla Lip Augmentation
            ],
            [
                'surgery_id' => 6,
                'doctor_id' => 2,
                'user_id' => 3,
                'date' => '2023-04-06',
                'price' => 23000, // Cena dla Body Lift
            ],
        ]);

        // Klient 4 (id: 4)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 7,
                'doctor_id' => 3,
                'user_id' => 4,
                'date' => '2023-04-07',
                'price' => 3000, // Cena dla Brow Lift
            ],
            [
                'surgery_id' => 8,
                'doctor_id' => 4,
                'user_id' => 4,
                'date' => '2023-04-08',
                'price' => 7000, // Cena dla Liposculpture
            ],
        ]);

        // Klient 5 (id: 5)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 9,
                'doctor_id' => 1,
                'user_id' => 5,
                'date' => '2023-04-09',
                'price' => 18000, // Cena dla Tummy Tuck
            ],
        ]);

        // Klient 6 (id: 6)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 10,
                'doctor_id' => 2,
                'user_id' => 6,
                'date' => '2023-04-10',
                'price' => 9000, // Cena dla Hair Transplant
            ],
        ]);

        // Klient 7 (id: 7)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 11,
                'doctor_id' => 3,
                'user_id' => 7,
                'date' => '2023-04-11',
                'price' => 5000, // Cena dla Otoplasty
            ],
        ]);

        // Klient 8 (id: 8)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 12,
                'doctor_id' => 4,
                'user_id' => 8,
                'date' => '2023-04-12',
                'price' => 11000, // Cena dla Breast Augmentation
            ],
        ]);

        // Klient 9 (id: 9)
        DB::table('transaction')->insert([
            [
                'surgery_id' => 13,
                'doctor_id' => 1,
                'user_id' => 9,
                'date' => '2023-04-13',
                'price' => 8000, // Cena dla Liposuction
            ],
        ]);

        // Dodatkowe informacje o zabiegach, które nie były wykonane

        // Zabiegi niewykonane
        $surgeryIds = range(14, 24);
        $doctorIds = [2, 3, 4, 1, 2, 3, 4, 1, 2, 3];

        foreach ($surgeryIds as $index => $surgeryId) {
            $doctorId = $doctorIds[$index % count($doctorIds)];

            DB::table('transaction')->insert([
                'surgery_id' => $surgeryId,
                'doctor_id' => $doctorId,
                'user_id' => 1,
                'date' => '2023-04-14',
                'price' => 0,
            ]);
        }
    }
}