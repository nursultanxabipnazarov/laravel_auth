<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create(){

        return view('student.create-application');
        
    }

    public function store(Request $request){
        dd($request->all());
    }


    public function test(){
        return view('student.test');
    }
}
