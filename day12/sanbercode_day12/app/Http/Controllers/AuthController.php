<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function add(Request $request){
        $namadepan = $request->firstname;
        $namabelakang = $request->lastname;

        return view('welcome',['namadepan'=>$namadepan,'namabelakang'=>$namabelakang]);
    }
}
