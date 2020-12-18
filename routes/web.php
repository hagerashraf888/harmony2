<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProjectController;


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
    return view('welcome');
});

Route::get('/admin/get_projects', [ProjectController::class, 'get_projects'])->name('get_projects');

Route::get('/admin/add_project_page', [ProjectController::class, 'add_project_page'])->name('add_project_page');
Route::post('/admin/add_project', [ProjectController::class, 'add_project'])->name('add_project');

Route::get('/admin/edit_project_page/{id}', [ProjectController::class, 'edit_project_page'])->name('edit_project_page');
Route::post('admin/update_project/{id}',[ProjectController::class, 'update_project'])->name('update_project');

Route::get('/admin/delete_project/{id}', [ProjectController::class, 'delete_project'])->name('delete_project');
