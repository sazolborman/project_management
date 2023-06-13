<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
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
        return view('admin.project_add',compact('client'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $project_code = random_int(100000, 999999);

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
            'project_code'=> $project_code,

            
        );

        DB::table('projects')->insert($data);
        return redirect()->back()->with('success', 'successfull Insert');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client=DB::table('clients')->get();
         $project = DB::table('priject')->where('id',$id)->first();
        return view('admin.project.edit',compact('project','client'));
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
