<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorseController extends Controller
{
    //
    public function horseDetails($id=''){
        
          return view('front-end.horse-details');
    }
    public function Horses(){
         return view('front-end.horses');
    }
}
