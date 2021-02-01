<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
  function index(Request $req){
      return $req->input();
  }
}
