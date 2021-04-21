<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function Register(Request $request){

        $register = new Registration();
        $register->name = $request->name;
        $register->phone_number = $request->phone_number;
        $register->email = $request->email;
        $register->save();
    
        return response()->json([
            "message" => "registation successful"
        ], 201);
    }
}
