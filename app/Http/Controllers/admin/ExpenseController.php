<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\payments;
use Carbon\Carbon;
use DB;

class ExpenseController extends Controller
{
     public function index($project_code)
    {
        $project_code = $project_code;
        $expense=DB::table('payments')->where('project_code', $project_code)
        ->get();
        return view('admin.project_expense', compact('expense','project_code'));

    }


    public function store(Request $request)
    {   
        $currentDate = Carbon::now()->format('d-m-Y');
        
        
        $data=array(

            'title'                         => $request->title,
            'amount'                        =>$request->amount,
            'project_code'                  => $request->project_code,
            'timestamp'                     => $currentDate,
            
            
        );

        DB::table('payments')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
        
        
    }

    public function update(Request $request)
    {

            
            payments::where('id',$request->update_id)->update([
            'title'                         => $request->update_title,
            'amount'                        =>$request->update_amount
            

            ]);
            return response()->json([
            'status'=>'success',
        ]);
    }

    public function delete(Request $request)
    {
        payments::find($request->expense_id)->delete();
        // DB::table('project_bugs')->where('id',$id)->delete();
        return response()->json([
            'status'=>'success',
        ]);

    }

}
