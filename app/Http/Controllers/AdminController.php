<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.admin', [
            'thisuser' => auth()->user(),
            'users' => \App\Models\User::all(),
        ]);
    }

    public function block($id){
        $user = \App\Models\User::find($id);

        $user->blocked = true;

        try {
            $user->save();
            return redirect('/admin');
        } catch (Exception $e){
            return redirect('/admin');
        };
    }

    public function unblock($id){
        $user = \App\Models\User::find($id);

        $user->blocked = false;

        try {
            $user->save();
            return redirect('/admin');
        } catch (Exception $e){
            return redirect('/admin');
        };
    }

}
