<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class userList extends Controller
{
    function list(Request $req){
       $member = new Member;
       $member->name = $req->name;
       $member->location= $req->location;
       $member->save();
       return redirect("user");
    }
}
