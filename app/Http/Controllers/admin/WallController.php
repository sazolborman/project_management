<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class WallController extends Controller
{
    public function index($project_code)
    {
        $project_code = $project_code;
        $user_id = DB::table('users')->value('id');
        $wall=DB::table('project_messages')->where('project_code', $project_code)
        ->join('users','project_messages.user_id','users.id')
            ->select('project_messages.*', 'users.name as user_name')
        ->get();
        return view('admin.project_wall', compact('wall','project_code','user_id'));

    }

    public function store(Request $request)
    {   
        $currentDate = Carbon::now()->format('d-m-Y');

        $data=array(

            'message'                      => $request->message,
            'project_code'                 => $request->project_code,
            'date'                         => $currentDate,
            'user_id'                      => $request->user_id,
 
        );

        DB::table('project_messages')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
    }
}
