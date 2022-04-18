<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InfoController extends Controller
{
    //

    public function showData() {

    $client = new Client();
    $res = $client->request('GET', 'http://portfolio.my-project.nl/api');

    $result= $res->getBody();
    $result=json_decode($result, true);
    $ressettings=array($result['settings']);
    $resprojects=array($result['projects']);
    $reshighlights=array($result['highlights']);

    $settings=$ressettings[0];
    $projects=$resprojects[0];
    $highlights=array($reshighlights[0]);

    // highlights
    $highlight1=$highlights[0][0];
    $highlight2=$highlights[0][1];
    // return the view with the data
    // dd($highlight1->name);
    return view('index', compact('projects', 'highlight1', 'highlight2', 'highlights', 'settings'));
    }
}
