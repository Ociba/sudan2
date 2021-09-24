<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('group_name')->nullable();
            $table->string('sub_group_name')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('secrete_code')->nullable();
            $table->string('index_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('fourth_name')->nullable();
            $table->string('female_gender')->nullable();
            $table->string('male_gender')->nullable();
            $table->string('english_languge')->nullable();
            $table->string('CRE')->nullable();
            $table->string('IRE')->nullable();
            $table->string('mathematics')->nullable();
            $table->string('physics')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('biology')->nullable();
            $table->string('agriculture')->nullable();
            $table->string('additional_mtc')->nullable();
            $table->string('computer_science')->nullable();
            $table->string('arabic_language')->nullable();
            $table->string('french_language')->nullable();
            $table->string('fine_arts')->nullable();
            $table->string('geography')->nullable();
            $table->string('history')->nullable();
            $table->string('commerce')->nullable();
            $table->string('general_science')->nullable();
            $table->string('principles_of_accounts')->nullable();
            $table->string('english_literatue')->nullable();
            $table->string('no_of_subjects')->nullable();
            $table->string('center_number')->nullable();
            $table->string('school_name')->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
