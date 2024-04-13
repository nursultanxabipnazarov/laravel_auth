<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Attachment;
use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function index()
    {

        $successApp = Application::where('status', 'success')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.success-app', compact('successApp'));
    }

    public function create($id)
    {
        $app = Application::findOrFail($id);

        return view('admin.create-attashment', compact('app'));
    }

    public function store(Request $request)
    {

        $app = Application::findOrFail($request->app_id);

        $room = Room::where('id', $request->room_id)->first();

        if ($room->capacity > 0) {

            Attachment::create([
                'user_id' => $app->user_id,
                'app_id' => $app->id,
                'floor_id' => $request->floor_id,
                'room_id' => $request->room_id,
            ]);
        }

        $room->decrement('capacity');
        if ($room->capacity == 0) {
            $room->status = 0; //full
        }

        $app->status = "attached";
        $app->save();
        $room->save();

        return redirect()->route('successApp');

    }

    public function indexAttached(){
        $floors = Floor::all();

        return view('admin.index-attached',compact('floors'));
    }

    public function indexAttachedRoom($id){
        $rooms = Room::where('floor_id',$id)->get();
        return view('admin.index-attached-room',compact('rooms'));
    }


    

}
