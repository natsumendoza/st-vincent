<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            // Personal Profile
            $table->string('lrn')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('image_path')->nullable();
            $table->string('birthday');
            $table->string('age');
            $table->string('gender');
            $table->string('place_of_birth');
            $table->string('home_address');
            $table->string('contact_number');
            $table->string('grade');
            $table->string('section');

            // Family Profile
            // Father
            $table->string('first_name_father')->nullable();
            $table->string('middle_name_father')->nullable();
            $table->string('last_name_father')->nullable();
            $table->string('birthday_father')->nullable();
            $table->string('occupation_father')->nullable();
            $table->string('home_address_father')->nullable();
            $table->string('contact_number_father')->nullable();

            // Mother
            $table->string('first_name_mother')->nullable();
            $table->string('middle_name_mother')->nullable();
            $table->string('last_name_mother')->nullable();
            $table->string('birthday_mother')->nullable();
            $table->string('occupation_mother')->nullable();
            $table->string('home_address_mother')->nullable();
            $table->string('contact_number_mother')->nullable();

            // Guardian
            $table->string('first_name_guardian')->nullable();
            $table->string('middle_name_guardian')->nullable();
            $table->string('last_name_guardian')->nullable();
            $table->string('birthday_guardian')->nullable();
            $table->string('occupation_guardian')->nullable();
            $table->string('home_address_guardian')->nullable();
            $table->string('contact_number_guardian')->nullable();

            // Sibling
            $table->string('first_name_sibling')->nullable();
            $table->string('middle_name_sibling')->nullable();
            $table->string('last_name_sibling')->nullable();
            $table->string('age_sibling')->nullable();

            // Educational Profile
            // Kindergarten
            $table->string('school_attended_kindergarten')->nullable();
            $table->string('year_completed_kindergarten')->nullable();
            $table->string('academic_standing_kindergarten')->nullable();

            // Grade 1
            $table->string('school_attended_grade1')->nullable();
            $table->string('year_completed_grade1')->nullable();
            $table->string('academic_standing_grade1')->nullable();

            // Grade 2
            $table->string('school_attended_grade2')->nullable();
            $table->string('year_completed_grade2')->nullable();
            $table->string('academic_standing_grade2')->nullable();

            // Grade 3
            $table->string('school_attended_grade3')->nullable();
            $table->string('year_completed_grade3')->nullable();
            $table->string('academic_standing_grade3')->nullable();

            // Grade 4
            $table->string('school_attended_grade4')->nullable();
            $table->string('year_completed_grade4')->nullable();
            $table->string('academic_standing_grade4')->nullable();

            // Grade 5
            $table->string('school_attended_grade5')->nullable();
            $table->string('year_completed_grade5')->nullable();
            $table->string('academic_standing_grade5')->nullable();

            // Grade 6
            $table->string('school_attended_grade6')->nullable();
            $table->string('year_completed_grade6')->nullable();
            $table->string('academic_standing_grade6')->nullable();

            // Grade 7
            $table->string('school_attended_grade7')->nullable();
            $table->string('year_completed_grade7')->nullable();
            $table->string('academic_standing_grade7')->nullable();

            // Grade 8
            $table->string('school_attended_grade8')->nullable();
            $table->string('year_completed_grade8')->nullable();
            $table->string('academic_standing_grade8')->nullable();

            // Grade 9
            $table->string('school_attended_grade9')->nullable();
            $table->string('year_completed_grade9')->nullable();
            $table->string('academic_standing_grade9')->nullable();

            // Grade 10
            $table->string('school_attended_grade10')->nullable();
            $table->string('year_completed_grade10')->nullable();
            $table->string('academic_standing_grade10')->nullable();

            // Grade 11
            $table->string('school_attended_grade11')->nullable();
            $table->string('year_completed_grade11')->nullable();
            $table->string('academic_standing_grade11')->nullable();

            // Grade 12
            $table->string('school_attended_grade12')->nullable();
            $table->string('year_completed_grade12')->nullable();
            $table->string('academic_standing_grade12')->nullable();

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
        Schema::dropIfExists('students');
    }
}
