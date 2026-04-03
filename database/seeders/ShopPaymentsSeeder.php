<?php

namespace Database\Seeders;

use App\Models\ShopPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopPaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shopPayments = [
            [
                'user_id' => 1,
                'product_name' => 'Dierentuin Dagticket',
                'amount' => 2495, // €24.95
                'payment_status' => 'completed',
                'payment_method' => 'credit_card',
                'transaction_id' => 'SHOP-2026-001-CC',
                'paid_at' => now()->subDays(7),
            ],
            [
                'user_id' => 1,
                'product_name' => 'Pluche Knuffel — Leeuw',
                'amount' => 1495, // €14.95
                'payment_status' => 'completed',
                'payment_method' => 'ideal',
                'transaction_id' => 'SHOP-2026-002-IDL',
                'paid_at' => now()->subDays(6),
            ],
            [
                'user_id' => 1,
                'product_name' => 'T-shirt Secret Agent',
                'amount' => 1995, // €19.95
                'payment_status' => 'completed',
                'payment_method' => 'paypal',
                'transaction_id' => 'SHOP-2026-003-PP',
                'paid_at' => now()->subDays(5),
            ],
            [
                'user_id' => 1,
                'product_name' => 'Dierentuin Familiepakket',
                'amount' => 7995, // €79.95
                'payment_status' => 'completed',
                'payment_method' => 'credit_card',
                'transaction_id' => 'SHOP-2026-004-CC',
                'paid_at' => now()->subDays(4),
            ],
            [
                'user_id' => 1,
                'product_name' => 'Weekend Avontuur',
                'amount' => 19995, // €199.95
                'payment_status' => 'pending',
                'payment_method' => null,
                'transaction_id' => null,
                'paid_at' => null,
            ],
            [
                'user_id' => 1,
                'product_name' => 'Safari VIP Experience',
                'amount' => 8995, // €89.95
                'payment_status' => 'completed',
                'payment_method' => 'bank_transfer',
                'transaction_id' => 'SHOP-2026-005-BT',
                'paid_at' => now()->subDays(2),
            ],
        ];

        foreach ($shopPayments as $payment) {
            ShopPayment::create($payment);
        }
    }
}
