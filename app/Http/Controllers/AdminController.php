<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function show($id){
        $app = Application::findOrFail($id);

    return view('admin.single-app',compact('app'));


    }
}
