<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MavroController extends Controller
{
    //

    public function provideHelp(){
        return view('mavro.provideHelp');

    }

    public function getHelp(){

    }
}
