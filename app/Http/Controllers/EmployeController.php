<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeController extends Controller
{
    //
    function index(){
        return DB::table('employee')
        ->join('company','employee_Id',"=",'company.employee_Id')->get();
    }
}
