<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class userList extends Controller
{
    function list(){
        $data= Member::all();
        return view('list',['members'=>$data]);
    }
}
