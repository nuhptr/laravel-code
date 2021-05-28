<?php

namespace App\Http\Controllers;

use App\Models\LoginRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function daftar(Request $request)
   {
       $this->validate($request, [
           'email' => 'required|unique:users|email',
           'password' => 'required|min:8'
        ]);

        $email = $request->input('email');
        $password = $request->input('passwod');
        $hashPassword = Hash::make($password);

        $loginuser = LoginRegister::create([
            'email' => $email,
            'password' => $hashPassword  
        ]);

        return response()->json(['message' => 'Register Success'], 201);
        }
    }