<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DoctorRegister extends Controller
{
    public function register(Request $request)
    {
        $this -> validate($request , [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        Doctor::create([
            'name'      =>$request ->name,
            'email'     =>$request ->email,
            'password'  =>Hash::make($request ->password)
        ]);
        return back() -> with('success','Doctor account successfuly!');
    
    }
}
