<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
//now to get the data from the user
  function getData(Request $req){
       $req->validate([
           'username'=>'required'
       ]);
       return $req->input();
   }
}
