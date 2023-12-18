<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BalanceController extends Controller
{
    public function balance(){
        $user = auth()->user();

        $totalRevenue = DB::table('revenue_details')
        ->where('userid', $user->id)
        ->sum('amount');

        $totalExpenditure = DB::table('expenditure_details')
        ->where('userid', $user->id)
        ->sum('amount');

        $totalBalance = $totalRevenue - $totalExpenditure;
        
        return view('mydashboard')->with('totalRevenue', $totalRevenue)->with('totalExpenditure', $totalExpenditure)->with('totalBalance',$totalBalance);
    }

  
}
