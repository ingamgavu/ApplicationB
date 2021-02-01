<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserController extends Controller
{
    //to make a function to add a user
    function addMember(Request $req){
       $data =  $req -> input('user');
       $req->session()->flash('user',$data);
       return redirect('add');
    }
}
