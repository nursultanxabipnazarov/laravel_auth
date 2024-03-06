<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFloorRequest;
use App\Models\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{

    public function index()
    {

        return view('admin.index-floor');
    }

    public function create()
    {

        return view('admin.create-floor');
    }

    public function store(StoreFloorRequest $request)
    {
        
        Floor::create([
            'name' => $request->name,
            'floor_number' => $request->floor_number,
            'type' => $request->type,
        ]);

        return redirect()->route('indexFloor')->with('message','Floor created Successfuly!');

    }
}