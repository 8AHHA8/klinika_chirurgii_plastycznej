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
        $surgeryIds = range(1, 24); // get an array of surgery IDs

        $price = Surgery::all()->pluck('price')->toArray(); // get an array of surgery prices

        $userIds = User::whereNotIn('id', function ($query) { // get an array of user IDs who are not doctors
            $query->select('user_id')->from('doctors');
        })->pluck('id')->toArray();

        foreach ($surgeryIds as $surgeryId) {
            $advancementLevel = ceil($surgeryId / 6); // calculate advancement level based on surgery ID

            $doctorIds = Doctors::where('advancement_level', '<=', $advancementLevel) // get an array of doctor IDs with advancement level less than or equal to calculated advancement level
                ->pluck('id')
                ->toArray();

            $doctorId = $doctorIds[array_rand($doctorIds)]; // select a random doctor ID from the available doctor IDs

            $date = Carbon::now()->subMonth()->addDays(rand(0, 90))->format('Y-m-d'); // generate a random date within the last month

            $specificPrice = $price[$surgeryId - 1]; // get the specific price for the surgery

            $numTransactions = DB::table('transactions') // check the number of transactions on the date
                ->where('date', $date)
                ->count();

            while ($numTransactions < 2) {
                $userId = $userIds[array_rand($userIds)]; // select a random user ID from the available user IDs
           
                DB::table('transactions')->insert([ // insert the transaction into the transactions table
                    'surgery_id' => $surgeryId,
                    'doctor_id' => $doctorId,
                    'user_id' => $userId,
                    'date' => $date,
                    'price' => $specificPrice,
                ]);

                $numTransactions++;

                if ($numTransactions >= 2) { // break the loop if two transactions have been added
                    break;
                }
            }
        }
    }
}
