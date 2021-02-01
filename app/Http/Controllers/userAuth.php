<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    //
    function userLogin(Request $req){
        //function for the userLoging
          $data =  $req->input();
          $req->session()->put('user',$data['user']);
         return redirect('profile');
    }
}
