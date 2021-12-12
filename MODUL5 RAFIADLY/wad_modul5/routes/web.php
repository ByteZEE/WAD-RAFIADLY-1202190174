<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PatientController;

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
    return view('content.home');
});

Route::get('/home', [VaccineController::class, 'home'])->name('content.home');

Route::get('/vaccine', [VaccineController::class, 'vaccine'])->name('vaccine');

// add vaccine
Route::get('/addVaccine', [VaccineController::class, 'add'])->name('add');

Route::post('/addVaccine', [VaccineController::class, 'addVaccine'])->name('addVaccine');

// update vaccine
Route::get('/updateVaccine/{id}', [VaccineController::class, 'editVaccine'])->name('editVaccine');

Route::post('/updateVaccine/{id}', [VaccineController::class, 'updateVaccine'])->name('updateVaccine');

// delete vaccine
Route::get('/deleteVaccine/{id}', [VaccineController::class, 'deleteVaccine'])->name('deleteVaccine');



// patient
Route::get('/Patient', [PatientController::class, 'patient'])->name('patient');

Route::get('/takeVaccine', [PatientController::class, 'takeVaccine'])->name('takeVaccine');


// add patient
Route::get('/addPatient/{id}', [PatientController::class, 'addPatient'])->name('addPatient');

Route::post('/uploadPatient', [PatientController::class, 'uploadPatient'])->name('uploadPatient');

// update patient
Route::get('/editPatient/{id}', [PatientController::class, 'editPatient'])->name('editPatient');

Route::post('/updatePatient/{id}', [PatientController::class, 'updatePatient'])->name('updatePatient');

// delete patient
Route::get('/deletePatient/{id}', [PatientController::class, 'deletePatient'])->name('deletePatient');