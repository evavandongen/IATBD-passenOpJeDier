<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(Request $request, \App\Models\Review $review){
        $review->review = $request->input("review");
        $review->toId = $request->input("toId");
        $review->fromId = auth()->user()->id;
        try {
            $review->save();
            return redirect('/profile/' . $request->toId);
        } catch (Exception $e){
            return redirect('/profile/' . $request->toId);
        };
    }
}
