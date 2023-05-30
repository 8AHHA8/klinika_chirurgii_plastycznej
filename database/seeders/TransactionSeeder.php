<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Surgery;
use App\Models\User;
use App\Models\Doctors;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Zabiegi niewykonane
        $surgeryIds = range(1, 24);
        $price = Surgery::all()->pluck('price')->toArray();

        $userIds = User::all()->pluck('id')->toArray();

        foreach ($surgeryIds as $surgeryId) {
            $advancementLevel = ceil($surgeryId / 6); // Obliczanie poziomu zaawansowania na podstawie id zabiegu

            $doctorIds = Doctors::where('advancement_level', '<=', $advancementLevel)
            ->pluck('id')
            ->toArray();

            $doctorId = $doctorIds[array_rand($doctorIds)];
            $date = Carbon::now()->subMonth()->addDays(rand(0, 90))->format('Y-m-d');
            $specificPrice = $price[$surgeryId - 1];

            // Generowanie liczby transakcji (od 1 do 2)
            $numTransactions = rand(1, 2);

            for ($i = 0; $i < $numTransactions; $i++) {
                $userId = $userIds[array_rand($userIds)];

                DB::table('transactions')->insert([
                    'surgery_id' => $surgeryId,
                    'doctor_id' => $doctorId,
                    'user_id' => $userId,
                    'date' => $date,
                    'price' => $specificPrice,
                ]);
            }
        }
    }
}