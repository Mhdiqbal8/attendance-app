<?php
use App\Http\Controllers\ManajemenKaryawanController;
use App\Http\Controllers\ManagePositionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/employee', [ManajemenKaryawanController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [ManajemenKaryawanController::class, 'create'])->name('employee.create');

Route::get('/position', [ManagePositionController::class, 'index'])->name('position.index');
Route::get('/position/create', [ManagePositionController::class, 'create'])->name('position.create');