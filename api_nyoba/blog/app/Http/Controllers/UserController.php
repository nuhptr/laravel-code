<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
      $user = User::all();
      return response()->json($user); 
   }

   public function show($id)
   {
      $user = User::find($id);
      return response()->json($user);
   }
   public function create(Request $request)
   {
      $this->validate($request, [
         'userName' => 'required|string',
         'email' => 'required|string',
         'password' => 'required|string',
         'tempatLahir' => 'required|string',
         'tanggalLahir' => 'required|date',
         'gender' => 'required|in:laki-laki,perempuan',
         'NIK' => 'required|integer',
         'phone' => 'required|string',
      ]);
      
      $data = $request->all();
      $user = User::create($data);

      return response()->json($user);
   }
}
