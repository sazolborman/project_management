<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\clients;
use DB;
class ClientController extends Controller
{
    

    public function index()
    {   


        $client=DB::table('clients')->get();
        return view('admin.client', compact('client'));
    }

    // __add_client_in_database
    public function addclient(Request $request)
    {   
        
        $data=array(

            'name'                        => $request->name,
            'email'                       =>$request->email,
            'password'                    =>Hash::make($request->password),
            'address'                     => $request->address,
            'phone'                       =>$request->phone,
            'website'                     =>$request->website,
            'skype_id'                    =>$request->skype_id,
            'facebook_profile_link'       =>$request->facebook_profile_link,
            'linkedin_profile_link'       =>$request->linkedin_profile_link,
            'twitter_profile_link'        =>$request->twitter_profile_link,
            'short_note'                  =>$request->short_note,
 
        );

        DB::table('clients')->insert($data);

         return response()->json([
            'status'=>'success',
        ]);
        
        
    }

    // __Update_clients_in_database
    public function updateclient(Request $request)
    {


            clients::where('id',$request->update_id)->update([
            'name'                        => $request->update_name,
            'email'                       =>$request->update_email,
            'password'                    =>Hash::make($request->update_password),
            'address'                     => $request->update_address,
            'phone'                       =>$request->update_phone,
            'website'                     =>$request->update_website,
            'skype_id'                    =>$request->update_skype_id,
            'facebook_profile_link'       =>$request->update_facebook_profile_link,
            'linkedin_profile_link'       =>$request->update_linkedin_profile_link,
            'twitter_profile_link'        =>$request->update_twitter_profile_link,
            'short_note'                  =>$request->update_short_note,
            ]);
            return response()->json([
            'status'=>'success',
        ]);
    }

    //__delete student....

    public function deleteclient(Request $request)
    {
        clients::find($request->client_id)->delete();
        // DB::table('clients')->where('id',$id)->delete();
        return response()->json([
            'status'=>'success',
        ]);
    }
}
