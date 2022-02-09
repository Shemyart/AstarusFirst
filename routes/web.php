<?php

use App\Http\Controllers\{FirstController, ProjectController};
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
Route::get('/', [FirstController::class, 'home'])->name('homepage');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::resource('delete',FirstController::class)->names('delete');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
