<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OverviewController extends Controller
{
    public function index($project_code)
    {   
        $project_code = $project_code;
        //$project_code = DB::table('projects')->where('id', $id)->value('project_code');
        $project = DB::table('projects')->where('project_code', $project_code)->get();
        return view('admin.project_overview', compact('project','project_code'));
    }
}
