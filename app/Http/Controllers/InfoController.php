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
    $highlights=$reshighlights[0];
    
    // settings data
    $name=$settings['name'];
    $head=$settings['head'];
    $function=$settings['function'];
    $image=$settings['image'];
    $description=$settings['description'];
    // return the view with the data
    // dd($settings);
    return view('index', compact('name','head','function', 'image', 'description', 'projects', 'highlights'));
    }
}
