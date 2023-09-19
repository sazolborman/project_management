<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ProjectNoteController extends Controller
{
    public function index($project_code)
    {
        $project_code = $project_code;
        $project_note=DB::table('projects')->where('project_code', $project_code)
        ->value('project_note');
        session(['project_code' => $project_code]);
        return view('admin.project_note', compact('project_note','project_code'));

    }

    public function update(Request $request)
    {   
        
        $data=array(

            'project_note'                         => $request->project_note
            
        );

        DB::table('projects')->where('project_code', $request->test)->update($data);

         return response()->json([
            'status'=>'success',
        ]);
  
    }
}
