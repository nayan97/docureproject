<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Patient\PatientRegister;
use App\Http\Controllers\DocureFrontendController;

Route:: get('/', [ DocureFrontendController::class, 'showHomePage']);
Route:: get('login', [ DocureFrontendController::class, 'showLoginPage']);


 
Route:: get('patient/register', [ DocureFrontendController::class, 'showPatientRegPage']);
Route:: get('patient/dashboard', [ DocureFrontendController::class, 'showPatientDashboard']);
Route:: post('patient/register', [ PatientRegister::class, 'register']);



Route:: get('doctor/register', [ DocureFrontendController::class, 'showDoctorRegPage']);
Route:: get('doctor/dashboard', [ DocureFrontendController::class, 'showDoctorDashboard']);