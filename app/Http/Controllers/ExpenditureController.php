<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenditureController extends Controller
{
    public function expenditurepage(){
        return view('makeexpenditure');
    }

    public function submitexpenditure(Request $request){

        $user = auth()->user();

         $userid = $user->id;
         $name = $user->name;
         $date = $request->date;
         $description = $request->description;
         $amount = $request->amount;

         $savedata = DB::table('expenditure_details')
                     ->insert(
                         array(
                         'userid' => $userid,
                         'name' => $name,
                         'date' => $date,
                         'description' => $description,
                         'amount' => $amount
                     )
                     );
                
                    if ($savedata) {
                        return view('success');
           
                    } else {
                        return view('faild');
           
                  }
     }

    public function expenditurehistory(){
        $user = auth()->user();
        $data = DB::table('expenditure_details')
                ->where('userid',$user->id)->get();
        
        $totalAmount = DB::table('expenditure_details')
        ->where('userid', $user->id)
        ->sum('amount');
        return view('expenditurehistory')->with('data',$data)->with('totalAmount',$totalAmount);
    }
}
