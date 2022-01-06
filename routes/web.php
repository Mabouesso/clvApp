ppatientco<?php

use App\Http\Controllers\MembreController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaysController;
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
Route::get("/membre/create", [MembreController::class, 'create'])->name('membre.create');

############################  patient ##########################################
Route::get("/patient/index", [PatientController::class, 'index'])->name('patient.index');
Route::get("/patient/create", [PatientController::class, 'create'])->name('patient.create');
Route::get("/patient/edite/id", [PatientController::class, 'edite'])->name('patient.edite');

############################  pays ##########################################

Route::get("/pays/create", [PaysController::class, 'create'])->name('pays.create');
