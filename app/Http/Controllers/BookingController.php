<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Arenas;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{   

    public function addbooking(Request $request, $id){
        // dd($id);

        if(Auth::id()){
            $user = auth()->user();

            $arena = Arenas::where('arena_id', $id)->first();
            // @dd($arena);
            $booking = new Booking();

            $booking->user_id = $user->id;
            $booking->arena_id = $arena->arena_id;
            $booking->arena_price = $arena->arena_price;
            $booking->qty_time = $request->qty_time;

            if((Booking::where('user_id', $user->id)->count()) >=1){
                return redirect('home')->with('error', 'You need to confirm / delete your previous bookings');
            }
            $booking->save();

            return redirect('home')->with('success', 'Your orders has been book!');
        }
        else{
            return redirect('login')->with('loginError', 'Your orders has been book!');
        }
    }

    public function showbooking(){

        $user = auth()->user();
        $booking = Booking::where('user_id', $user->id)->first();
        if($booking){
            $arena = Arenas::where('arena_id', $booking->arena_id)->first();

            return view('bookings-form',[
                'booking' => $booking,
                'arena' => $arena,
                'user' => $user,
            ]);
        }
        else{
            return redirect('home')->with('error', 'You have no booking any arena');
        }

        // dd($booking);
        
    }

    public function finalizebooking(Request $request, $id){
        // @dd($id);
        $booking = Booking::find($id)->first();
        if($booking){
            $validateData['booking_date'] = $request->booking_date;
            $validateData['booking_time_start'] = $request->booking_time_start;
            $validateData['qty_time'] = $request->qty_time;
            
            // dd($validateData);
            $validateData['user_id'] = $booking->user_id;
            $validateData['arena_id'] = $booking->arena_id;
            $validateData['arena_price'] = $booking->arena_price;
            $arena = Arenas::where('arena_id', $booking->arena_id)->first();
            // dd($arena);
            $validateData['total_price'] = $arena->arena_price * $request->qty_time;
            
            // dd($validateData);

            Transaction::create($validateData);
            Booking::destroy($id);

            return redirect('/home')->with('success', 'Your Booking Transaction Success Confirmed !!');
        }

        // dd($booking);        
    }



    public function deletebooking($id){
        Booking::destroy($id);
        // dd($booking);

        return redirect('home')->with('success', 'Book arena has been deleted!');
    }

    public function transaction(){
        $user = auth()->user();
        $transactions = Transaction::all()->where('user_id', $user->id);
        if($transactions->count() > 0){
            // dd($transactions);
            return view('my-transaction',[
                'transactions' => $transactions,
                'user' => $user
            ]);
        }
        else{
            return redirect('home')->with('error', 'You have no purchase any arena');
        }

        // dd($booking);
        
    }
}
