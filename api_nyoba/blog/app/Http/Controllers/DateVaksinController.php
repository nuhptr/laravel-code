<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\DateVaksin;

use Illuminate\Http\Request;

class DateVaksinController extends Controller
{
   public function getDateVaksin()
   {
      $vaksin = DateVaksin::all();
      return response()->json($vaksin); 
   }

   public function getTransactionDateVaksin($id) 
   {
      $transcationVaksin = Transaction::find($id);
      return response()->json($transcationVaksin);
   }

   public function createDateVaksin(Request $request)
   {
      $this->validate($request, [
         'adminId' => 'required',
      ]);
      
      $data = $request->all();
      $dateVaksin = DateVaksin::create($data);

      return response()->json($dateVaksin);
   }
}