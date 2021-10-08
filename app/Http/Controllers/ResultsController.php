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
        $results = Result::Paginate(10);
        return view('results', compact('results'));
    }
    /** 
     * This function adds result to particular student
    */
    protected function addResults($student_id){
        $add_results = Result::where('id',$student_id)->get();
        //$add_results->makeHidden(['english_languge', 'CRE']);
        return view('add-results', compact('add_results'));
    }
    /** 
     * This function create results for the particular student
    */
    protected function createResults($student_id){
        Result::where('id',$student_id)->update(array(
            'english_languge'            =>request()->english_languge,
            'CRE'                        =>request()->CRE,
            'IRE'                        =>request()->IRE,
            'mathematics'                =>request()->mathematics,
            'physics'                    =>request()->physics,
            'chemistry'                  =>request()->chemistry,
            'biology'                    =>request()->biology,
            'agriculture'                =>request()->agriculture,
            'additional_mtc'             =>request()->additional_mtc,
            'computer_science'           =>request()->computer_science,
            'arabic_language'            =>request()->arabic_language,
            'french_language'            =>request()->french_language,
            'fine_arts'                  =>request()->fine_arts,
            'geography'                  =>request()->geography,
            'history'                    =>request()->history,
            'commerce'                   =>request()->commerce,
            'general_science'            =>request()->general_science,
            'principles_of_accounts'     =>request()->principles_of_accounts,
            'english_literatue'          =>request()->english_literatue,

        ));
        return redirect()->back()->with('msg','You have successfully Entered Marks');
    }
    /** 
     * This function gets general school performance
    */
    protected function getSchoolPerformance(){
        $results = Result::distinct('school_name')->get(['school_name','center_number','state']);
        return view('school_performance', compact('results'));
    }
     /** 
     * This function gets general students performance
    */
    protected function getStudentsPerformance(){
        $results = Result::orderBy('total','desc')->simplePaginate(10);
        return view('students_performance', compact('results'));
    }
     /** 
     * This function gets general Boys performance
    */
    protected function getBoysPerformance(){
        $results = Result::where('male_gender','M')->orderBy('total','desc')->paginate(10);
        return view('boys_performance', compact('results'));
    }
     /** 
     * This function gets general Girls performance
    */
    protected function getGirlsPerformance(){
        $results = Result::where('female_gender','F')->orderBy('total','desc')->paginate(10);
        return view('girls_performance', compact('results'));
    }
     /** 
     * This function gets general States performance
    */
    protected function getStatesPerformance(){
        $results = Result::get()->unique('state');
        return view('states_performance', compact('results'));
    }

    protected function searchByIndexNumber(){
        $results= Result::where('index_number',request()->search)->paginate(10);
        return view('results',compact('results'));
    }
}
