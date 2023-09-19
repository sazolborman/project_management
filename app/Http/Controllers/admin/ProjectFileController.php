<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProjectFileController extends Controller
{
    public function index($project_code)
    {
        $project_code = $project_code;
        $project_file=DB::table('project_files')->where('project_code', $project_code)
        ->get();
        return view('admin.project_file', compact('project_file','project_code'));

    }
}
