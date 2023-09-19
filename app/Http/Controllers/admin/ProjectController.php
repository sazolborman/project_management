<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{


    public function projectupdate(Request $request, $project_code)
    {
        
        $data=array(

            'client_id'=>$request->client_id,
            'title'=>$request->title,
            'description'=>$request->description,
            'budget'=>$request->budget,
            'timestamp_start'=>$request->timestamp_start,
            'timestamp_end'=>$request->timestamp_end,
            'demo_url'=>$request->demo_url,
            'progress_status'=>$request->progress_status,
            // 'company_id'=>$request->company_id,
            'staffs'=>$request->staffs,
            
            
        );

        DB::table('projects')->where('project_code',$project_code)->update($data);
        return redirect()->route('edit.project',['project_code' => $project_code])->with('success', 'successfull update');
    }
    
    public function projectedit($project_code)
    {  

        $project_code = $project_code;
        $staff = DB::table('staffs')->get();
        $client = DB::table('clients')->get();
        $project = DB::table('projects')->where('project_code', $project_code)->get();
        return view('admin.project_update', compact('project','project_code','client','staff'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project=DB::table('projects')
            ->leftjoin('clients','projects.client_id','clients.id')
            ->select('projects.*', 'clients.name as client_name')
            ->get();
        return view('admin.project_list', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client=DB::table('clients')->get();
        $staff=DB::table('staffs')->get();
        return view('admin.project_add',compact('client','staff'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $project_code = random_int(10000000, 99999999);

        $data=array(

            'client_id'                 =>$request->client_id,
            'title'                     =>$request->title,
            'description'               =>$request->description,
            'budget'                    =>$request->budget,
            'timestamp_start'           =>$request->timestamp_start,
            'timestamp_end'             =>$request->timestamp_end,
            'demo_url'                  =>$request->demo_url,
            'progress_status'           =>$request->progress_status,
            // 'company_id'             =>$request->company_id,
            'staffs'                    =>$request->staffs,
            'project_code'              => $project_code,

            
        );

        DB::table('projects')->insert($data);
        return redirect()->back()->with('success', 'successfull Insert');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = DB::table('projects')->first();
        return view('admin.project_room',compact('project'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($project_id)
    {
        $client=DB::table('clients')->get();
         $project = DB::table('priject')->where('id',$id)->first();
        return view('admin.project_update',compact('client','project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('projects')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'successfull Delete');
    }
}
