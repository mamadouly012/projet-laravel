<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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

Route::get('/apprenant', function () {
    return view('apprenant');
});

Route::get('/liste-apprenant',[ApprenantController::class,'index']);
Route::get('/liste-formation',[FormationController::class,'index']);