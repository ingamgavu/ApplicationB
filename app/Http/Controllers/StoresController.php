<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
class StoresController extends Controller
{
    //to display the list of stores that we have
    function index(){
        $data = store::all();
       return view('inner',['stores'=>$data]);
    }
}
