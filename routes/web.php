<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CMSController;
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
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/edit-title', [CMSController::class, 'showEditTitle']);
// kasih middleware nanti