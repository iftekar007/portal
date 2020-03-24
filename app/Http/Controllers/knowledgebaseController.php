<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class knowledgebaseController extends Controller
{
    public function index(){
        return view('custom/knowledgebase_list');
    }
    //
}
