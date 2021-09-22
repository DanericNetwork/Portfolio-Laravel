<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RowController extends Controller
{
    //
    public function rowItems(){
        $count = 12; // variable met als waarde 12

        return view('row')->with(['rows'=>$count]); // einde van de functie
    }
}
