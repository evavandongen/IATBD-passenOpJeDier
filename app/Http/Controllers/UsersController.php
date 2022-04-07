<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function dashboard(){
        return view('user.dashboard', [
            'user' => auth()->user(),
            'pets' => \App\Models\Pet::all(),
            'types_of_pets' => \App\Models\TypeOfPet::all(),
        ]);
    }

    public function account(){
        return view('user.account', [
            'user' => auth()->user(),
            'users' => \App\Models\User::all(),
            'pets' => \App\Models\Pet::all(),
        ]);
    }
}

