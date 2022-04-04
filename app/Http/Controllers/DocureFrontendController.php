<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocureFrontendController extends Controller
{
    /**
     * show Home Page
     */
public function showHomePage()
{
    return view('docure.pages.home');
}


    /**
     * show Login Page
     */
    public function showLoginPage()
    {
        return view('docure.pages.login');
    }
   
    
        /**
     * showPatientRegPage
     */
    public function  showPatientRegPage()
    {
        return view('docure.pages.patient.register');
    }

        
        /**
     * show Doctor RegPage
     */
    public function  showDoctorRegPage()
    {
        return view('docure.pages.doctor.register');
    }


           /**
     * show Patient Dashboard
     */
    public function  showPatientDashboard()
    {
        return view('docure.pages.patient.dashboard');
    }
           /**
     * show Patient Dashboard
     */
    public function  showDoctorDashboard()
    {
        return view('docure.pages.doctor.dashboard');
    }

   
    }
