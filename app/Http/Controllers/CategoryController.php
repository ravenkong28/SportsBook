<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Arenas;

class CategoryController extends Controller
{
    public function arena_category($category_id)
    {
        $categories = Category::where('category_id', $category_id)->get();
        $arenas = Arenas::where('category_id', $category_id)->get();
        return view('category-arena', ['categories'=>$categories, 'arenas'=>$arenas]);
    }
}
