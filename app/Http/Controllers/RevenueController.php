<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    public function revenuepage(){
        return view('makerevenue');
    }

    public function submitrevenue(Request $request){

        $user = auth()->user();

         $userid = $user->id;
         $name = $user->name;
         $date = $request->date;
         $description = $request->description;
         $amount = $request->amount;

         $savedata = DB::table('revenue_details')
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

    public function revenuehistory(){
        $user = auth()->user();
        $data = DB::table('revenue_details')
                ->where('userid',$user->id)->get();

        $totalAmount = DB::table('revenue_details')
        ->where('userid', $user->id)
        ->sum('amount');
        return view('revenuehistory')->with('data',$data)->with('totalAmount',$totalAmount);
    }


    
}
