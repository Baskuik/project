<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Extra;
use App\Models\Payment;
use App\Models\Stay;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stays = collect([
            [
                'name' => 'Bunker Suite',
                'slug' => 'bunker-suite',
                'description' => 'Een unieke verblijfservaring met verborgen luxe en een slimme indeling voor gezinnen.',
                'price_per_night' => 24900,
                'max_adults' => 2,
                'max_kids' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Jungle Retreat',
                'slug' => 'jungle-retreat',
                'description' => 'Rustige lodge met veel ruimte voor koppels en kleine gezinnen.',
                'price_per_night' => 19900,
                'max_adults' => 2,
                'max_kids' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Aqua Family Lodge',
                'slug' => 'aqua-family-lodge',
                'description' => 'Perfect voor gezinnen die graag bij water en ontspanning verblijven.',
                'price_per_night' => 27900,
                'max_adults' => 2,
                'max_kids' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Secret Villa',
                'slug' => 'secret-villa',
                'description' => 'Grotere villa voor grotere groepen of meerdere volwassenen.',
                'price_per_night' => 34900,
                'max_adults' => 4,
                'max_kids' => 0,
                'is_active' => true,
            ],
        ])->map(function (array $stayData) {
            return Stay::updateOrCreate(
                ['slug' => $stayData['slug']],
                $stayData,
            );
        });

        $welcomeDrink = Extra::updateOrCreate([
            'slug' => 'welcome-drink',
        ], [
            'name' => 'Welcome drink',
            'description' => 'Een drankje bij aankomst.',
            'price' => 1250,
            'is_active' => true,
        ]);

        $lateCheckout = Extra::updateOrCreate([
            'slug' => 'late-checkout',
        ], [
            'name' => 'Late checkout',
            'description' => 'Later uitchecken op vertrekdag.',
            'price' => 3000,
            'is_active' => true,
        ]);

        $booking = Booking::updateOrCreate([
            'email' => 'test@example.com',
            'arrive_date' => now()->addWeek()->toDateString(),
        ], [
            'stay_id' => $stays->first()->id,
            'first_name' => 'Test',
            'last_name' => 'User',
            'phone_number' => '+31612345678',
            'leaving_date' => now()->addWeek()->addDays(2)->toDateString(),
            'number_adults' => 2,
            'number_kids' => 0,
            'special_wish' => 'Graag een rustige kamer.',
            'status' => 'pending',
            'total_price' => 52300,
        ]);

        $booking->extras()->sync([
            $welcomeDrink->id => ['quantity' => 2, 'unit_price' => $welcomeDrink->price],
            $lateCheckout->id => ['quantity' => 1, 'unit_price' => $lateCheckout->price],
        ]);

        Payment::updateOrCreate([
            'booking_id' => $booking->id,
        ], [
            'provider' => 'mollie',
            'transaction_id' => 'demo_txn_001',
            'amount' => 52300,
            'currency' => 'EUR',
            'status' => 'pending',
        ]);
    }
}
