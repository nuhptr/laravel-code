<?php

namespace App\Http\Controllers;

use App\Models\LoginRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {

public function login(Request $request)
   {
       $this->validate($request, [
           'password' => 'required|min:8'
     ]);

     $email = $request->input('email');
     $password = $request->input('passwod');

     $user = LoginRegister::where('email', $email)->first();
     if (!$user) {
         return response()->json(['message' => 'login failed'], 401);
     }

     $isValidPassword = Hash::check($password, $user->password);
     if (!$isValidPassword)  {
         return response()->json(['message' => 'login failed'], 401);
     }

     $generateToken = bin2hex(random_bytes(5));
     $user->update([
         'token' => $generateToken
     ]);

     return response()->json($user);   
   }
}