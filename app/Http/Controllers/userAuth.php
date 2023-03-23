<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    function Login(request $req){
        $data= $req->input();
        $req->session()->put('username',$data['username']);
        $req->session()->put('password',$data['password']);
        echo session('user');
       

    }
}
