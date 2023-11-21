<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
     public function getAll(Request $request){

        $bands = $this->getBands();

        return response()->json($bands);
     }


     protected function getBands(){
        return [
          [  'id'=>1,
            'name'=>'ALELUIA',
            'gender'=>'Gospel'
        ],
        [  'id'=>2,
            'name'=>'Grupo Igreja',
            'gender'=>'Gospel2'
        ],
    ];
     }


     public function getById($id){
        
        foreach($this->getBands() as $_band){
            if($_band['id']==$id)
            $band = $_band;
            $band ? response()->json($band) : abort(404);
        }         
        return $band;
    }

    public function getByGender($gender){
        
        foreach($this->getBands() as $_band){
            if($_band['gender']==$gender)
            $band = $_band;
            $band ? response()->json($band) : abort(404);
        }         
        return $band;
    }

    public function store(Request $request){
        
       return  response()->json($request->input());

    }

}
