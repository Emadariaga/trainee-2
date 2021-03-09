<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PagesController extends Controller
{
    public function index(){
        
        return view('welcome');
    
    }

    public function procesos () {
        
        $client = new Client([

            'base_uri' => 'https://desaapi.kodell.io:4343/api/procesos',
            'timeout'  => 2.0,
        ]);
        
        $response = $client->request('GET', 'procesos');
               
        $resProcesos = json_decode($response->getBody()->getContents());
        return view('procesos', compact('resProcesos'));
    }
}
