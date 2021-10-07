<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
        'created_by',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * this function counts the number of schools that have results
     */
    public function countNumberOfSchools(){
        $number_of_schools = collect(DB::table('results')->get());
        return $number_of_schools->unique('school_name')->count();
    }

    /**
     * this function counts the number of students that have results
     */
    public function countNumberOfStudents(){
        return DB::table('results')->count();
    }

    /**
     * this function counts the number of boys who have results
     */
    public function countNumberOfBoys(){
        return DB::table('results')->where('male_gender','!=',null)->count();
    }

    /**
     * this function counts the number of girls who have results
     */
    public function countNumberOfGirls(){
        return DB::table('results')->where('female_gender','!=',null)->count();
    }

    /**
     * this function gets the best performed student
     */
    public function getBestPerformer(){
        $max_total = DB::table('results')->get()->max('total');
        $student_names = DB::table('results')->where('total',$max_total)->select('first_name','second_name','third_name','fourth_name')->get();
        return $student_names;
    }

    /**
     * this function gets the best performed student
     */
    public function getBestPerformerTotal(){
        $max_total = DB::table('results')->get()->max('total');
        return $max_total;
    }


    /**
     * this function gets the best performed student
     */
    public function getWorstPerformer(){
        $min_total = DB::table('results')->get()->min('total');
        $student_names = DB::table('results')->where('total',$min_total)->select('first_name','second_name','third_name','fourth_name')->get();
        return $student_names;
    }

    /**
     * this function gets the best performed student
     */
    public function getWorstPerformerTotal(){
        $min_total = DB::table('results')->get()->min('total');
        return $min_total;
    }

    /**
     * this function gets the best performing gender
     */
    public function getBestPerformingGender(){
        //get the sum of marks for female gender
        $female_gender_marks = DB::table('results')->where('female_gender','!=',null)->sum('total');
        //get the total of marks of the male gender
        $male_gender_marks = DB::table('results')->where('male_gender','!=',null)->sum('total');
        //if the male gender has the max marks, the it performed best, and vice verser
        if($male_gender_marks > $female_gender_marks){
            return 'Male';
        }else{
            return 'Female';
        }
    }

    /**
     * this function gets the worst performing gender
     */
    public function getWorstPerformingGender(){
        if($this->getBestPerformingGender() == 'Male'){
            return 'Female';
        }else{
            return 'Male';
        }
    }

    /**
     * best performing School
     */
    public function calculateTheBestPerformingSchool(){
        //marks array
        $total_array = [];
        $school_name_array = [];
        //get all the schools uniquely
        $all_schools = collect(DB::table('results')->get());
        $unique_schools = $all_schools->unique('school_name');
        //get school with max total
        foreach($unique_schools as $school){
            //get the sum of the results
            $sum = DB::table('results')->where('school_name',$school->school_name)->sum('total');
            if(in_array($school->school_name, $school_name_array)){
                continue;
            }else{
                array_push($total_array, $sum);
                array_push($school_name_array, $school->school_name);
            }

        }
        //get the maximum marks
        if(empty($total_array)){
            return 0;
        }else{
            $maximum_total = max($total_array);
            //array position
            $array_position = array_search($maximum_total, $total_array);
            //get the school in this postion
            return $school_name_array[$array_position];
        }
    }

    //this function calculates the worst performing school
    public function calculateTheWorstPerformingSchool(){
        //marks array
        $total_array = [];
        $school_name_array = [];
        //get all the schools uniquely
        $all_schools = collect(DB::table('results')->get());
        $unique_schools = $all_schools->unique('school_name');
        //get school with max total
        foreach($unique_schools as $school){
            //get the sum of the results
            $sum = DB::table('results')->where('school_name',$school->school_name)->sum('total');
            if(in_array($school->school_name, $school_name_array)){
                continue;
            }else{
                array_push($total_array, $sum);
                array_push($school_name_array, $school->school_name);
            }

        }
        //get the maximum marks
        if(empty($total_array)){
            return 0;
        }else{
            $minimum_total = min($total_array);
            //array position
            $array_position = array_search($minimum_total, $total_array);
            //get the school in this postion
            return $school_name_array[$array_position];
        }
    }

    /**
     * this function calculates the best performed state
     */
    public function calculateTheBestPerformingState(){
        //marks array
        $total_array = [];
        $state_name_array = [];
        //get all the schools uniquely
        $all_states = collect(DB::table('results')->get());
        $unique_states = $all_states->unique('state');
        //get school with max total
        foreach($unique_states as $state){
            //get the sum of the results
            $sum = DB::table('results')->where('state',$state->state)->sum('total');
            if(in_array($state->state, $state_name_array)){
                continue;
            }else{
                array_push($total_array, $sum);
                array_push($state_name_array, $state->state);
            }
        }
        //get the maximum marks
        if(empty($total_array)){
            return 0;
        }else{
            $maximum_total = max($total_array);
            //array position
            $array_position = array_search($maximum_total, $total_array);
            //get the school in this postion
            return $state_name_array[$array_position];
        }
    }

    /**
     * this function calculates the worst performed state
     */
    public function calculateTheWorstPerformingState(){
        //marks array
        $total_array = [];
        $state_name_array = [];
        //get all the schools uniquely
        $all_states = collect(DB::table('results')->get());
        $unique_states = $all_states->unique('state');
        //get school with max total
        foreach($unique_states as $state){
            //get the sum of the results
            $sum = DB::table('results')->where('state',$state->state)->sum('total');
            if(in_array($state->state, $state_name_array)){
                continue;
            }else{
                array_push($total_array, $sum);
                array_push($state_name_array, $state->state);
            }
        }
        //get the minimum marks
        if(empty($total_array)){
            return 0;
        }else{
            $minimum_total = min($total_array);
            //array position
            $array_position = array_search($minimum_total, $total_array);
            //get the school in this postion
            // return $array_position;
            return $state_name_array[2];
        }
    }
}
