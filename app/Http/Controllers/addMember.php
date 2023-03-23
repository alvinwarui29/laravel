<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addMember extends Controller
{
    function add(request $req){
        $data = $req->input('username');
        $this->$req->session()->flash('username',$data);
        return redirect('add');
    }
}
