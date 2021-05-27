<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function getAdmin()
   {
      $user = Admin::all();
      return response()->json($user); 
   }

   public function getAdminId($id)
   {
      $admin = Admin::find($id);
      return response()->json($admin);
   }
   
   public function createAdmin(Request $request)
   {
      $this->validate($request, [
        'name' => 'required|string',
        'hospital'  => 'required|string',         
      ]);
      
      $data = $request->all();
      $admin = Admin::create($data);

      return response()->json($admin);
   }
}

