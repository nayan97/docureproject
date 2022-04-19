<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorLogin extends Controller
{
    public function login(Request $request)
    {
        return $request -> all();
    }
}
