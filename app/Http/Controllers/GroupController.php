<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Models\Faculty;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

         $groups =  DB::table('groups')
                        ->join('faculties','groups.fakultet_id','=','faculties.id')
                        ->select('groups.*','faculties.name as fakultetName')
                        ->get();
       
        return view('admin.index-group',compact('groups'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultets = Faculty::all();
        return view('admin.create-group',compact('fakultets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        Group::create($request->all());

        Alert::success('Successfuly!', 'Grouppa  qosıldı');
        return redirect()->route('indexGroup');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
