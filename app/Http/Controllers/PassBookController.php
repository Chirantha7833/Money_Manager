<?php

namespace App\Http\Controllers;

use App\Exports\PassBookExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PassBookController extends Controller
{
    public function addrevenue(Request $request){

        $user = auth()->user();

        $userid = $user->id;
        $date = $request->date;
        $description = $request->description;
        $revenue = $request->amount;

    

        $savedata = DB::table('pass_books')
                    ->insert(
                        array(
                        'userid' => $userid,
                        'date' => $date,
                        'description' => $description,
                        'revenue' => $revenue,
                        'expenditure' => 0,
                    )
                    );
                    if ($savedata) {
                        return view('success');
           
                    } else {
                        return view('faild');
           
                  }
               
    }

    public function addexpenditure(Request $request){
        $user = auth()->user();

        $userid = $user->id;
        $date = $request->date;
        $description = $request->description;
        $expenditure = $request->amount;

    

        $savedata = DB::table('pass_books')
                    ->insert(
                        array(
                        'userid' => $userid,
                        'date' => $date,
                        'description' => $description,
                        'revenue' => 0,
                        'expenditure' => $expenditure,
                    )
                    );
                    if ($savedata) {
                        return view('success');
           
                    } else {
                        return view('faild');
           
                  }
    }

    public function viewpassbook(){
        $user = auth()->user();
        $data = DB::table('pass_books')
                ->where('userid',$user->id)->get();
        
                $totalBalance = 0;
                
                foreach ($data as $row) {
                    $row->balance = $totalBalance + $row->revenue - $row->expenditure;
                    $totalBalance = $row->balance;
                }

        return view('passbook')->with('data',$data)->with('totalBalance',$totalBalance);
    }

    public function export()
{
    return Excel::download(new PassBookExport, 'passbook.xlsx');
}
}
