<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFakultyRequest;
use App\Models\Faculty;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class FacultyController extends Controller
{

    public function index(){

        $fakultets = Faculty::paginate(10);
        return view('admin.index-fakultet',compact('fakultets') );
    }


    public function create()
    {

        return view('admin.create-fakultet');
    }



    public function store(StoreFakultyRequest $request){

        Faculty::create([
            'name'=>$request->name
        ]);
        Alert::success('Successfuly!', 'Fakultet  qosıldı');
        return redirect()->route('indexFakultet');
    }
}
