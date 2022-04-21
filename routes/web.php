<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\DoctorLogin;
use App\Http\Controllers\Patient\PatientLogin;
use App\Http\Controllers\Doctor\DoctorRegister;
use App\Http\Controllers\Patient\PatientRegister;
use App\Http\Controllers\DocureFrontendController;

Route:: get('/', [ DocureFrontendController::class, 'showHomePage']);
Route:: get('login', [ DocureFrontendController::class, 'showLoginPage']);


 
Route:: get('patient/register', [ DocureFrontendController::class, 'showPatientRegPage']) -> middleware('patient.redirect');
Route:: get('patient/dashboard', [ DocureFrontendController::class, 'showPatientDashboard']) -> middleware('patient');
Route:: post('patient/register', [ PatientRegister::class, 'register']);
Route:: post('patient/login', [ PatientLogin::class, 'login']);
Route:: get('patient/logout', [ PatientLogin::class, 'logout']);


/**
 * Doctor Routs
 */
Route:: get('doctor/register', [ DocureFrontendController::class, 'showDoctorRegPage']) -> middleware('doctor.redirect');
Route:: get('doctor/dashboard', [ DocureFrontendController::class, 'showDoctorDashboard']) -> middleware('doctor');
Route:: post('doctor/register', [ DoctorRegister::class, 'register']);
Route:: post('doctor/login', [ DoctorLogin::class, 'login']);
Route:: get('doctor/logout', [ DoctorLogin::class, 'logout']);


