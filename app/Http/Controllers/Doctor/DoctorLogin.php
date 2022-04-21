<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DoctorLogin extends Controller
{
    public function logout()
    {
      
        Auth::guard('doctor') -> logout();

        
            return redirect('/login');
        
    }
}
