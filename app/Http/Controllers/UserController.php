<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    
    public function edit()
    {
        $user = Auth::user();
        return view('profile', [ 'user' => $user ]);
    }
    
    public function film($id)
    {
        $film = \App\Film::find( $id );
        return view('film', [ 'film' => $film ]);
    }
    
    public function myfilms()
    {
        $films = Auth::user()->films;
        return view('myfilms', [ 'films' => $films ]);
    }
        
    public function likeFilm($id, $like)
    {
        if($like == 'like'){
            Auth::user()->films()->sync([$id], false);
        } else{
            Auth::user()->films()->detach($id);
        }
        $films = Auth::user()->films;
        return view('myfilms', [ 'films' => $films ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
                'name'      => ['required', 'string', 'max:255'],
                'phone'     => ['required', 'string', 'min:7', 'max:15'],
                'password'  => ['required', 'string', 'min:6', 'confirmed'],
            ]);
        
        $data = $request->all();
        
        $data['password'] = Hash::make($data['password']);
        
        $user = Auth::user();
        
        $user->fill( $data )->save();
        
        return redirect('profile');
    }

}
