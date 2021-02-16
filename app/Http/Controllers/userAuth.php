<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    //
    function userLogin(Request $req){
        //function for the userLoging
         $data = $req->input();
         //now to start a session when the user has entered the information that we have
         $req->session()->put('user',$data['user']);
         $req->session()->put('pass',$data['password']);
         return redirect('profile');
    }
}
