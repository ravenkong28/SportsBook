<?php

namespace App\Http\Controllers;

use App\Models\Arenas;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // public function register(Request $request){
    //     User::create($request->all());
    //     return view('outer-home');
    // }
    public function user_detail(){
        // dd(Auth()->user()->id);
        // dd(Auth()->user()->name);
        $user = User::where('id', Auth()->user()->id)->first();
        // dd($user);
        return view('my-account',[
            "user" => $user
        ]);
    }

    public function edit_profile(){
        $user = auth()->user();
        // dd($user);
        return view('edit-profile', [
            'user'=>$user
        ]);
    }

    public function update_profile(Request $request){
        // @dd(Item::where('slug', $item->slug));
        $user = auth()->user();
        // dd($user);

        $rules = ([
            'name' => 'required|min:5',
            'email' => 'required|email:dns',
            'password' => 'required',
            'phone' => 'required',
            'age' => 'required|numeric|min:12',
            'address' => 'required',
            'region' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif|max:15000',
        ]);
        

        $validateData = $request->validate($rules);
        $validateData['password'] = Hash::make($validateData['password']);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('item-image');
        }
        
        // $validateData['user_id'] = auth()->user()->id;
        // $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        
        User::where('id', $user->id)->update($validateData);

        return redirect('/my-account')->with('success', 'Account has been updated!');
    }

    public function admin_myarenas(){
        // dd('test');
        $user = auth()->user();
        // dd($user);
        $arenas = Arenas::where('store_name', $user->store_name)->get();
        // dd($arenas);

        return view('my-arenas', [
            'user' => $user,
            'arenas' => $arenas,
        ]);
    }

    public function admin_myadminstore(){
        // dd('test2');
        $user_store_name = auth()->user();
        // dd($userCheck->store_name);

        $users = User::where('store_name',  $user_store_name->store_name)->get();
        
        return view('my-account', [
            'users' => $users,
        ]);
    }


    public function create()
    {
        
        // return ('TEST');
        return view('arenas.create',[
            'categories' => Category::all(),
            'user' => auth()->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('test');
        // return $request->file('image')->store('post-images');
        $rules = ([
            'store_name' => 'required',
            'arena_name' => 'required',
            'arena_address' => 'required',
            'arena_phone' => 'required',
            'arena_price' => 'required|numeric|min:1000',
            'category_id' => 'required',
            'arena_image' => 'required|mimes:jpeg,png,jpg,gif|max:15000',
        ]);

        $validateData = $request->validate($rules);
        // dd($validateData);
        
        if($request->file('arena_image')){
            $validateData['arena_image'] = $request->file('arena_image')->store('item-image');
        }

        Arenas::create($validateData);

        return redirect('/home/my-arenas')->with('success', 'New arena has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Arenas $arena)
    {
        // return $item;

        return view('arenas.detail',[
            "arena" => $arena
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($arena_id)
    {
        $arena =  Arenas::where('arena_id',$arena_id)->first();
        // dd($arena);
        return view('arenas.edit',[
            'user' => auth()->user(),
            'arena' => $arena,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $arena_id)
    {
        // @dd(Item::where('slug', $item->slug));
        $arena =  Arenas::where('arena_id',$arena_id)->first();
        // dd($arena);
        
        $rules = ([
            'store_name' => 'required',
            'arena_name' => 'required',
            'arena_address' => 'required',
            'arena_phone' => 'required',
            'arena_price' => 'required|numeric|min:1000',
            'category_id' => 'required',
            'arena_image' => 'required|mimes:jpeg,png,jpg,gif|max:15000',
        ]);
        
        $validateData = $request->validate($rules);
        
        if($request->file('arena_image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['arena_image'] = $request->file('arena_image')->store('item-image');
        }
        
        Arenas::find($arena_id)->update($validateData);
        // Arenas::where('arena_id', $arena->id)->first()->update($validateData);

        return redirect('/home/my-arenas')->with('success', 'Arena has been updated!');
    }


    public function destroy(Arenas $arenas)
    {
        dd($arenas);
        // if($arenas->image){
        //     Storage::delete($arenas->image);
        // }
        
        Arenas::destroy($arenas->arena_id);
        // $transaction = Transaction::where('$item_id', $arenas->id);
        // $transaction->delete();

        return redirect('/home/my-arenas')->with('success', 'Arena has been deleted!');
    }
}



