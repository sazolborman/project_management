<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_bugs;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;

class BugController extends Controller
{


    // public function create_bug(Request $request){

    //     $img = $request->bug_file;

    //     // $name = time().'.'.$img->getClientOriginalExtension();
    //     $image_name = $img->getClientOriginalName(); 

    //     // echo $request->file('bug_file')->storeAs('uploads', $name); // upload done
    //     $img->move(public_path('assets/images'), $image_name); // upload image
    // }

    




    public function index($project_code)
    {
        $project_code = $project_code;
        $bug=DB::table('project_bugs')->where('project_code', $project_code)
        ->join('staffs','project_bugs.assigned_staff','staffs.id')
        ->join('users','project_bugs.user_id','users.id')
            ->select('project_bugs.*', 'users.name as user_name')
        ->get();
        return view('admin.project_bug', compact('bug','project_code'));

    }

    public function store(Request $request)
    {   
        $currentDate = Carbon::now()->format('d-m-Y');
        
        
        $data=array(

            'title'                         => $request->title,
            'description'                   =>$request->description,
            'status'                        => $request->status,
            'assigned_staff'                => $request->assigned_staff,
            'project_code'                 => $request->project_code,
            'timestamp'                    => $currentDate,
            'user_id'                      => $request->user_id,
            
        );

        DB::table('project_bugs')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
        
        
    }

    
    public function update(Request $request)
    {
        
            project_bugs::where('id',$request->update_id)->update([
            'title'                         => $request->update_title,
            'description'                   =>$request->update_description,
            'assigned_staff'                =>$request->update_assigned_staff,
            'status'                        =>$request->update_status,
            ]);
            return response()->json([
            'status'=>'success',
        ]);
    }


    public function delete(Request $request)
    {
        project_bugs::find($request->bug_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);

    }
    
}
