<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Booking;

class AdminBookingsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $bookings = Booking::all();

        $bookings = $bookings->sortBy('slot_id');

        return view('user.bookings', compact('bookings'));
    }
}
