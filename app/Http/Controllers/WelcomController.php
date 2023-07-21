<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function scan(){
        return view('/scan');
    }

    public function validasi (Request $request,$id){
        $qr = $request->id;
        $data = 39;
        if($qr == $data){
            return response()->json([
                'status'=>200,
            ]);
        }else{
            return response()->json([
                'status'=>400,
            ]);
        }
    }
}
