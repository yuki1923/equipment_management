<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function show()
    {
        return view('equipment.signup');
    }
}
