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
        $marks_array = [];
        //get all the schools uniquely
        $all_schools = collect(DB::table('results')->get());
        $unique_schools = $all_schools->unique('school_name');
        //get school with max total
        foreach($unique_schools as $school){
            //get the sum of the results
            $sum = DB::table('results')->where('school_name',$school->school_name)->sum('total');
            array_push($marks_array, $sum);
        }

        //get the max number in the array
        $max_mark = max($marks_array);
        //get the school having this sum
        return DB::table('results')->where(sum('total'), $max_mark)->value('school_name');
    }
}
