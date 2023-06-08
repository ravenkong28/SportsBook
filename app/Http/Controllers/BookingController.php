<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Arenas;
use App\Models\BookingDetail;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{   
    public function index($id){
        // @dd($id);
        $arena  = Arenas::where('arena_id', $id)->get();
        // dd($arena);
        return view('bookings-form',[
            'arenas' => $arena,
            'name' => Auth::user()->name,
        ]);
    }

    public function pesan(Request $request, $id){
        @dd($id);

        $arena = Arenas::where('arena_id', $id)->first();
        // $tanggal = Corbon::now();
        
        $validateData = $request->validate([
            'date' => 'requried',
            'time_start' => 'date_format:H:i',
            // 'time_end' => 'date_format:H:i|after:time_start',
            'qty_time' => 'required|numeric|max:3',
        ]);

        $validateData['user_id'] = Auth::user()->id;
        $validateData['status'] = 0;
        $validateData['total_price'] = $arena->arena_price * $request->qty_time;
        
        if($validateData){
            Booking::create($validateData);
        }
        

        $booking = Booking::where('user_id', Auth::user()->id)->where('status',0)->first();

        $cek_pesanan_detail = BookingDetail::where('arena_id', $arena->id)->where('booking_id', $booking->id)->first();

        if(!$cek_pesanan_detail){
            BookingDetail::create([
                'arena_id' => $arena->id,
                'booking_id' => $booking->id,
                'qty_time' => $request->qty_time,
                'total_price' => $arena->arena_price * $request->qty_time,
            ]);
            @dd('registrasi berhasil');
        }

        
    }


    // public function store(Request $request)
    // {   
    //     $booking_detail = Booking_detail::create([]);

    //     Booking::create([
    //         'user_id' => Auth::user()->id,
    //         'arena_id' => $request->arena_id,
    //         'booking_detail_id' => $booking_detail['booking_detail_id'],
    //     ]);

    //     return redirect('/booking-form')->with('success', 'Arena Has Been Selected to Book!'); 
    // }

    // //tampilin booking-form
    // public function form(){
    //     $booking = Booking::where('user_id', Auth::user()->id)->first();
        
    //     return view('bookings-form',[
    //         'booking' => $booking,
    //         'arenas' => Arenas::where('arena_id', $booking->arena_id)->get()
    //     ]);
    // }

    // //masukkan ke booking_detail
    // public function formstore(Request $request)
    // {
    //     @dd();
    //     // $booking = Booking::where('booking_id', $id)->first();

    //     $qty_time = $request->qty_time;

    //     $rules = ([
    //         'date' => 'requried',
    //         'time_start' => 'date_format:H:i',
    //         // 'time_end' => 'date_format:H:i|after:time_start',
    //         'qty_time' => 'required|numeric|max:3',
    //     ]);

    //     // $validateData = $request->validate($rules);
    //     // $validateData['total_price'] = $qty_time * $booking->arena->arena_price;
        

    //     // Booking::where('booking_id', $arena->booking->id)->update($validateData);

    //     return redirect('/booking-form')->with('success', 'Arena Has Been booked, Please Confirm Your Payment In My Bookings');
        
    // }

    // public function overview_bookings()
    // {
    //     $bookings = Booking::where('user_id', Auth::user()->id)->first();
    //     // @dd($bookings);
    //     $arenas = Arenas::where('arena_id', $bookings->arena_id)->get();
    //     // @dd($arenas);
    //     return view('bookings', ['bookings'=>$bookings, 'arenas'=>$arenas]);
    // }

}
