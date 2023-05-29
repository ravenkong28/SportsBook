<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arenas;

class ArenaController extends Controller
{
    public function top_arenas(){
        $arenas = Arenas::where('top_arenas_flag', 1)->get();
        return view('home', ['arenas'=>$arenas]);
    }

    public function arena_detail($arena_id)
    {
        $arenas = Arenas::where('arena_id', $arena_id)->get();
        return view('arena-detail', ['arenas'=>$arenas]);
    }

    public function book($arena_id)
    {
        $arenas = Arenas::where('arena_id', $arena_id)->get();
        return view('bookings', ['arenas'=>$arenas]);
    }

}
