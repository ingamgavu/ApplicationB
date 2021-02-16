<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
   
  function user(Request $req){
         $username = $req->input();
         $req->session()->put('user',$username['user']);
         $req->session()->put('password',$username['password']);
        //now to user a redirect to a view that will show the username and the password of the user
        return redirect('profile');
  }

}
