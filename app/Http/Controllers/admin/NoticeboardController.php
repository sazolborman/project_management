<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notices;
use Carbon\Carbon;
use DB;

class NoticeboardController extends Controller
{
    public function index()
    {   
        
        $notice=DB::table('notices')
        ->join('users','notices.published_by','users.id')
            ->select('notices.*', 'users.name as user_name')
        ->get();
        return view('admin.noticeboard', compact('notice'));
    }

    public function store(Request $request)
    {   
        $currentDate = Carbon::now()->format('d-m-Y');

        $data=array(

            'title'                  => $request->title,
            'description'            =>$request->description,
            'visible_for'            => $request->visible_for,
            'published_by'           => $request->user_id,
            'date_added'             => $currentDate,
 
        );

        DB::table('notices')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
    }

    public function update(Request $request)
    {
        
            notices::where('id',$request->update_id)->update([
            'title'                         => $request->update_title,
            'description'                   =>$request->update_description,
            'visible_for'                   =>$request->update_visible_for,
            ]);
            return response()->json([
            'status'=>'success',
        ]);
    }

    public function delete(Request $request)
    {
        notices::find($request->notice_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);

    }
}
