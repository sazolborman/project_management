<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_tasks;
use DB;

class TasksController extends Controller
{
    public function index()
    {
        $task=DB::table('project_tasks')
            ->get();
        return view('admin.project_task', compact('task'));
    }

    public function store(Request $request)
    {
        $data=array(

            'title'                        => $request->title,
            'description'                  =>$request->description,
            'staff_id'                     => $request->staff_id,
            'status'                       => $request->status,
            'timestamp_start'              =>$request->timestamp_start,
            'timestamp_end'                =>$request->timestamp_end,
            'task_color'                   =>$request->task_color,
            
 
        );

        DB::table('project_tasks')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
    }

    public function delete(Request $request)
    {
        project_tasks::find($request->task_id)->delete();
        // DB::table('clients')->where('id',$id)->delete();
        return response()->json([
            'status'=>'success',
        ]);

    }
    
}
