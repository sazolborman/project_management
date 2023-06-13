<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\staffs;
use DB;

class StaffController extends Controller
{
    public function index()
    {   

        $staff=DB::table('staffs')->get();
        return view('admin.staff', compact('staff'));
    }

    public function store(Request $request)
    {   
        
        $data=array(

            'name'                        => $request->name,
            'email'                       =>$request->email,
            'password'                    =>Hash::make($request->password),
            'account_role_id'             => $request->account_role_id,
            'phone'                       =>$request->phone,
            'skype_id'                    =>$request->skype_id,
            'facebook_profile_link'       =>$request->facebook_profile_link,
            'linkedin_profile_link'       =>$request->linkedin_profile_link,
            'twitter_profile_link'        =>$request->twitter_profile_link,
 
        );

        DB::table('staffs')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
        
        
    }

    public function delete(Request $request)
    {
        staffs::find($request->staff_id)->delete();
        // DB::table('clients')->where('id',$id)->delete();
        return response()->json([
            'status'=>'success',
        ]);
    }
}
