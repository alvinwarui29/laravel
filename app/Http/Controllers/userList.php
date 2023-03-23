<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userList extends Controller
{
    function list(){
        return view('list');
    }
}
