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
            // 'group_name'        => $row[0],
            // 'sub_group_name'    => $row[1], 
            // 'serial_number'     => $row[2], 
            // 'secrete_code'      => $row[3], 
            'index_number'        => $row[0], 
            'first_name'          => $row[1],
            'second_name'         => $row[2],
            'third_name'          => $row[3],
            'fourth_name'         => $row[4],
            'female_gender'       => $row[5], 
            'male_gender'         => $row[6],
            'english_languge'     => $row[7],
            'CRE'                 => $row[8],
            'IRE'                 => $row[9],
            'mathematics'         => $row[10],
            'physics'             => $row[11],
            'chemistry'           => $row[12],
            'biology'             => $row[13],
            'agriculture'         => $row[14],
            'additional_mtc'      => $row[15],
            'computer_science'    => $row[16],
            'geography'           => $row[17],
            'history'             => $row[18],
            'commerce'            => $row[19],
            'general_science'     => $row[20],
            'principles_of_accounts'  => $row[21],
            'english_literatue'       => $row[22],
            'arabic_language'     => $row[23],
            'french_language'     => $row[24],
            'fine_arts'           => $row[25],
            'total'               => $row[26],
            'percentage'          => $row[27],
            'result'              => $row[28],
            'number_of_subjects'  => $row[29],
            'center_number'       => $row[30],
            'school_name'         => $row[31],
            'state'               => $row[32]                           
        ]);
    }
}
