<?php

namespace App\Imports;

use App\Models\Result;
use Maatwebsite\Excel\Concerns\ToModel;

class ResultsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result([
            'group_name'        => $row[0],
            'sub_group_name'    => $row[1], 
            'serial_number'     => $row[2], 
            'secrete_code'      => $row[3], 
            'index_number'      => $row[4], 
            'first_name'        => $row[5],
            'second_name'       => $row[6],
            'third_name'        => $row[7],
            'fourth_name'       => $row[8],
            'female_gender'     => $row[9], 
            'male_gender'       => $row[10],
            'english_languge'   => $row[11],
            'CRE'               => $row[12],
            'IRE'               => $row[13],
            'mathematics'       => $row[14],
            'physics'           => $row[15],
            'chemistry'         => $row[16],
            'biology'           => $row[17],
            'agriculture'       => $row[18],
            'additional_mtc'    => $row[19],
            'computer_science'  => $row[20],
            'arabic_language'   => $row[21],
            'french_language'   => $row[22],
            'fine_arts'         => $row[23],
            'geography'         => $row[24],
            'history'           => $row[25],
            'commerce'          => $row[26],
            'general_science'   => $row[27],
            'principles_of_accounts'  => $row[28],
            'english_literatue'       => $row[29],
            'no_of_subjects'          => $row[30],
            'center_number'           => $row[31],
            'school_name'             => $row[32],
            'state'                   => $row[33],                           
        ]);
    }
}
