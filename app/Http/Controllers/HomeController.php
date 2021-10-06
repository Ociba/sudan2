<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /** 
     * This function gets the dashboard page
    */
    protected function getDashboard(){
        $get_number_of_boys =DB::table('results')->where('male_gender','M')->count();
        $get_number_of_girls =DB::table('results')->where('female_gender','F')->count();
        $count_for_last_six_years=DB::table('results')->whereYear('created_at', date('Y', strtotime('-1 year')));
        $total_number_of_candidates =$get_number_of_boys + $get_number_of_girls;
        $girls_percentage =($get_number_of_girls/$total_number_of_candidates)*100;
        $boys_percentage =($get_number_of_boys/$total_number_of_candidates)*100;
        return view('dashboard', compact('get_number_of_boys','get_number_of_girls','total_number_of_candidates','girls_percentage','boys_percentage'));
    }
}
