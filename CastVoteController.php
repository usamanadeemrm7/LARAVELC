<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URl;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
 

class CastVoteController extends Controller
{
   public function logs(request $request)
   {
        print_r($request-> input());

        $CNIC=$request->input('CNIC');
        echo DB::select('select `Constituency 1`,`Constituency 2` from castvote where CNIC=?',[$CNIC]);

   } 
     

   
}
?>