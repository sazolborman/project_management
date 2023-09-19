<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TeamRunningTaskController extends Controller
{
    public function index()
    {   
        $teamtask=DB::table('team_tasks')
        ->join('staffs','team_tasks.assigned_staff','staffs.id')
        ->select('team_tasks.*', 'staffs.name as staff_name')
        ->get();

        return view('admin.team_running_task', compact('teamtask'));
    }

    public function store(Request $request)
    {   


        $data=array(

            'title'                         => $request->title,
            'creation_timestamp'            =>$request->creation_timestamp,
            'task_status'                   => $request->task_status,
            'assigned_staff'                => $request->assigned_staff,
            'due_timestamp'                 => $request->due_timestamp,
            'task_note'                     => $request->task_note
 
        );

        DB::table('team_tasks')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
    }


    public function update_notes(Request $request)
    {
        $data = [
         'task_note' => $request->tasknote
        ];

        DB::table('team_tasks')->where('id', $request->id)->update($data);
        return response()->json([
            'status'=>'success',
        ]);

    }
}
