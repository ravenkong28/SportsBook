<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arenas;
use App\Models\Category;

class ArenasController extends Controller
{
    public function top_arenas(){
        $user = auth()->user();
        $arenas = Arenas::where('banner_flag', 1)->get();

        return view('home', [
            'user' => $user,
            'arenas'=>$arenas,
            'arenas2' => Arenas::latest()->filter(request(['search', 'category']))
            ->paginate(4)->withQueryString()
        ]);
    }

    public function arena_detail($arena_id)
    {
        $arenas = Arenas::where('arena_id', $arena_id)->get();
        return view('arena-detail', ['arenas'=>$arenas]);
    }

    public function arena_category(Request $request, $category_id)
    {
        $searchTerm = $request->input('query');
        
        $categories = Category::where('category_id', $category_id)->get();
        $arenas = Arenas::where('category_id', $category_id)-> get();

        $arenas = Arenas::where('category_id', $category_id)
            ->orWhere('arena_name', $searchTerm)
            ->get();
        
        return view('category-arena', [
            'categories'=>$categories, 
            'arenas'=>$arenas, 
            'buat_validasi'=>$category_id,
            'searchTerm' => $searchTerm
        ]);
    }

    // public function book($arena_id)
    // {
    //     $arenas = Arenas::where('arena_id', $arena_id)->get();
    //     return view('bookings', ['arenas'=>$arenas]);
    // }


    

}
