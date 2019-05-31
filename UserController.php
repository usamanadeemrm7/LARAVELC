<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function create()
    {
    	return view('create');
    }
    public function store(Request $request)
    {	
        $this->validate($request,[
            'name'=>'required',
            'Address'=>'required',
         'CNIC'=>'required|unique:users',
         'Gender'=>'required' ,
        'Constituency'=>'required', 
         'ConstituencyA'=>'required',
         'Party'=> 'required' 
         

]);
    	User::create($request -> all());
    	return view('add');
    	return $request -> all();
    }
}