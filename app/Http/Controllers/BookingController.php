<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Arenas;
use App\Models\Transaction;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

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
            // $booking->qty_time = $request->qty_time;

            if((Booking::where('user_id', $user->id)->count()) >=1){
                return redirect('home')->with('error', 'You need to confirm / delete your previous bookings');
            }
            $booking->save();

            return redirect('/my-bookings')->with('success', 'Your orders has been book!');
        }
        else{
            return redirect('login')->with('loginError', 'You need to login first!');
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
            $validateData = $request->validate([
                'booking_date' => [new DateBetween],
                'booking_time_start' => [new TimeBetween],
                'booking_time_end' => [new TimeBetween],
            ]);
            $date = Carbon::parse($request->booking_date)->toDateString();
            // dd($date);
            $start = Carbon::parse($request->booking_time_start);
            $finish = Carbon::parse($request->booking_time_end);
            $user = $booking->user_id;
            $arena_id = $booking->arena_id;
            
            $qty_time = round($start->diffInMinutes($finish)/60);
            
            $transactions = Transaction::all();
            foreach($transactions as $transaction){
                if($transaction['arena_id'] == $arena_id){
                    if($transaction['booking_date'] == $date){
                        if($start->between($transaction['booking_time_start'],$transaction['booking_time_end']) 
                        || $finish->between($transaction['booking_time_start'],$transaction['booking_time_end'])){
                            return redirect()->back()->with('error', 'Your Booking Time Has Already Booked by Others !');
                        }
                    }
                }
            }


            // dd($validateData);
            $validateData['qty_time'] = $qty_time;
            $validateData['user_id'] = $user;
            $validateData['arena_id'] = $arena_id;
            $validateData['arena_price'] = $booking->arena_price;
            $arena = Arenas::where('arena_id', $booking->arena_id)->first();
            $validateData['total_price'] = $arena->arena_price * $qty_time;
            
            Transaction::create($validateData);
            Booking::destroy($id);

            return redirect('/my-transaction')->with('success', 'Your Booking Transaction Success Confirmed !!');
        }

        // dd($booking);        
    }

    // protected static function booted(): void {
    //     Str::createUuidsNormally(function (Transaction $transaction){
    //         $transaction->id = Str::uuid()->toString();
    //     });
    // }




    public function deletebooking($id){
        Booking::destroy($id);

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

    public function confirmpayment($id){
        // $user = auth()->user->id;
        $transaction = Transaction::find($id);
        // dd($transaction);
        return view('payment',[
            'transaction' => $transaction
        ]);
    }

    public function donepayment($id){
        $transaction = Transaction::find($id);

        $transaction->status_payment = 1;
        $transaction->save();

        return redirect('/my-transaction')->with('success', 'Payment Successfull!! Enjoy');
    }
}
