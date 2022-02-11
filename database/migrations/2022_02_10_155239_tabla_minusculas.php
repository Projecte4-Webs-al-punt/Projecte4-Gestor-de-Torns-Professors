<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaMinusculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('Teachers', 'teachers');
        Schema::rename('Students', 'students');
        Schema::rename('Doubts', 'doubts');
        Schema::rename('ClassGroups', 'classgroups');
        Schema::rename('Teacher_ClassGroup', 'teacher_classgroup');
        Schema::rename('Student_ClassGroup', 'student_classgroup');
        Schema::rename('Subjects', 'subjects');
        Schema::rename('Teacher_Subject', 'teacher_subject');
        Schema::rename('Student_Subject', 'student_subject');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}