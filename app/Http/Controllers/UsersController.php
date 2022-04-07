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
}
