<?php

use App\Http\Controllers\{FirstController, ProjectController, Voyager\EquipmentController};
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', [FirstController::class, 'equip'])->name('equipment');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/tester', [ProjectController::class, 'tester'])->name('tester');
Route::get('/projects/{slug}', [ProjectController::class, 'detail'])->name('detail');
Route::resource('delete',FirstController::class)->names('delete');
Route::delete('/projects/{slug}/{id}', [ProjectController::class, 'destroy']);


Route::group(['prefix' => 'admin'], function () {
    Route::get('equipment-models/activity',[EquipmentController::class, 'activity'])->name('equipment-models.activity');
    Voyager::routes();

});


