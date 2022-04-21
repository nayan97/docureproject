<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class PatientLogin extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
  

    if(Auth::guard('patient') -> attempt(['email' => $request ->email, 'password' => $request ->password]
    )){
     return redirect('/patient/dashboard');  
    }else  if(Auth::guard('doctor') -> attempt(['email' => $request ->email, 'password' => $request ->password]
    )){
     return redirect('/doctor/dashboard');  
    
    
    }else  
    {
        return back() -> with('danger', 'Worong Email or Password');
    }
    }

    public function logout()
    {
      
        Auth::guard('patient') -> logout();

        
            return redirect('/login');
        
    }



}
