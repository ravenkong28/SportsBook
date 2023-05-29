<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Arenas;

class BookingController extends Controller
{
    public function my_bookings($booking_id)
    {
        $bookings = Booking::where('booking_id', $booking_id)->get();
        $arenas = Arenas::where('category_id', $category_id)->get();
        return view('bookings', ['bookings'=>$bookings, 'arenas'=>$arenas]);
    }
}
