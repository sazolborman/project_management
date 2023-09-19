<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProjectDashboardController extends Controller
{
    public function index($project_code)
    {
        $project_code = $project_code;
        return view('admin.project_dashboard', compact('project_code'));

    }
}
