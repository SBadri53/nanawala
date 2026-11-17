<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController1;


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
Route::resource('patients',PatientController1::class);
Route::get('/patients_list', [PatientController1::class,'patients_list']);
Route::get('/appointment/{id}', [PatientController1::class,'appointment']);

Route::get('/saifee',[App\Http\Controllers\PatientController::class, 'index']);
Route::get('/saifee/new_case',[App\Http\Controllers\PatientController::class, 'new_case']);
Route::get('/saifee/select_case',[App\Http\Controllers\PatientController::class, 'select_case']);


Route::get('/GetPatient/{id}' ,[App\Http\Controllers\PatientController::class, 'GetPatient']);
Route::get('/GetDosage/{id}/{dt}' ,[App\Http\Controllers\PatientController::class, 'GetDosage']);
Route::get('/GetLab/{id}/{dt}' ,[App\Http\Controllers\PatientController::class, 'GetLab']);
Route::get('/GetPharmacy/{id}/{dt}' ,[App\Http\Controllers\PatientController::class, 'GetPharmacy']);

Route::get('/updatePatient' ,[App\Http\Controllers\PatientController::class, 'updatePatient']);
Route::get('/updateDosage' ,[App\Http\Controllers\PatientController::class, 'updateDosage']);
Route::get('/updateLab' ,[App\Http\Controllers\PatientController::class, 'updateLab']);
Route::get('/updatePharmacy' ,[App\Http\Controllers\PatientController::class, 'updatePharmacy']);

Route::get('/deletePatient' ,[App\Http\Controllers\PatientController::class, 'deletePatient']);
Route::get('/deleteDosage' ,[App\Http\Controllers\PatientController::class, 'deleteDosage']);
Route::get('/deleteLab' ,[App\Http\Controllers\PatientController::class, 'deleteLab']);
Route::get('/deletePharmacy' ,[App\Http\Controllers\PatientController::class, 'deletePharmacy']);

Route::post('/NewPatient' ,[App\Http\Controllers\PatientController::class, 'NewPatient']);
Route::post('/GetDosage/{id}' ,[App\Http\Controllers\PatientController::class, 'storeDosage']);
Route::post('/GetLab/{id}' ,[App\Http\Controllers\PatientController::class, 'storeLab']);
Route::post('/GetPharmacy/{id}' ,[App\Http\Controllers\PatientController::class, 'storePharmacy']);

Route::post('/GetCase/{id}' ,[App\Http\Controllers\PatientController::class, 'storeCase']);

