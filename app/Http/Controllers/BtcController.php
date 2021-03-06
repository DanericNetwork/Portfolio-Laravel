<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BtcController extends Controller
{
    //

    public function showData()

{

    $response=Http::get('http://api.coindesk.com/v1/bpi/currentprice.json');
    // make request to bitcoin prices api
    $data=$response->json();
    // convert the response to json
    $btc= $data['bpi']['USD']['rate'];
    $date= $data['time']['updated'];
    // get the current bitcoin price
    return view('btc', compact('btc','date'));
    // return the view with the data
}
}
