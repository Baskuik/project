<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Alleen een payment voor de bestaande booking van BookingSeeder
        $bookings = Booking::all();

        if ($bookings->count() > 0) {
            Payment::updateOrCreate([
                'booking_id' => $bookings->first()->id,
            ], [
                'amount' => 45000, // €450.00
                'status' => 'completed',
                'provider' => 'credit_card',
                'transaction_id' => 'TXN-2026-001-CC',
                'currency' => 'EUR',
                'paid_at' => now()->subDays(5),
            ]);
        }
    }
}
