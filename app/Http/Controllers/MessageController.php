<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    public function store(Request $request)
    {

        $app_id = $request->app_id;

        Message::create([
            'user_id' => $request->user_id,
            'app_id' => $request->app_id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        if ($request->danger == "Biykarlaw") {
            $app = Application::where('id', $app_id)->first();

            $app->status = 'Not accepted';
            $app->save();
            Alert::success('Successfuly!', 'biykarlandi ');

        } else {
            $app = Application::where('id', $app_id)->first();

            $app->status = 'success';
            $app->save();
            Alert::success('Successfuly!', 'qabillandi');
        }
        return redirect()->route('indexApp');

    }

    public function viewAll()
    {
        $userId = Auth::user()->id;
        $myMessages = Message::where('user_id',$userId)->get();
        foreach ($myMessages as  $value) {
            $value->status = 1;
            $value->save();
        }

        return redirect()->route('dashboard');


    }


 

}
