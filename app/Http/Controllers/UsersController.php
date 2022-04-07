<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function dashboard(){
        return view('user.dashboard', [
            'user' => auth()->user(),
        ]);
    }
}
