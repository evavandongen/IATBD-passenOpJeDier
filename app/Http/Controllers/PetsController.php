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

    public function create(){
        return view('pet.create', [
            'thisuser' => auth()->user(),
            'users' => \App\Models\User::all(),
            'types_of_pets' => \App\Models\TypeOfPet::all(),
        ]);
    }

    public function store(Request $request, \App\Models\Pet $pet){
        $pet->name = $request->input("name");
        $pet->type = $request->input("type");
        $pet->description = $request->input("description");
        $pet->hourlyRate = $request->input("hourlyRate");
        $pet->startDate = $request->input("startDate");
        $pet->endDate = $request->input("endDate");
        $pet->startDate = $request->input("startDate");
        $pet->ownerId = auth()->user()->id;
        
        try {
            $pet->save();
            return redirect('/account');
        } catch (Exception $e){
            return redirect('/pet/create');
        };
    }

    public function delete($id)
    {
        \App\Models\Pet::where('id', $id)->delete();
        return redirect('/account');

    }

    public function request($id){
        $pet = \App\Models\Pet::find($id);

        $pet->request = true;
        $pet->sitterId = auth()->user()->id;

        try {
            $pet->save();
            return redirect('/dashboard');
        } catch (Exception $e){
            return redirect('/pets/'.$id);
        };
    }

    public function home($id){
        $pet = \App\Models\Pet::find($id);

        $pet->sitterId = null;

        try {
            $pet->save();
            return redirect('/account');
        } catch (Exception $e){
            return redirect('/account');
        };
    }

    public function reject($id){
        $pet = \App\Models\Pet::find($id);

        $pet->request = false;
        $pet->sitterId = null;

        try {
            $pet->save();
            return redirect('/account');
        } catch (Exception $e){
            return redirect('/account');
        };
    }

    public function accept($id){
        $pet = \App\Models\Pet::find($id);

        $pet->request = false;

        try {
            $pet->save();
            return redirect('/account');
        } catch (Exception $e){
            return redirect('/account');
        };
    }
}
