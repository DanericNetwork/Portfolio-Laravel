<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TafelController extends Controller
{
    public function index()
    {
        return view('tafel');
    }

    public function store(Request $request) {
        // yez store sum data
        // yez verwerk de data? maar waar komt da data vandaan ma man????
        // da request
        $tafels = $request['ding'];
        return view('tafel')->with(['tafels'=>$tafels]);
    }
}
