<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function createFood(Request $request)
    {
        //$food = $request->input('food');
        return view('food.index');
    }
}
