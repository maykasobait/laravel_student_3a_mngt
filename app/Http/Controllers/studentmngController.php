<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentmngController extends Controller
{
    public function index(){
        return view('student.index');
    }
}
