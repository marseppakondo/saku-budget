<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'user_id' => 1,
                'amount' => 100.00,
                'description' => 'Initial deposit',
            ],
            [
                'user_id' => 1,
                'amount' => 50.00,
                'description' => 'Grocery shopping',
            ],
            [
                'user_id' => 2,
                'amount' => 200.00,
                'description' => 'Salary payment',
            ],
            [
                'user_id' => 2,
                'amount' => 75.00,
                'description' => 'Utility bill payment',
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        };
    }
}
