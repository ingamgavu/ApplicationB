<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\employee;
use Illuminate\Support\Facades\DB;
class memberController extends Controller
{
   //function that will call all the data item in the database
    function index(){
        return "this is the controller";
    }
}
