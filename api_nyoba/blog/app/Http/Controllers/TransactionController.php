<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function getUserTransaction()
   {
      $transcation = User::all();
      return response()->json($transcation); 
   }

   public function getTransactionAll()
   {
      $transcation = Transaction::all();
      return response()->json($transcation); 
   }

   public function getTransaction($id)
   {
      $transcation = Transaction::find($id);
      return response()->json($transcation);
   }
   
   public function createTransaction(Request $request)
   {
      $this->validate($request, [
        'userID' => 'required|int',
        'date' => 'required|date',
        'location'  => 'required|string',         
      ]);
      
      $data = $request->all();
      $transcation = Transaction::create($data);

      return response()->json($transcation);
   }
}

