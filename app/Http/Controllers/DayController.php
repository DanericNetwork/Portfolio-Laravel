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

    public function avgAge()
{
//array: lijst van waarden 

$leeftijden = ["", ""]; 

$aantalStudenten = 34;
//loop: while, for, foreach


$totalAge = 0; 
foreach ($leeftijden as $leeftijd) {
$totalAge = $totalAge + $leeftijd;
}

//count telt het aantal woorden in een array (lijst)
$aantalStudenten = $count($leeftijden);
$avgAgw = $totalAge / $aantalStudenten; 

// laat zien op het scherm 

echo $avgAge;

}
}
