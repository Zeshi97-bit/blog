<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;

class UserController extends Controller
{
    //This operation is for retrive data from database
    function retriveData(){
      $data= doctor::all();
      return view('list',['members'=>$data]);
    }
    function delete($id){
      $data=doctor::find($id);
      $data->delete();
      return redirect('list');
    }
    function showData($id){
    $data=doctor::find($id);
    return view('edit',['data'=>$data]);
  }
  function update(Request $req){
      $data=doctor::find($req->id);
      $data->name=$req->name;
      $data->email=$req->email;
      $data->address=$req->address;
      $data->save();
      return redirect('list');
  }
}
