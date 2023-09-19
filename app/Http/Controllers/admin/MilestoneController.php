<?php

namespace App\Http\Controllers\admin;
use App\Models\project_milestones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MilestoneController extends Controller
{
   public function index($project_code)
    {   
        
        $project_code = $project_code;
        $client_id = DB::table('projects')->where('project_code', $project_code)->value('client_id');
        $sum = project_milestones::where('project_code', $project_code)->sum('amount');
        $paid = project_milestones::where('project_code', $project_code)->where('status', 1 )->sum('amount');
        $unpaid = project_milestones::where('project_code', $project_code)->where('status', 0 )->sum('amount');
        $milestone=DB::table('project_milestones')->where('project_code', $project_code)
        ->join('clients','project_milestones.client_id','clients.id')
            ->select('project_milestones.*', 'clients.name as client_name', 'clients.address as client_address', 'clients.phone as client_phone')
        ->get();
        return view('admin.project_milestone', compact('unpaid','paid','sum','milestone','client_id','project_code'));
    } 

    public function store(Request $request)
    {   
        
        
        $data=array(

            'title'                         => $request->title,
            'amount'                        =>$request->amount,
            'status'                        => $request->status,
            'note'                          => $request->note,
            'project_code'                  => $request->project_code,
            'timestamp'                     => $request->timestamp,
            'client_id'                     => $request->client_id,
            
        );

        DB::table('project_milestones')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);  
    }

    public function update(Request $request)
    {

            
            project_milestones::where('id',$request->update_id)->update([
            'title'                         => $request->update_title,
            'amount'                        =>$request->update_amount,
            'status'                        =>$request->update_status,
            'timestamp'                     =>$request->update_timestamp,
            'note'                          =>$request->update_note
            

            ]);
            return response()->json([
            'status'=>'success',
        ]);
    }


    public function delete(Request $request)
    {
        project_milestones::find($request->milestone_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);

    }
}
