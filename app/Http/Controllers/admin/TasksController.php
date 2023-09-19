<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_tasks;
use DB;

class TasksController extends Controller
{
    public function index($project_code)
    {   
        $project_code = $project_code;
        $tasks = DB::table('project_tasks')->where('project_code', $project_code)->get();
        return view('admin.project_task', compact('tasks','project_code'));
    }

    public function create()
    {
         $project=DB::table('projects')->get();
        return view('admin.',compact('project'));
    }
    public function show(string $id)
    {
        
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
            'project_code'                 => $request->project_code,
 
        );

        DB::table('project_tasks')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
    }


    public function update(Request $request)
    {


            project_tasks::where('id',$request->update_id)->update([
            'title'                      => $request->update_task_title,
            'description'                =>$request->update_task_description,
            'staff_id'                   =>$request->update_staff_id,
            'status'                     => $request->update_status,
            'timestamp_start'            =>$request->update_timestamp_start,
            'timestamp_end'              =>$request->update_timestamp_end,
            'task_color'                 =>$request->update_task_color,
            
            ]);
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
