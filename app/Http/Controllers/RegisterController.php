<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validated_data = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phonenumber'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
        ]);

        $data = $request->only(['firstname','lastname','phonenumber','email','password','password_confirmation']);
        $register = Register::create($data);
        return "You are successfully registered!";
    }
}
