<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class UsersController extends Controller
{
    //
    function getData(Request $req){
        $validateData = $req->validate([
             'username'=>'required|max:12',
             'password'=>'required|min:8',
        ]);
        return $req->input();
    }
  
}
