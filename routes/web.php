<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProjectController;

use App\HTTP\Controllers\HarmonyController;
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\AboutController;
use App\HTTP\Controllers\ServiceController;
use App\HTTP\Controllers\ProjectsController;
use App\HTTP\Controllers\ContactsController;

use App\HTTP\Controllers\MasterRoomController;
use App\HTTP\Controllers\SingleRoomController;
use App\HTTP\Controllers\LivingRoomController;
use App\HTTP\Controllers\DinningRoomController;
use App\HTTP\Controllers\KitchenController;

use App\HTTP\Controllers\MasterBedController;
use App\HTTP\Controllers\SingleBedController;
use App\HTTP\Controllers\ClosetController;
use App\HTTP\Controllers\MirrorController;
use App\HTTP\Controllers\SofaController;
use App\HTTP\Controllers\ChairController;
use App\HTTP\Controllers\TableController;
use App\HTTP\Controllers\CupboardController;

use App\HTTP\Controllers\CartController;



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
})->name('index');


Route::get('/admin/get_projects', [ProjectController::class, 'get_projects'])->name('get_projects');

Route::get('/admin/add_project_page', [ProjectController::class, 'add_project_page'])->name('add_project_page');
Route::post('/admin/add_project', [ProjectController::class, 'add_project'])->name('add_project');

Route::get('/admin/edit_project_page/{id}', [ProjectController::class, 'edit_project_page'])->name('edit_project_page');
Route::post('admin/update_project/{id}',[ProjectController::class, 'update_project'])->name('update_project');

Route::get('/admin/delete_project/{id}', [ProjectController::class, 'delete_project'])->name('delete_project');

Route::get('/pages/harmony', [App\Http\Controllers\HarmonyController::class, 'index'])->name('harmony');
Route::get('/pages/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pages/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/pages/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/pages/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
Route::get('/pages/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');


Route::get('/pages/rooms/master', [App\Http\Controllers\MasterRoomController::class, 'index'])->name('master');
Route::get('/pages/rooms/single', [App\Http\Controllers\SingleRoomController::class, 'index'])->name('single');
Route::get('/pages/rooms/living', [App\Http\Controllers\LivingRoomController::class, 'index'])->name('living');
Route::get('/pages/rooms/dinning', [App\Http\Controllers\DinningRoomController::class, 'index'])->name('dinning');
Route::get('/pages/rooms/kitchen', [App\Http\Controllers\KitchenController::class, 'index'])->name('kitchen');


Route::get('/pages/rooms/master-bed', [App\Http\Controllers\MasterBedController::class, 'index'])->name('master-bed');
Route::get('/pages/rooms/single-bed', [App\Http\Controllers\SingleBedController::class, 'index'])->name('single-bed');
Route::get('/pages/rooms/closet', [App\Http\Controllers\ClosetController::class, 'index'])->name('closet');
Route::get('/pages/rooms/mirror', [App\Http\Controllers\MirrorController::class, 'index'])->name('mirror');
Route::get('/pages/rooms/sofa', [App\Http\Controllers\SofaController::class, 'index'])->name('sofa');
Route::get('/pages/rooms/chair', [App\Http\Controllers\ChairController::class, 'index'])->name('chair');
Route::get('/pages/rooms/table', [App\Http\Controllers\TableController::class, 'index'])->name('table');
Route::get('/pages/rooms/cupboard', [App\Http\Controllers\CupboardController::class, 'index'])->name('cupboard');


Route::get('/pages/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
