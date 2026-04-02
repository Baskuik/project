<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Extra;
use App\Models\Stay;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BookingController extends Controller
{
    public function create(): View
    {
        return view('bookings', [
            'user' => auth()->user(),
            'stays' => Stay::query()->where('is_active', true)->orderBy('name')->get(),
            'extras' => Extra::query()->where('is_active', true)->orderBy('name')->get(),
        ]);
    }

    public function store(StoreBookingRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $stay = Stay::query()->findOrFail($validated['stay_id']);
        $arriveDate = Carbon::parse($validated['arrive_date']);
        $leavingDate = Carbon::parse($validated['leaving_date']);
        $nights = max(1, $arriveDate->diffInDays($leavingDate));
        $extras = Extra::query()->whereIn('id', $validated['extras'] ?? [])->get()->keyBy('id');

        $totalPrice = ($stay->price_per_night * $nights);
        foreach (($validated['extras'] ?? []) as $extraId) {
            $extra = $extras->get($extraId);
            if ($extra) {
                $totalPrice += $extra->price;
            }
        }

        $booking = Booking::create([
            'stay_id' => $stay->id,
            'user_id' => $request->user()->id,
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'arrive_date' => $validated['arrive_date'],
            'leaving_date' => $validated['leaving_date'],
            'number_adults' => $validated['number_adults'],
            'number_kids' => $validated['number_kids'] ?? 0,
            'special_wish' => $validated['special_wish'] ?? null,
            'status' => 'pending',
            'total_price' => $totalPrice,
        ]);

        foreach (($validated['extras'] ?? []) as $extraId) {
            $extra = $extras->get($extraId);
            if ($extra) {
                $booking->extras()->attach($extra->id, [
                    'quantity' => 1,
                    'unit_price' => $extra->price,
                ]);
            }
        }

        $booking->payment()->create([
            'provider' => 'manual',
            'transaction_id' => null,
            'amount' => $totalPrice,
            'currency' => 'EUR',
            'status' => 'pending',
        ]);

        return back()
            ->with('booking_success', true)
            ->with('booking_total', $totalPrice);
    }
}
