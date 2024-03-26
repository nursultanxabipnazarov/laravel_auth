<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function index(){
        $userId = Auth::user()->id;
       
        $applications = Application::where('user_id',$userId)->get();
        $allApp = Application::all();
        if(Auth::user()->status == 'student'){

            return view('student.index-app',compact('applications'));
        }else{
            return view('admin.index-app',compact('allApp'));

        }
    }


    public function create(){
       
     

        return view('student.create-application');
        
    }

    public function store(StoreApplicationRequest $request){
        
        $requestData = $request->all();

        $userId = Auth::user()->id;
        $requestData['user_id']=$userId;

        if($request->hasFile('privilege_file')){
            $file = $request->file('privilege_file');
            $fileName = time().' - ' .$file->getClientOriginalName();

            $file->move('files/',$fileName);
            $requestData['privilege_file'] = $fileName;
        }   

        Application::create($requestData);

        return  redirect()->route('indexApp');    

    }


    public function test(){
        return view('student.test');
    }
}
