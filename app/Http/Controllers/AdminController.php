<?php

namespace App\Http\Controllers;

use App\Models\Application;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function show($id)
    {
        $app = Application::findOrFail($id);

        $userApp = DB::table('applications')
            ->where('applications.id',$id)
            ->join('regions', 'applications.region_id', '=', 'regions.id')
            ->join('districts', 'applications.district_id', '=', 'districts.id')
            ->join('quarters', 'applications.quarter_id', '=', 'quarters.id')
            ->join('faculties', 'applications.fakultet_id', '=', 'faculties.id')
            ->join('groups', 'applications.group_id', '=', 'groups.id')

            ->select('applications.*',
                'regions.name as region',
                'districts.name as district',
                'quarters.name as quarter',
                'faculties.name as facultet',
                'groups.name as group')
            ->first();

        // dd($userApp);

        return view('admin.single-app', compact('userApp'));

    }



}
