<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function detail($id){
        return view('pet.detail', [
            'thisuser' => auth()->user(),
            'users' => \App\Models\User::all(),
            'pet' => \App\Models\Pet::find($id),
        ]);
    }
}
