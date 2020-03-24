<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('custom/user_list');

    }
    public function add(){
        return view('custom/add_edit_user');

    }
    public function submit1(Request $rq){
return $rq->input();
      //  return view('userregistration');

    }
}
