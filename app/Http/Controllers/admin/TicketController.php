<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class TicketController extends Controller
{
    
    public function index()
    {
        $ticket=DB::table('tickets')
            ->leftjoin('clients','tickets.client_id','clients.id')
            ->select('tickets.*', 'clients.name as client_name')
            ->get();
        return view('admin.ticket_list', compact('ticket'));
    }

    public function create()
    {
        $project=DB::table('projects')->get();
        $client=DB::table('clients')->get();
        return view('admin.ticket_add',compact('client','project'));
        
    }

    public function store(Request $request)
    {
        
        $ticket_code = random_int(1000000, 9999999);
        $currentDate = Carbon::now()->format('d-m-Y');
        $status = "opened";

        $data=array(

            'client_id'                    =>$request->client_id,
            'title'                        =>$request->title,
            'priority'                     =>$request->priority,
            'project_code'                 =>$request->project_code,
            'description'                  =>$request->description,
            'ticket_code'                  => $ticket_code,
            'status'                       => $status,
            'timestamp'                    => $currentDate,
            
        );

        DB::table('tickets')->insert($data);
        return redirect()->back()->with('success', 'successfull Insert');
    }

    public function view(Request $request, $ticket_code)
    {
        
        return view('admin.ticket_view');
    }

    public function delete(string $id)
    {
        DB::table('tickets')->where('id',$id)->delete();
        return redirect()->back()->with('success', 'successfull Delete');
    }
}
