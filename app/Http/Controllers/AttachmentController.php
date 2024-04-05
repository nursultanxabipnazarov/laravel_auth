<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function create(){
        return view('admin.create-attashment');
    }
}
