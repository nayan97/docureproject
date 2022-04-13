<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientRegister extends Controller
{
    public function register(Request $request)
    {
    $this -> validate($request , [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

   
    
    Patient::create([
        'name'      =>$request ->name,
        'email'     =>$request ->email,
        'password'  =>$request ->password
    ]);
    return back() -> with('success','Patient account successfuly!');
     /**
    */

    /**
    
    
    
    */
  
    }
}
