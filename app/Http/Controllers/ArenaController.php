<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arenas;

class ArenaController extends Controller
{
    public function arena_detail(){
        $arenas = Arenas::get();
        return view('home', ['arenas'=>$arenas]);
    }
}
