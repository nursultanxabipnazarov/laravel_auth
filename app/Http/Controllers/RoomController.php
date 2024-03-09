<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\select;

class RoomController extends Controller
{


    public function index(){
       
        // $rooms = Room::paginate(10);

        $rooms = DB::table('rooms')
                     ->join('floors','rooms.floor_id','=','floors.id')
                     ->select('rooms.*','floors.name as floor_name')
                     ->paginate(10);



        return view('admin.index-room',compact('rooms'));
    }

    public function create()
    {
        $floors = Floor::all();
        return view('admin.create-room',compact('floors'));
    }

    public function store(StoreRoomRequest $request){

        Room::create($request->all());
        Alert::success('Successfuly!', 'Xana qosıldı');
        return redirect()->route('indexRoom');

    }

}
