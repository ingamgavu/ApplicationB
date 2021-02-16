<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\employee;
use Illuminate\Support\Facades\DB;
class memberController extends Controller
{
    function addData(Request $req){
     $data = new Member;
      $data->name = $req->name;
      $data->email = $req->email;
      $data->address =$req->address;
      $data->save();
      return redirect("list");
    }
   //function that will call all the data item in the database
  function list(Request $req){
            $data= Member::all();
            return view("list",['data'=>$data]);
  }
  //function to delete data in the database that we have
  function delete($id){
            DB::table('members')->where('Id',$id)->delete($id);
            return redirect('list');
  }
  function showData($id){
      $data =  Member::find($id);
      return view('edit',['data'=>$data]);
  }
  function update(Request $req){
      
       $data = Member::find($req->id);
      $data->name = $req->name;
      $data->email = $req->email;
      $data->address = $req->address;
      $data = Member::where('Id',$req->id)->update(array(
                         'Name'=>$req->name,
                        'Email'=>$req->email,
                          'Address'=>$req->address,));
     
      return redirect("list");
  }
}
