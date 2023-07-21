<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function scan(){
        return view('/scan');
    }

    public function validasi (Request $request){
        dd($request->all());
    }
}
