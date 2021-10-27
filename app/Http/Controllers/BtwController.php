<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BtwController extends Controller
{
    public function index()
    {
        return view('btw');
    }

    public function store(Request $request) {
        // yez store sum data
        // yez verwerk de data? maar waar komt da data vandaan ma man????
        // da request
        $bedrag = $request['bedrag'];
        $btw = $request['btw'];
        $btwbedrag = $bedrag / 100 * $btw;
        $uit = $bedrag + $btwbedrag;
        return view('btw')->with(['bedrag'=>$bedrag, 'btw'=>$btw, 'btwbedrag'=>$btwbedrag, 'uit'=>$uit]);
    }
}
