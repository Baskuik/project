<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Extra;
use App\Models\Stay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Require authentication for all booking actions.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the booking form + the user's own bookings.
     */
    public function index()
    {
        $stays  = Stay::where('is_active', 1)->orderBy('price_per_night')->get();
        $extras = Extra::where('is_active', 1)->get();

        $myBookings = Booking::with('stay')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->get();

        return view('bookings', compact('stays', 'extras', 'myBookings'));
    }

    /**
     * Store a new booking.
     */
    public function store(Request $request)
    {
        // ── 1. Basis validatie ───────────────────────────────────────────
        $validated = $request->validate([
            'stay_id'      => ['required', 'exists:stays,id'],
            'first_name'   => ['required', 'string', 'min:2', 'max:80',
                               'regex:/^[\pL\s\-\']+$/u'],          // only letters/spaces/hyphens
            'last_name'    => ['required', 'string', 'min:2', 'max:80',
                               'regex:/^[\pL\s\-\']+$/u'],
            'email'        => ['required', 'email:rfc,dns'],        // strict e-mail check
            'phone_number' => ['required', 'string',
                               'regex:/^\+?[0-9][0-9\s\-]{6,18}[0-9]$/'],  // real phone
            'arrive_date'  => ['required', 'date', 'after:today'],
            'leaving_date' => ['required', 'date', 'after:arrive_date'],
            'number_adults'=> ['required', 'integer', 'min:1'],
            'number_kids'  => ['nullable', 'integer', 'min:0'],
            'extras'       => ['nullable', 'array'],
            'extras.*'     => ['exists:extras,id'],
            'special_wish' => ['nullable', 'string', 'max:1000'],
        ], [
            // Dutch error messages
            'first_name.regex'   => 'De voornaam mag alleen letters, spaties en koppeltekens bevatten.',
            'last_name.regex'    => 'De achternaam mag alleen letters, spaties en koppeltekens bevatten.',
            'email.email'        => 'Voer een geldig e-mailadres in.',
            'phone_number.regex' => 'Voer een geldig telefoonnummer in, bijv. +31 6 12 34 56 78.',
            'arrive_date.after'  => 'De aankomstdatum moet in de toekomst liggen.',
            'leaving_date.after' => 'De vertrekdatum moet na de aankomstdatum liggen.',
        ]);

        // ── 2. Gast-limiet controleren op basis van de gekozen stay ──────
        $stay       = Stay::findOrFail($validated['stay_id']);
        $numAdults  = (int) ($validated['number_adults'] ?? 1);
        $numKids    = (int) ($validated['number_kids'] ?? 0);

        if ($numAdults > $stay->max_adults) {
            return back()
                ->withInput()
                ->withErrors(['number_adults' =>
                    "Dit verblijf heeft maximaal {$stay->max_adults} volwassene(n)."]);
        }

        if ($numKids > $stay->max_kids) {
            return back()
                ->withInput()
                ->withErrors(['number_kids' =>
                    "Dit verblijf heeft maximaal {$stay->max_kids} kind(eren)."]);
        }

        // ── 3. Prijs berekenen (opgeslagen in centen) ────────────────────
        $arrive   = new \DateTime($validated['arrive_date']);
        $leaving  = new \DateTime($validated['leaving_date']);
        $nights   = max(1, $arrive->diff($leaving)->days);

        $stayTotal   = $stay->price_per_night * $nights;
        $extrasTotal = 0;

        $selectedExtras = [];
        if (!empty($validated['extras'])) {
            $extrasModels = Extra::whereIn('id', $validated['extras'])->get();
            foreach ($extrasModels as $extra) {
                $extrasTotal += $extra->price;
                $selectedExtras[$extra->id] = [
                    'quantity'   => 1,
                    'unit_price' => $extra->price,
                ];
            }
        }

        $totalPrice = $stayTotal + $extrasTotal;

        // ── 4. Boeking opslaan ───────────────────────────────────────────
        $booking = Booking::create([
            'stay_id'      => $stay->id,
            'user_id'      => Auth::id(),
            'first_name'   => $validated['first_name'],
            'last_name'    => $validated['last_name'],
            'email'        => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'arrive_date'  => $validated['arrive_date'],
            'leaving_date' => $validated['leaving_date'],
            'number_adults'=> $numAdults,
            'number_kids'  => $numKids,
            'special_wish' => $validated['special_wish'] ?? null,
            'status'       => 'pending',
            'total_price'  => $totalPrice,
        ]);

        // ── 5. Extras koppelen ───────────────────────────────────────────
        if (!empty($selectedExtras)) {
            $booking->extras()->sync($selectedExtras);
        }

        // ── 6. Terugsturen met succesmelding + totaalprijs ───────────────
        return redirect()
            ->route('bookings.index')
            ->with('booking_success', true)
            ->with('booking_total', $totalPrice);   // in centen; view formatteert naar euro
    }
}