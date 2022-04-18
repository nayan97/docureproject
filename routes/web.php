<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Patient\PatientLogin;
use App\Http\Controllers\Patient\PatientRegister;
use App\Http\Controllers\DocureFrontendController;

Route:: get('/', [ DocureFrontendController::class, 'showHomePage']);
Route:: get('login', [ DocureFrontendController::class, 'showLoginPage']);


 
Route:: get('patient/register', [ DocureFrontendController::class, 'showPatientRegPage']) -> middleware('patient.redirect');
Route:: get('patient/dashboard', [ DocureFrontendController::class, 'showPatientDashboard']) -> middleware('patient');
Route:: post('patient/register', [ PatientRegister::class, 'register']);
Route:: post('patient/login', [ PatientLogin::class, 'login']);
Route:: get('patient/logout', [ PatientLogin::class, 'logout']);



Route:: get('doctor/register', [ DocureFrontendController::class, 'showDoctorRegPage']);
Route:: get('doctor/dashboard', [ DocureFrontendController::class, 'showDoctorDashboard']);