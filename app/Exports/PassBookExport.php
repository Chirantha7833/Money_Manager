<?php

namespace App\Exports;

use App\Models\PassBook;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;

class PassBookExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'ID',
            'Date',
            'Description',
            'Revenue',
            'Expenditure',
            'Balance',
        ];
    }


    public function collection()
    {
        $user = Auth::user();

        
        return PassBook::where('userid', $user->id)->get();
    }
}
