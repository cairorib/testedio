<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class novoSistemaController extends Controller
{
    public function teste(Request $request,$name){
        
        /* return 'ok funciona '.$name; */
        return response()->json([
            'oi'=> "ok aqui ${name} ",
            'thcau'=> $request->all()
        ]);
    }
/* 
    function (Request $request) {
        return $request->user(); */
}


