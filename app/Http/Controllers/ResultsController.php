<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ResultsExport;
use App\Imports\ResultsImport;
use App\Models\Result;
use Maatwebsite\Excel\Facades\Excel;

class ResultsController extends Controller
{
    /**
     * this function exports the file
     */
    public function export() 
    {
        return Excel::download(new ResultsExport, 'results.xlsx');
    }

    /**
     * this function makes an import of the results file
     */
    public function import() 
    {
        Excel::import(new ResultsImport,request()->file('file'));
        return back();
    }

    /**
     * this function gets the results uploaded
     */
    protected function getUploadedResults(){
        $results = Result::get();
        return $results;
    }
}
