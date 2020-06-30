<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
        return view('register');
    }

    public function form(Request $request){
        //dd($request->all());
        $first_name = $request["fname"];
        $last_name = $request["lname"];
        return view('welcome', ["fname" => $first_name, "lname" => $last_name]);
    }
}
