<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   
  function index(Request $req){
      return DB::select("select* from users");
  }

}