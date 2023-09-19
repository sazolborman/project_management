<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ProjectRoomController;
use App\Http\Controllers\admin\TasksController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\BugController;
use App\Http\Controllers\admin\OverviewController;
use App\Http\Controllers\admin\WallController;
use App\Http\Controllers\admin\ExpenseController;
use App\Http\Controllers\admin\MilestoneController;
use App\Http\Controllers\admin\TimesheetController;
use App\Http\Controllers\admin\ProjectFileController;
use App\Http\Controllers\admin\ProjectNoteController;
use App\Http\Controllers\admin\TeamRunningTaskController;
use App\Http\Controllers\admin\NoticeboardController;
use App\Http\Controllers\admin\TicketController;
use App\Http\Controllers\admin\ProjectDashboardController;
use App\Http\Controllers\admin\CalendarController;
use App\Http\Controllers\admin\CompanyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/project/update', function () {
    return view('admin.project_update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:admin', 'verified'])->name('dashboard');

require __DIR__.'/adminauth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// client route----------
Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::post('/client/add', [ClientController::class, 'addclient'])->name('add.client');
Route::post('/client/update', [ClientController::class, 'updateclient'])->name('update.client');
Route::post('/client/delete', [ClientController::class, 'deleteclient'])->name('delete.client');
// company route----------
Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
Route::post('/company/add', [CompanyController::class, 'add'])->name('company.add');
Route::post('/company/update', [CompanyController::class, 'update'])->name('company.update');
Route::post('/company/delete', [CompanyController::class, 'delete'])->name('company.delete');
// Task route--------
Route::get('/project/task/{project_code}', [TasksController::class, 'index'])->name('task.index');
Route::get('/project/task/show/{id}', [TasksController::class, 'show'])->name('task.show');
Route::post('/project/create/task', [TasksController::class, 'create'])->name('task.created');
Route::post('/project/task/add', [TasksController::class, 'store'])->name('task.store');
Route::post('/project/task/update', [TasksController::class, 'update'])->name('task.update');
Route::post('/project/task/delete', [TasksController::class, 'delete'])->name('task.delete');
// Overview route--------
Route::get('/project/overview/{project_code}', [OverviewController::class, 'index'])->name('overview.index');
// project resource route------
Route::resource('project',ProjectController::class);
Route::get('/project/edit/{project_code}', [ProjectController::class, 'projectedit'])->name('edit.project');
Route::post('/project/update/{project_code}', [ProjectController::class, 'projectupdate'])->name('update.project');
// Projectroom resource route----
 //Route::resource('projectroom',ProjectRoomController::class);
 Route::get('projectroom/{project_code}', [ProjectRoomController::class, 'show'])->name('projectroom.show');
// 
// Route::get('single/project/{id}', [ProjectRoomController::class, 'new'])->name('single.project');


// staff route------
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::post('/staff/add', [StaffController::class, 'store'])->name('staff.store');
Route::post('/update/staff', [StaffController::class, 'update'])->name('staff.update');
Route::post('/delete/staff', [StaffController::class, 'delete'])->name('staff.delete');

// Project Dashboard route------
Route::get('/project/dashboard/{project_code}', [ProjectDashboardController::class, 'index'])->name('dashboard.index');
Route::post('/project/dashboard/add', [ProjectDashboardController::class, 'store'])->name('dashboard.store');
Route::post('/project/dashboard/update', [ProjectDashboardController::class, 'update'])->name('dashboard.update');
Route::post('/project/dashboard/delete', [ProjectDashboardController::class, 'delete'])->name('dashboard.delete');

// Bug route------
Route::get('/project/bug/{project_code}', [BugController::class, 'index'])->name('bug.index');
Route::post('/project/bug/add', [BugController::class, 'store'])->name('bug.store');
Route::post('/project/bug/update', [BugController::class, 'update'])->name('bug.update');
Route::post('/project/bug/delete', [BugController::class, 'delete'])->name('bug.delete');

// wall route------
Route::get('/project/wall/{project_code}', [WallController::class, 'index'])->name('wall.index');
Route::post('/project/wall/add', [WallController::class, 'store'])->name('wall.store');
Route::post('/project/wall/update', [WallController::class, 'update'])->name('wall.update');
Route::post('/project/wall/delete', [WallController::class, 'delete'])->name('wall.delete');

// expense route------
Route::get('/project/expense/{project_code}', [ExpenseController::class, 'index'])->name('expense.index');
Route::post('/project/expense/add', [ExpenseController::class, 'store'])->name('expense.store');
Route::post('/project/expense/update', [ExpenseController::class, 'update'])->name('expense.update');
Route::post('/project/expense/delete', [ExpenseController::class, 'delete'])->name('expense.delete');

// milestone route------
Route::get('/project/milestone/{project_code}', [MilestoneController::class, 'index'])->name('milestone.index');
Route::post('/project/milestone/add', [MilestoneController::class, 'store'])->name('milestone.store');
Route::post('/project/milestone/update', [MilestoneController::class, 'update'])->name('milestone.update');
Route::post('/project/milestone/delete', [MilestoneController::class, 'delete'])->name('milestone.delete');

// Timesheet route------
Route::get('/project/timesheet/{project_code}', [TimesheetController::class, 'index'])->name('timesheet.index');
Route::post('/project/timesheet/add', [TimesheetController::class, 'store'])->name('timesheet.store');
Route::post('/project/timesheet/update', [TimesheetController::class, 'update'])->name('timesheet.update');
Route::post('/project/timesheet/delete', [TimesheetController::class, 'delete'])->name('timesheet.delete');


// Project_file route------
Route::get('/project/file/{project_code}', [ProjectFileController::class, 'index'])->name('projectfile.index');
Route::post('/project/file/add', [ProjectFileController::class, 'store'])->name('projectfile.store');
Route::post('/project/file/update', [ProjectFileController::class, 'update'])->name('projectfile.update');
Route::post('/project/file/delete', [ProjectFileController::class, 'delete'])->name('projectfile.delete');


// Project_note route------
Route::get('/project/note/{project_code}', [ProjectNoteController::class, 'index'])->name('projectnote.index');
Route::post('/project/note/update', [ProjectNoteController::class, 'update'])->name('projectnote.update');
Route::post('/project/note/delete', [ProjectNoteController::class, 'delete'])->name('projectnote.delete');


// Team_running_task route------
Route::get('/team_running_task', [TeamRunningTaskController::class, 'index'])->name('teamtask.index');
Route::post('/team_running_task/add', [TeamRunningTaskController::class, 'store'])->name('teamtask.store');
Route::post('/team_running_task/update', [TeamRunningTaskController::class, 'update'])->name('teamtask.update');
Route::post('/team_running_task/delete', [TeamRunningTaskController::class, 'delete'])->name('teamtask.delete');

Route::post('/team_running_task/notes/update', [TeamRunningTaskController::class, 'update_notes'])->name('teamtask.update.notes');



// Noticeboard route------
Route::get('/noticeboard', [NoticeboardController::class, 'index'])->name('noticeboard.index');
Route::post('/noticeboard/add', [NoticeboardController::class, 'store'])->name('noticeboard.store');
Route::post('/noticeboard/update', [NoticeboardController::class, 'update'])->name('noticeboard.update');
Route::post('/noticeboard/delete', [NoticeboardController::class, 'delete'])->name('noticeboard.delete');

// Ticket route------
Route::get('/support_ticket/list', [TicketController::class, 'index'])->name('ticket.index');
Route::get('/support_ticket/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/support_ticket/add', [TicketController::class, 'store'])->name('ticket.store');
Route::get('/support_ticket/view{ticket_code}', [TicketController::class, 'view'])->name('ticket.view');
Route::delete('/support_ticket/delete{id}', [TicketController::class, 'delete'])->name('ticket.delete');

// calender route------
Route::get('/calendar/view', [CalendarController::class, 'index'])->name('calendar.index');
// Route::get('/calender/create', [CalenderController::class, 'create'])->name('calender.create');
// Route::post('/calender/add', [CalenderController::class, 'store'])->name('calender.store');
// Route::get('/calender/view{ticket_code}', [CalenderController::class, 'view'])->name('calender.view');
// Route::delete('/calender/delete{id}', [CalenderController::class, 'delete'])->name('calender.delete');



