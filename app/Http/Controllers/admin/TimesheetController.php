<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TimesheetController extends Controller
{
    public function index($project_code)
    {   
        $project_code = $project_code;
        $timesheet=DB::table('project_timesheets')->where('project_code', $project_code)->get();
        return view('admin.project_timesheet', compact('timesheet','project_code'));
    } 

    public function store(Request $request)
    {   
        
        
        $data=array(

            'start_timestamp'               => $request->start_timestamp,
            'end_timestamp'                 =>$request->end_timestamp,
            'project_code'                  => $request->project_code,
            
            
        );

        DB::table('project_timesheets')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);  
    }
}
