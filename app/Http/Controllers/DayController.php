<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{
    //
    public function day()
    {
        if  (date('N') <= 5) {
            $werkdag = "It's a weekday";

            return view('day')->with(['werkdag'=>$werkdag]);
        }
    }
}
