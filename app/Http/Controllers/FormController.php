<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index() {
        // show form view to input data!!!!
        return view('form');
    }

    public function store(Request $request) {
        // yez store sum data
        // yez verwerk de data? maar waar komt da data vandaan ma man????
        // da request
        dd($request['name']);
    }
}
