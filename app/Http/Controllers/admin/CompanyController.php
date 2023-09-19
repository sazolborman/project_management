<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\companies;
use DB;

class CompanyController extends Controller
{
    public function index()
    {   
        $company=DB::table('companies')
        ->leftjoin('clients','companies.client_id','clients.id')
            ->select('companies.*', 'clients.name as client_name')
        ->get();
        return view('admin.company', compact('company'));
    }

     public function add(Request $request)
    {   
        
        $data=array(

            'name'                        => $request->name,
            'email'                       =>$request->email,
            'address'                     => $request->address,
            'phone'                       =>$request->phone,
            'website'                     =>$request->website,
            'client_id'                    =>$request->client_id
        );

        DB::table('companies')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
        
        
    }

     public function update(Request $request)
    {


            companies::where('id',$request->update_id)->update([
            'name'                        => $request->update_name,
            'email'                       =>$request->update_email,
            'address'                     => $request->update_address,
            'phone'                       =>$request->update_phone,
            'website'                     =>$request->update_website,
            'client_id'                    =>$request->update_client_id,
            ]);
            return response()->json([
            'status'=>'success',
        ]);
    }


    public function delete(Request $request)
    {
        companies::find($request->company_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);
    }
}
