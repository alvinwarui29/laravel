<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    public function getData(Request $req){
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        return $req->input();
    }
}
