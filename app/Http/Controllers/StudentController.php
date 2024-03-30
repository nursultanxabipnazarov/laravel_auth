<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;



    


class StudentController extends Controller
{
    public function getMessage(){
        $user_id= Auth::user()->id;
        $message = Message::where('user_id',$user_id)->get()->toArray();
       
       return View::share(['message' => $message]);
    }
}
