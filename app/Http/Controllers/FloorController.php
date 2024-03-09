<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFloorRequest;
use App\Models\Floor;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class FloorController extends Controller
{

    public function index()
    {
        $floors = Floor::paginate(2);

        $title = 'Delete Floor!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.index-floor',compact('floors'));
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


    public function destroy($id){

        $floor = Floor::findOrFail($id);

        $floor->delete();
       

        return redirect()->route('indexFloor')->with('message','Floor deleted successfuly!');

    }
}