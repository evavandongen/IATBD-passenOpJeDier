<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function dashboard(){
        return view('user.dashboard', [
            'thisuser' => auth()->user(),
            'pets' => \App\Models\Pet::all(),
            'types_of_pets' => \App\Models\TypeOfPet::all(),
        ]);
    }

    public function account(){
        return view('user.account', [
            'thisuser' => auth()->user(),
            'users' => \App\Models\User::all(),
            'pets' => \App\Models\Pet::all(),
        ]);
    }

    public function detail($id){
        return view('user.profile', [
            'thisuser' => auth()->user(),
            'allUsers' => \App\Models\User::all(),
            'user'=> \App\Models\User::find($id),
            'reviews' => \App\Models\Review::all()
        ]);
    }

    public function blocked(){
        return view('blocked', [
            'thisuser' => auth()->user()
        ]);
    }
}

