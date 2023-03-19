<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PublicPersonImport;


class ExcelController extends Controller
{
    // IMPORT  EXCEL .... 
    public function importExcel(Request $request)
    {
        Excel::import(new PublicPersonImport,request()->file('file'));
        return 'ALL RIGTH';
    }
}
