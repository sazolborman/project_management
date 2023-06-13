<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ProjectRoomController;
use App\Http\Controllers\admin\TasksController;
use App\Http\Controllers\admin\StaffController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// client route----------
Route::get('/person', [AdminController::class, 'index'])->name('client');
Route::post('/add_client', [AdminController::class, 'addclient'])->name('add.client');
Route::post('/update/client', [AdminController::class, 'updateclient'])->name('update.client');
Route::post('/delete/client', [AdminController::class, 'deleteclient'])->name('delete.client');
// Task route--------
Route::get('/task', [TasksController::class, 'index'])->name('task.index');
Route::post('/task/add', [TasksController::class, 'store'])->name('task.store');
Route::post('/update/task', [TasksController::class, 'update'])->name('task.update');
Route::post('/delete/task', [TasksController::class, 'delete'])->name('task.delete');
// project resource route------
Route::resource('project',ProjectController::class);
// Projectroom resource route----
Route::resource('projectroom',ProjectRoomController::class);
// staff route------
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::post('/staff/add', [StaffController::class, 'store'])->name('staff.store');
Route::post('/update/staff', [StaffController::class, 'update'])->name('staff.update');
Route::post('/delete/staff', [StaffController::class, 'delete'])->name('staff.delete');

require __DIR__.'/auth.php';
